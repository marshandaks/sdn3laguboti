<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    use ValidatesRequests;
    public function index()
    {
        return view('admin.berita.index', [
            'berita' => Berita::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:3000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',
            'desc.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/berita', $fileName);

        # pengumuman
        $storage = "storage/content-berita";
        $dom = new \DOMDocument();

        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();

        # Baca di https://dosenit.com/php/fungsi-libxml-php
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('beritaDashboard'))->with('success', 'data berhasil di simpan');
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.edit', [
            'berita' => $berita
        ]);
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:5000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'image' => $fileCheck,
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',
            'desc.required' => 'Deskirpsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/berita/' . $berita->image)) {
                \File::delete('storage/berita/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/berita', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // pengumuman
        $storage = "storage/content-berita";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1200, 1200)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        $berita->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('beritaDashboard'))->with('success', 'data berhasil di update');
    }

    // destoy berita
    public function destroy($id)
    {
        $berita = Berita::find($id);
        if (\File::exists('storage/berita/' . $berita->image)) {
            \File::delete('storage/berita/' . $berita->image);
        }

        $berita->delete();

        return redirect(route('beritaDashboard'))->with('success', 'data berhasil di hapus');
    }
}
