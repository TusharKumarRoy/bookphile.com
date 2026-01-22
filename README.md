# 📚 Bookphile - Social Reading Platform

[![Laravel](https://img.shields.io/badge/Laravel-12.0-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2-blue.svg)](https://php.net)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind-3.1-38B2AC.svg)](https://tailwindcss.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

A full-featured social reading platform inspired by Goodreads.com, where book lovers can discover, track, review, and discuss their favorite books in a vibrant community setting.

> **Note:** This project was originally developed as part of CSE 3100: Web Programming Laboratory and has been continuously improved and expanded with new features.

## ✨ Features

### 📖 Reading Management
- **Book Discovery** - Browse and search through a comprehensive database of books, authors, and genres
- **Reading Lists** - Track books with status: Want to Read, Currently Reading, or Finished
- **Personal Library** - Organize your reading journey with customizable wishlists and favorites
- **Reviews & Ratings** - Share your thoughts with detailed reviews and star ratings
- **Book Details** - View comprehensive information including ISBN, publication dates, page counts, and cover images

### 👥 Social Networking
- **User Profiles** - Customizable profiles with bio, avatar, and reading statistics
- **Friend System** - Send and accept friend requests to build your reading network
- **Follow Users** - Follow readers and authors to stay updated with their activities
- **Activity Feed** - Personalized timeline showing friends' reading activities and posts
- **Posts & Comments** - Share thoughts, create discussions, and engage with the community
- **Reactions** - Express yourself with reactions on posts, comments, and reviews
- **Direct Messaging** - Real-time one-on-one conversations with other readers

### 🌐 Communities
- **Reading Groups** - Create or join book clubs and genre-specific communities
- **Community Chat** - Dedicated messaging system for group discussions
- **Moderation Tools** - Role-based permissions (Owner, Admin, Moderator, Member)
- **Privacy Controls** - Public communities or private groups with join requests
- **Community Management** - Transfer ownership and manage member roles

### 🔔 Engagement Features
- **Real-time Notifications** - Stay updated on likes, comments, friend requests, and mentions
- **Activity Timeline** - Track your reading history and social interactions
- **User Search** - Find and connect with fellow book enthusiasts
- **Report System** - Community moderation and content reporting
- **Block & Mute** - Control your social experience

### 🛡️ Admin Panel
- **Multi-level Access** - Master Admin and Regular Admin roles with granular permissions
- **Content Management** - CRUD operations for books, authors, and genres
- **Bulk Operations** - Import/export data via CSV or JSON formats
- **User Management** - Oversee user accounts and handle reports
- **Sample Files** - Download templates for bulk data imports
- **Author Verification** - Verify legitimate author accounts

## 🚀 Tech Stack

### Backend
- **Framework:** Laravel 12
- **Language:** PHP 8.2
- **Database:** MySQL
- **Authentication:** Laravel Breeze
- **Notifications:** Laravel Notifications

### Frontend
- **CSS Framework:** Tailwind CSS 3.1
- **JavaScript:** Alpine.js 3.4
- **Build Tool:** Vite 7.0
- **HTTP Client:** Axios

### Development Tools
- **Package Manager:** Composer & NPM
- **Testing:** PHPUnit
- **Code Quality:** Laravel Pint

## 📋 Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL >= 8.0
- Apache/Nginx web server

## 🔧 Installation

### 1. Clone the Repository
```bash
git clone https://github.com/tusharkumarroy/bookphile.git
cd bookphile
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install
```

### 3. Environment Configuration
```bash
# Copy the example environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Setup
Configure your database credentials in `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bookphile
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Run migrations and seeders:
```bash
php artisan migrate --seed
```

### 5. Storage Setup
```bash
# Create symbolic link for storage
php artisan storage:link
```

### 6. Build Assets
```bash
# For development
npm run dev

# For production
npm run build
```

### 7. Start Development Server
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## 🎯 Usage

### Default Admin Account
After seeding, you can log in with:
- **Email:** (check your seeder configuration)
- **Password:** (check your seeder configuration)

### User Roles
- **Master Admin** - Full system access including user management
- **Admin** - Content management and moderation (cannot manage other admins)
- **User** - Standard reading and social features

### Bulk Import
1. Navigate to Admin Panel
2. Select Books, Authors, or Genres
3. Choose "Bulk Import"
4. Download sample files for format reference
5. Upload your CSV or JSON file

## 📁 Project Structure

```
bookphile/
├── app/
│   ├── Http/Controllers/      # Application controllers
│   ├── Models/                # Eloquent models
│   ├── Notifications/         # Notification classes
│   └── Traits/                # Reusable traits
├── database/
│   ├── migrations/            # Database migrations
│   ├── seeders/               # Database seeders
│   └── factories/             # Model factories
├── resources/
│   ├── views/                 # Blade templates
│   ├── js/                    # JavaScript files
│   └── css/                   # Stylesheets
├── routes/
│   ├── web.php               # Web routes
│   ├── api.php               # API routes
│   └── auth.php              # Authentication routes
└── public/                    # Public assets
```

## 🔐 Security Features

- CSRF Protection
- SQL Injection Prevention (Eloquent ORM)
- XSS Protection
- Password Hashing (bcrypt)
- Email Verification
- Role-based Access Control
- Secure File Uploads

## 🎨 Key Features in Detail

### Import/Export System
- Support for both CSV and JSON formats
- Sample files provided for each entity type
- Bulk operations for efficient data management
- Error handling and validation

### Social Interactions
- Friend connections with request/accept flow
- Asymmetric follow system
- Threaded comments
- Multiple reaction types
- Pin important posts

### Notification System
- Real-time notification updates
- Multiple notification types
- Customizable notification settings
- Mark as read functionality

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👤 Author

**Tushar Kumar Roy**
- Portfolio: (https://tusharkumarroy.gamer.gd/)
- GitHub: (https://github.com/tusharkumarroy/)
- LinkedIn: (https://www.linkedin.com/in/tushar-kumar-roy-b53b541b7/)

## 🙏 Acknowledgments

- Inspired by [Goodreads.com](https://www.goodreads.com)
- Developed as part of CSE 3100: Web Programming Laboratory
- Built with [Laravel](https://laravel.com)
- Styled with [Tailwind CSS](https://tailwindcss.com)

## 📧 Contact

For questions or feedback, please open an issue or contact (tusharkumarroy.dev@gmail.com)

---

⭐ If you found this project helpful, please consider giving it a star!
