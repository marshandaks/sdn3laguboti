# SDN1 Management

## Introduction
This repository contains the source code for a web application built using the Laravel framework. The application serves as a platform for managing various aspects of an organization or institution, including authentication, content management, and administration of resources such as blogs, photos, announcements, and more.

## Features
- **Authentication**: Users can sign in securely to access the application's features based on their roles.
- **Dashboard**: Authenticated users can access a personalized dashboard displaying relevant information and administrative tools.
- **Content Management**: Administrators can manage various types of content such as blogs, photos, announcements, and more.
- **Resource Management**: The application allows for the management of resources like staff information, history, achievements, etc.
- **Feedback Management**: Users can submit feedback or suggestions, which administrators can review and manage.

## Installation
1. Clone the repository to your local machine.
   ```bash
   git clone https://github.com/danismg/SDN1-management
   ```
2. Navigate to the project directory.
   ```bash
   cd SDN1-management
   ```
3. Install dependencies via Composer.
   ```bash
   composer install
   ```
4. Create a copy of the `.env.example` file and rename it to `.env`.
5. Generate an application key.
   ```bash
   php artisan key:generate
   ```
6. Configure the database settings in the `.env` file.
7. Run database migrations.
   ```bash
   php artisan migrate:fresh --seed
   ```
8. Serve the application.
   ```bash
   php artisan serve
   ```

## Usage
- Access the application through the provided URL after serving it locally.
- Sign in using the provided authentication system.
- Explore different sections of the application based on your role.
- Use the administrative features to manage content, resources, and user feedback.

## Description

This web application serves as the online platform for SD Negeri 173551 Laguboti, providing various features and information about the school. Below is a brief description of each section available in the navbar:

### Navbar
1. **Home**: Displays the school's logo and a welcome message with a link to the "Visi Misi" section. Also includes a button to navigate to the gallery.
2. **Profile**: Dropdown menu containing:
   - **Visi Misi**: Vision and mission statement of the school.
   - **Sejarah Sekolah**: History of SD Negeri 173551 Laguboti.
   - **Prestasi**: Achievements of the school.
3. **Tenaga Kerja**: Provides information about the school staff including their names, date of birth, subjects taught, positions, and photos.
4. **Pengumuman**: Displays announcements with accompanying images.
5. **Saran**: Allows users to submit feedback or suggestions.
6. **Contact**: Provides contact information including WhatsApp, Gmail, Facebook, and the school's location on Google Maps.

### Sejarah Sekolah
Provides a detailed description of SD Negeri 173551 Laguboti's history, its role in the community, address, contact email, facilities, schedule, accreditation, and its significance in the education sector.

### Prestasi
Highlights the school's achievements, including its accreditation and notable victories such as winning the Olimpiade Matematika.

### Visi Misi
Presents the school's vision, which is to excel, have faith, and cultivate culture with high discipline in a comfortable school environment. The mission statement outlines goals related to effective learning, fostering excellence, and helping students realize their full potential.

### Pengumuman
Announcements regarding school events and activities such as holiday schedules, morning exercises, English days, and reading days.

### Contact
Contact information for the school, including WhatsApp number, Facebook page, Gmail address, and location on Google Maps.

Feel free to explore each section of the website for more detailed information about SD Negeri 173551 Laguboti.

## Contributing
Contributions are welcome! If you find any issues or have suggestions for improvement, please open an issue or submit a pull request.

## License
This project is licensed under the [MIT License](LICENSE).

## Contact
For any inquiries or support, please contact danit.balai@gmail.com.

Feel free to customize this README according to your preferences and add any additional information that might be relevant.
