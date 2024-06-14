
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# pgweb-responsi

# Explore Denpasar Tourism

## Deskripsi Produk

Denpasar Tourism adalah laman yang menampilkan informasi seputar tempat wisata di Kota Denpasar Bali. Website ini memberikan informasi detail tentang lokasi-lokasi tersebut, termasuk deskripsi lokasi wisata. Denpasar Tourism ini dibuat untuk memenuhi tugas responsi Praktikum Pemrograman Web Lanjut.

## Komponen Pembangun Produk

- **_HTML_:** Digunakan untuk struktur dasar halaman web.
- **_CSS_:** Menangani tata letak dan desain halaman.
- **_Bootstrap_:** Framework CSS untuk mempercepat pengembangan antarmuka pengguna yang responsif.
- **_Leaflet.js_:** Library JavaScript untuk menangani peta interaktif.
- **_Geoserver_:** Sebagai server GIS untuk menyediakan dan mengelola data geospasial.
- **_QGIS_:** Sebagai software untuk mengolah data spasial dan diintegrasikan ke peta laravel.
- **_Laravel_:** Sebagai framework PHP yang kuat dan fleksibel, menyediakan banyak fitur dan kemudahan untuk membangun aplikasi web, termasuk aplikasi Geographic Information System (GIS).
- **_DBeaver_:** Sebagai Database Penyimpanan Data Spasial.
  
## Sumber Data

- Data informasi wisata (https://www.pariwisata.denpasarkota.go.id/).
- Data geospasial diakses melalui [InaGeoportal](https://www.inageoportal.id/), menyediakan informasi geospasial Indonesia.
- Data titik lokasi diperoleh dari google maps (https://www.google.com/maps), untuk informasi longitude dan latitude.

## Tangkapan Layar Komponen Penting Produk

1. **Antarmuka Utama:**
   ![Landing Page](website/screenshoot/landingpage.png)
   ![image](https://github.com/anggitamrni/pgwl-responsi/assets/142865997/a7e1a6d7-6ba6-49a6-b654-f47749025692)
   ![image](https://github.com/anggitamrni/pgwl-responsi/assets/142865997/aa943391-d2ab-4232-88c2-1fbf5c2e3ecc)
   
3. **Halaman Lokasi Wisata:**
   ![image](https://github.com/anggitamrni/pgwl-responsi/assets/142865997/be63de32-a249-4248-af15-9e4f460845a2)

4. **Halaman Login:**
   ![image](https://github.com/anggitamrni/pgwl-responsi/assets/142865997/54e851f7-3f38-4fac-a54e-56eda0e56e2f)

5. **Halaman Table Point:**
   ![image](https://github.com/anggitamrni/pgwl-responsi/assets/142865997/4b14e3d7-287e-4382-983b-5c72e0af93d5)

6. **Halaman Edit Point:**
   ![image](https://github.com/anggitamrni/pgwl-responsi/assets/142865997/0d42d160-7f1f-42fc-994c-6649695c3ece)

7. **Halaman Dashboard:**
   ![image](https://github.com/anggitamrni/pgwl-responsi/assets/142865997/1c867faf-6459-4ced-a691-1411cea354cb)
   
9. **Halaman Info:**
   ![image](https://github.com/anggitamrni/pgwl-responsi/assets/142865997/092ce080-ec2f-4556-8ad7-ad2a83ca09bb)

   


