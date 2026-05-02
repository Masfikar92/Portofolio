# Dokumentasi Teknis dan Rinci Portofolio (Anime 86 Theme)

Dokumen ini memberikan penjelasan teknis yang sangat rinci (baris-per-baris / blok-per-blok) untuk seluruh komponen kode di dalam proyek website portofolio ini.

---

## 1. Penjelasan Detail `portofolio.php` (Struktur HTML)

File ini berisi kerangka dasar (*markup*) dari website.

### A. Bagian Header & Metadata (`<head>`)
- `<!DOCTYPE html>`: Deklarasi bahwa dokumen ini menggunakan HTML5.
- `<meta charset="UTF-8">`: Mengatur pengkodean karakter agar mendukung semua simbol dan teks (termasuk emoji).
- `<meta name="viewport" content="width=device-width, initial-scale=1.0">`: Sangat penting untuk *responsive design*; memastikan ukuran website menyesuaikan layar perangkat (HP/Tablet/PC).
- `<link rel="stylesheet" href="portofolio.css">`: Menghubungkan file HTML ini dengan desain visual yang ada di `portofolio.css`.

### B. Navbar / Navigasi Utama (`<nav id="navbar">`)
- `<a href="#home" class="nav-logo">`: Logo teks portofolio. Atribut `href="#home"` berfungsi sebagai tautan *anchor* agar ketika diklik, halaman akan menggulir kembali ke atas (bagian id="home").
- `<ul class="nav-links">`: Daftar (*list*) menu navigasi (Home, About, Skills, dll).
- `<div class="hamburger">`: Tombol menu khusus untuk tampilan *mobile* (layar kecil). Di dalamnya terdapat tiga `<span>` yang nantinya oleh CSS dibentuk menjadi tiga garis horizontal (garis hamburger).

### C. Hero Section (`<section id="home">`)
- `<div class="hero-bg">`: Berisi elemen `<video autoplay muted loop playsinline>`. Atribut `autoplay` membuat video otomatis diputar, `muted` membisukan suara (diwajibkan oleh browser agar *autoplay* bekerja), dan `loop` mengulang video terus-menerus.
- `<h1 class="hero-name">`: Judul utama yang memuat nama Anda. Terdapat tag `<span>` dengan class `highlight` di nama belakang untuk diberikan efek warna spesifik dan animasi *glitch* di CSS.
- `<p class="hero-role"><span class="typed-text"></span></p>`: Paragraf untuk peran/profesi. Di sinilah animasi Javascript (*typing effect*) bekerja dan menyuntikkan teks secara berulang.
- `<div class="hero-scroll-indicator">`: Elemen visual di bagian bawah layar hero yang memberikan petunjuk (*clue*) kepada pengunjung untuk menggulir ke bawah.

### D. Konten Halaman (About, Skills, Projects, Hobbies, Contact)
- **`<section>`**: Setiap bagian konten dibungkus dengan tag `<section>` dan diberi atribut `id` yang unik (contoh: `id="about"`). Atribut `id` ini saling terhubung dengan navigasi Navbar.
- **`class="container"`**: Elemen pembungkus internal untuk membatasi lebar konten agar tidak terlalu melebar hingga ke ujung layar.
- **`class="reveal"`**: Anda akan melihat banyak elemen seperti `<h2 class="section-title reveal">` atau `<div class="skill-card reveal">`. Kelas `reveal` ini adalah penanda (marker) yang nantinya ditangkap oleh *JavaScript* untuk diberikan efek animasi *fade-in* saat elemen tersebut mulai terlihat di layar.
- **Elemen SVG (`<svg>`)**: Digunakan secara ekstensif pada bagian *Skills*, *Projects*, *Hobbies*, dan *Contact* untuk menampilkan ikon (logo). SVG dipilih karena tidak pecah saat diperbesar dan ukurannya sangat ringan dibandingkan format gambar tradisional (JPG/PNG).

### E. Footer & Script Import
- `<script src="script.js"></script>`: Diletakkan tepat di atas `</body>`. Menghubungkan logika JavaScript ke HTML. Penempatannya di paling bawah bertujuan agar seluruh elemen HTML dimuat (di-*render*) terlebih dahulu oleh browser sebelum JavaScript dijalankan (menghindari error referensi).

---

## 2. Penjelasan Detail `portofolio.css` (Gaya / Visual)

File stylesheet dengan hampir 1700 baris ini bertanggung jawab penuh atas nuansa *cyberpunk / mecha*.

### A. Konfigurasi Dasar & Variabel Global (`:root`)
- Bagian `:root { ... }` mendefinisikan puluhan variabel (seperti `--bg-primary: #050508;`, `--color-blood: #dc2626;`). Ini memudahkan pergantian tema. Jika Anda ingin mengubah warna merah darah menjadi warna lain (misal hijau neon), Anda cukup mengubah variabel `--color-blood` di satu tempat ini, dan seluruh website akan otomatis mengikuti.

### B. Reset & CRT Effect
- `* { margin: 0; padding: 0; box-sizing: border-box; }`: Mengkalibrasi ulang jarak dasar (*reset*) agar tampilan identik di semua jenis browser (Chrome, Firefox, Safari).
- `body::before` (CRT Effect): Membuat garis-*garis* horizontal transparan menggunakan `repeating-linear-gradient` dengan rentang jarak `2px`. Menutupi seluruh viewport (layar) dengan `pointer-events: none` agar tidak menghalangi kursor saat mengklik tombol di bawahnya.
- `body::after` (Vignette): Membuat gradasi radial hitam transparan di sudut-sudut layar agar fokus pengguna tertuju ke tengah layar.

### C. Animasi Spesifik (Keyframes)
- `@keyframes spin`: Digunakan pada target reticle bulat di bagian *Hero Section*. Nilainya dirotasi dari `0deg` ke `360deg` secara konstan (*linear infinite*).
- `@keyframes glitch-anim-1 & 2`: Kode kompleks yang menggunakan properti `clip-path: inset(...)`. Ini memotong sebagian kecil dari tulisan "ZULFIKAR" secara acak dan menggesernya (`transform: translate`) sepersekian milidetik, menciptakan ilusi layar rusak (*glitch*). Efek ini memanfaatkan elemen semu `::before` (berwarna cyan) dan `::after` (berwarna merah) yang ditumpuk di atas tulisan aslinya.
- `@keyframes blink`: Mengatur `border-color` berkedip dari berwarna menjadi transparan untuk memberikan ilusi kursor *text-editor* yang sedang berkedip di tulisan "Data Science".

### D. Teknik Layout dan Desain
- **CSS Grid (`display: grid;`)**: Sangat dominan digunakan di `.skills-grid`, `.portfolio-grid`, dll. Sangat kuat untuk membagi konten secara rapi (misal: `grid-template-columns: repeat(3, 1fr)` membagi grid menjadi 3 kolom yang lebarnya presisi sama besar).
- **Glassmorphism / Blurring**: Menggunakan properti `backdrop-filter: blur(10px)` pada latar elemen (*Navbar* yang di-scroll dan kartu *Skills*) agar latar belakang (baik warna maupun partikel) tampak buram tembus pandang menyerupai kaca es.
- **Bentuk Geometris Khusus (Clip-Path)**: Tombol (`.btn-primary`), dan beberapa kartu menggunakan `clip-path: polygon(...)`. Daripada menggunakan border-radius yang membuat kotak menjadi bulat, metode polygon memotong sudut kotak menjadi miring, menghasilkan bentuk pelat baja/pesawat fiksi ilmiah.

### E. Media Queries (Responsivitas)
- `@media (max-width: 1024px) { ... }`: Jika lebar layar di bawah 1024px (Tablet). Grid kolom dikurangi menjadi 2 baris agar konten tidak terlalu sempit.
- `@media (max-width: 768px) { ... }`: Jika layar selebar HP. Grid dikompres menjadi 1 kolom (`1fr`). *Navbar* disembunyikan menggunakan posisi absolut/fixed ke sebelah kanan (`right: -100%`) dan hanya akan muncul jika kelas `.open` ditambahkan lewat JavaScript.

---

## 3. Penjelasan Detail `script.js` (Logika & Interaktivitas)

### A. Pengaturan Event Utama
- `document.addEventListener('DOMContentLoaded', () => { ... })`: Kode yang menjamin bahwa semua JavaScript di dalamnya HANYA dijalankan setelah struktur dasar HTML (DOM) selesai dimuat sepenuhnya.

### B. Efek Scroll Navbar (`handleScroll`)
- `window.scrollY`: Membaca posisi pengguna (berapa *pixel* sudah menggulir ke bawah).
- Jika `scrollY > 60`, tambahkan kelas `scrolled` ke *navbar* (membuatnya memiliki latar gelap/blur dari CSS). Jika tidak, lepas kelas tersebut (membuat *navbar* transparan kembali di bagian teratas layar).
- Algoritma pelacak posisi: Membaca letak/tinggi (`offsetTop` dan `offsetHeight`) setiap `<section>`. Jika posisi layar saat ini (`scrollY`) berada di dalam batas section tertentu, maka menu yang bersesuaian dengan id tersebut (seperti menu "About") akan ditambahkan kelas `.active` agar menyala.

### C. Hamburger Menu Layar Mobile
- Menggunakan `addEventListener('click', ...)` pada ikon `.hamburger`. Saat diklik, *script* akan mengaktifkan peralihan kondisi (menggunakan `.classList.toggle`). Ini akan membuka panel navigasi (`.nav-links.open`) dan merubah bentuk tiga garis hamburger menjadi bentuk 'X' (`.hamburger.active`).

### D. Animasi Mengetik (`typeEffect`)
- Menggunakan pendekatan *Array* dan rekursi fungsi `setTimeout`.
- Program mengekstrak kata dari array `roles` (contoh: "Data Analyst"). Menggunakan fungsi pemotong teks bawaan JS `substring()` untuk menampilkan huruf dari depan secara sekuensial (huruf ke-1, lalu ke-2, ke-3, dst).
- Terdapat flag `isDeleting`. Jika kata sudah tertulis lengkap, variabel `typeSpeed` dibuat lambat agar teks diam sejenak, lalu `isDeleting` menjadi benar (*true*). Program kemudian membalik proses dengan mengurangi indeks huruf satu demi satu, hingga habis. Lalu beralih ke kata berikutnya di dalam Array `roles`.

### E. Pemantau Munculnya Elemen (Scroll Reveal)
- Menggunakan API peramban (*browser*) canggih bernama `IntersectionObserver`. API ini jauh lebih efisien performanya dibanding membaca jarak gulir (`window.scrollY`) terus-menerus.
- Observer mengawasi setiap kotak yang memiliki kelas `.reveal`. `threshold: 0.1` berarti "jika elemen tersebut minimal sudah masuk ke layar sebesar 10%". Jika ya (`isIntersecting == true`), maka kelas `active` disuntikkan ke elemen tersebut, yang memicu transisi `opacity: 1` di dalam file CSS (memunculkan elemen tersebut dari ghaib/transparan).

### F. Filter Kategori Proyek
- Menangkap setiap klik pada tombol berkelas `.filter-btn`.
- Membaca data kategori yang melekat pada atribut HTML tombol (contoh: `data-filter="Machine Learning"`).
- Melakukan iterasi (pengulangan) pada seluruh `.project-card`. Jika nilai atribut data kategori dari kartu sama dengan tombol yang diklik, hapus kelas `.hidden` (kartu ditampilkan). Jika berbeda, tambahkan kelas `.hidden` agar CSS menyembunyikan kartu tersebut (`display: none;`).

### G. Generator Partikel Latar (Particles)
- Melakukan proses perulangan (`for` *loop*) sebanyak 30 kali.
- Setiap putaran menciptakan sebuah elemen HTML baru (`document.createElement('div')`) secara *virtual*.
- Elemen virtual tersebut diberi nama kelas `.particle`.
- Menggunakan fungsi angka acak `Math.random()` untuk memberikan posisi titik koordinat X dan Y secara acak di layar, serta durasi kecepatan melayang secara acak, agar terlihat natural seperti debu atau percikan api kecil.
- Setelah *properties* terbentuk, barulah diinjeksikan secara massal ke dalam `div.particles` di file HTML utama (`appendChild`).
# Portofolio
# Portofolio
