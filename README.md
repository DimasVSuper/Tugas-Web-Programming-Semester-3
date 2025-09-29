# 🎯 Tugas Web Programming Semester 3

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

**Kumpulan tugas praktikum Web Programming menggunakan Laravel Framework**

</div>

---

## 📋 Deskripsi

Repository ini berisi kumpulan tugas praktikum Web Programming Semester 3 yang dikembangkan menggunakan **Laravel Framework**. Proyek ini mendemonstrasikan implementasi berbagai konsep web development seperti routing, views, controllers, dan blade templating.

## 🚀 Fitur


### 🛠️ Teknologi yang Digunakan
- **Backend**: Laravel 11.x
- **Frontend**: Blade Templates, HTML5, CSS3, JavaScript
- **Database**: MySQL (via XAMPP)
- **Server**: Apache (XAMPP)
- **Package Manager**: Composer & NPM

## 📁 Struktur Proyek

```
tugaspertemuan2/
├── app/
│   ├── Http/Controllers/     # Controllers untuk handle request
│   ├── Models/              # Model untuk database
│   └── Providers/           # Service providers
├── resources/
│   ├── views/              # Blade templates
│   │   ├── beranda.blade.php
│   │   ├── biodata.blade.php
│   │   ├── halo.blade.php
│   │   └── profile.blade.php
│   ├── css/                # Stylesheet files
│   └── js/                 # JavaScript files
├── routes/
│   └── web.php             # Web routes definition
├── public/
│   └── images/             # Static assets
└── config/                 # Configuration files
```

## 🔗 Route Mapping

| Route | Controller | Method | Deskripsi |
|-------|-----------|---------|-----------|
| `/` | HalloController | halo | Homepage redirect |
| `/beranda` | HalloController | beranda | Halaman beranda |
| `/biodata` | HalloController | biodata | Halaman biodata |
| `/halo` | HalloController | halo | Halaman sambutan |
| `/profile` | HalloController | profile | Halaman profil |

## 🛠️ Instalasi

### Prasyarat
- **XAMPP** (Apache + MySQL + PHP 8.2+)
- **Composer** (Dependency manager untuk PHP)
- **Node.js & NPM** (untuk asset compilation)

### Langkah Instalasi

1. **Clone repository**
   ```bash
   git clone <repository-url>
   cd sekumpulantugaspakandri/tugaspertemuan2
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi database** (edit `.env`)
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=(Sesuaikan)
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Jalankan migrasi database**
   ```bash
   php artisan migrate
   ```

6. **Compile assets**
   ```bash
   npm run dev
   ```

7. **Jalankan server**
   ```bash
   php artisan serve
   ```

8. **Akses aplikasi** di `http://localhost:8000`

## 🌐 Demo

Setelah instalasi berhasil, Anda dapat mengakses halaman-halaman berikut:

- 🏠 **Beranda**: `http://localhost:8000/beranda`
- 👋 **Halo**: `http://localhost:8000/halo` 
- 👤 **Profile**: `http://localhost:8000/profile`
- 📋 **Biodata**: `http://localhost:8000/biodata`

## 📚 Pembelajaran

Tugas Pertemuan 2  mencakup konsep-konsep berikut:

### 🎯 Laravel Fundamentals
- ✅ **Routing** - Definisi dan pengelolaan routes
- ✅ **Controllers** - Logic handling dan response
- ✅ **Views** - Blade templating engine
- ✅ **Service Providers** - Dependency injection

### 🎨 Frontend Development
- ✅ **Blade Components** - Reusable UI components
- ✅ **Asset Management** - CSS & JavaScript optimization


## 📄 Lisensi

Proyek ini menggunakan lisensi [MIT License](https://opensource.org/licenses/MIT).


---

<div align="center">


⭐ **Jangan lupa berikan star jika repository ini bermanfaat!** ⭐

</div>