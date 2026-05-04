# Dokumentasi Teknis dan Rinci Portofolio (Anime 86 Theme)

Dokumen ini memberikan penjelasan teknis yang sangat rinci (baris-per-baris / blok-per-blok) untuk seluruh komponen kode di dalam proyek website portofolio ini.

---

## 1. Penjelasan Detail `portofolio.php` (Struktur HTML)

File ini berisi kerangka dasar (*markup*) dari website. Halaman ini menggunakan arsitektur Single Page Application (SPA) semu, dimana navigasi hanya melakukan *scrolling* antar bagian halaman.

### A. Bagian Header & Metadata (`<head>`)
- `<!DOCTYPE html>`: Deklarasi bahwa dokumen ini menggunakan standar HTML5 terbaru.
- `<meta charset="UTF-8">`: Mengatur pengkodean karakter (UTF-8) agar browser mengenali huruf, simbol, dan emoji dengan benar.
- `<meta name="viewport" content="width=device-width, initial-scale=1.0">`: Mengontrol zoom dan lebar halaman agar *responsive* saat dibuka di layar HP maupun layar desktop.
- `<title>Portofolio</title>`: Judul tab web browser.
- `<link rel="stylesheet" href="portofolio.css">`: Memanggil file CSS (`portofolio.css`) yang memuat seluruh *styling* dan desain visual.

### B. Navbar / Navigasi Utama (`<nav id="navbar">`)
- **Struktur**: Navigasi di-*pin* ke bagian atas dengan efek perubahan warna/transparansi saat pengunjung melakukan scroll.
- **Logo**: `<a href="#home" class="nav-logo">PORTO<span>FOLIO</span></a>`. Tag `<span>` membungkus tulisan "FOLIO" agar memiliki gaya tersendiri (berwarna merah/blood).
- **Tautan Menu (`<ul class="nav-links">`)**: Berisi tautan `<a>` ke berbagai ID pada halaman (seperti `#home`, `#about`, `#skills`, dll).
- **Tombol Hamburger (`<div class="hamburger">`)**: Menu khusus untuk tampilan seluler (HP). Terdiri dari 3 `<span>` yang membentuk ikon baris tiga yang bisa dianimasikan menjadi bentuk 'X' melalui JavaScript.

### C. Hero Section (`<section id="home">`)
- **Video Background (`<div class="hero-bg">`)**: Menggunakan `<video>` dengan atribut `autoplay` (jalan otomatis), `muted` (tanpa suara - wajib agar bisa otomatis diputar di browser), dan `loop` (diulang terus-menerus).
- **Hero Content (`<div class="hero-content">`)**:
  - `<div class="hero-tag">PERSONAL PORTOFOLIO</div>`: Label pengantar kecil dengan gaya *military text*.
  - `<h1 class="hero-name">`: Judul utama yang menggunakan animasi *glitch* pada tag `<span>` dengan kelas `highlight`.
  - `<p class="hero-role">`: Menggunakan `<span class="typed-text">` yang nantinya diinjeksikan teks yang diketik secara berulang (efek mengetik) menggunakan program JavaScript.
- **Indikator Scroll (`<div class="hero-scroll-indicator">`)**: Elemen desain garis panah animasi jatuh yang menunjukkan bahwa ada konten di bawah jika pengunjung menggulir layar.

### D. About Section (`<section id="about">`)
- **Grid Layout**: Menggunakan dua kolom (kiri: foto, kanan: teks) pada desktop menggunakan CSS Grid (`.about-grid`).
- **Foto Profil (`<div class="about-image-wrapper">`)**: Gambar profil ditambah dengan `<div class="scan-line">` untuk menampilkan efek animasi garis *scan* layaknya pemindai antarmuka *sci-fi*.
- **Informasi Personal (`<div class="about-info-grid">`)**: Menampilkan blok-blok kartu informasi kecil dan elegan (berbentuk asimetris/poligon) seperti Nama, Universitas, Jurusan, dan Minat.

### E. Skills Section (`<section id="skills">`)
- Menampilkan *grid* kemampuan pengguna (Data Science, Data Analyst, Machine Learning, UI/UX Design).
- Setiap *skill* berada di dalam kotak `<div class="skill-card">` yang memiliki `<svg>` khusus untuk mewakili logo/ikon spesifik keahlian tersebut. Format SVG memastikan logo bersih tanpa pecah. Ikon bereaksi dan berputar secara 3D ketika dikenai kursor (*hover*).

### F. Projects Section (`<section id="projects">`)
- Memuat riwayat portofolio proyek dalam bentuk pembagian kartu `<div class="portfolio-grid">`.
- Terdapat 9 proyek spesifik yang ditambahkan, contohnya "Prediksi Harga Mobil", "Fraud Detection", "Segmentasi Pelanggan", hingga "UMKM Management System".
- Masing-masing kotak memiliki badge kategori dan tautan panah menyilang yang dihubungkan langsung ke repositori *GitHub* menggunakan atribut `target="_blank"` agar aman terbuka di tab peramban baru.

### G. Certificate Section (`<section id="certificate">`)
- Menggunakan grid layout bernama `.certificate-grid` untuk menyusun sertifikat secara sejajar.
- Daftar 5 sertifikat diambil langsung dari aset direktori:
  1. Dasar_data_science.png
  2. image.png
  3. Fundamental_analisis_data.png
  4. Dasar_visualisasi.png
  5. python.png
- Gambar diatur menggunakan pengaturan responsif yang presisi: `width: 100%`, `aspect-ratio: 4/3`, dan dikendalikan properti `object-fit: contain` untuk menghindarkan bagian sertifikat dari efek terpotong (cropping), serta ditambah bingkai bayangan transparan untuk membuat sertifikat muncul kokoh di dalam box *(card)*.

### H. Hobbies Section (`<section id="hobi">`)
- Menggunakan 3 buah *card* untuk menjabarkan hobi spesifik (Lari, Bermain Game, Menonton).
- Bagian latar atas kartu (`.hobby-visual`) menggunakan ilustrasi pola grid halus (*grid pattern*) dengan varian warna bergradasi berbeda (berbasis dari warna merah, cyan, dan ungu) lalu menumpangkan gambar grafis vektor SVG di hadapannya.

### I. Contact Section (`<section id="contact">`)
- **Info Kontak**: Menyajikan representasi visual alamat surel (Email) dan nomor seluler (WhatsApp).
- **Tombol WhatsApp (`<a class="wa-button">`)**: Tombol yang memuat mekanisme pengalihan cepat (Chat Now) ke dalam API resmi `https://wa.me/62...`. Desainnya diberikan sentuhan hijau cerah ala WA yang mencuat dramatis ketika *hovered* agar menggugah pengunjung untuk menekan tombol kolaborasi.

### J. Elemen Khusus & Penutup
- `<div class="particles"></div>`: Tampil sebagai *container* kosong yang nantinya bertindak bagaikan akuarium luas untuk diisi oleh puluhan elemen partikel debu melayang yang direplikasi mandiri (dibuat secara manipulatif) dari Javascript.
- `<script src="script.js"></script>`: Dipanggil di akhir baris persis di atas tag tubuh penutup (`</body>`). Aturan krusial ini agar *script* memproses semua logikanya HANYA setelah elemen antarmuka DOM selesai didirikan oleh *browser*.

---

## 2. Penjelasan Detail `portofolio.css` (Gaya dan Tampilan)

File `portofolio.css` (mencapai sekitar nyaris 1600 baris kode) bertanggung jawab melukis dan membentuk rangka menjadi karya utuh. Konsep desain yang diusung adalah *Anime 86, Mecha Aesthetic, Dark Military*.

### A. CSS Variabel & Root (`:root`)
- **Pewarnaan Variabel (`--bg-...`, `--color-...`)**: Semua rujukan palet warna diikat di dalam variabel. Contoh utama adalah warna aksen merah utama dinamakan `--color-blood: #dc2626;`. Pendekatan cerdas ini berguna andai di kemudian hari desainer bosan dan ingin beralih tema (katakanlah mode Neon Ungu), cukup mengubah satu baris variabel di atas, maka imbas warna akan menjalar sendiri ke seluruh sistem.
- **Tipografi (`--font-...`)**: Mengawinkan 3 *font family* utama: `Rajdhani` (untuk tajuk-tajuk kaku/berat), `Orbitron` (untuk label, indikator mekanis), dan `Inter` (sebagai bantalan tulisan paragraf reguler).

### B. Global Reset & CRT Display Overlay
- Semua batas tepian dikalibrasi titik nol: `margin: 0`, `padding: 0`, `box-sizing: border-box`.
- **Efek Pendar CRT (`body::before`)**: Sebuah latar tembus pandang yang disematkan persisten pada posisi absolut/fixed. Menerapkan pengulangan gradien linear (`repeating-linear-gradient`) untuk menduplikasi tekstur garis (*scanline*) ala monitor tabung tua mesin perang atau komputer zaman dulu. Diberikan properti `pointer-events: none` agar keutuhan mouse (klik) yang tembus ke laman tidak dicegat oleh filter CRT ini.
- **Efek Kamera Vignette (`body::after`)**: Sebuah gradasi radial dari bening bertransformasi hitam saat menyentuh sudut ekstrem monitor. Hal itu memberi dimensi seolah kita menonton *interface* dari sebuah lensa optik yang gelap tepinya.

### C. Efek Glitch Asimetris & Animasi (Keyframes)
- **`@keyframes glitch-anim-1` & `glitch-anim-2`**: Digunakan untuk menyimulasikan teks "ZULFIKAR" yang rusak akibat *noise* teknis. Kloningan ilusi dari pseudo `::before` & `::after` dipotong acak dengan persentase sembarang (menggunakan teknik `clip-path: inset()`) dan disenggol secara sporadis (`translate`) dalam rentang 1 hingga 2 detik secara bergantian warna biru dan merah.
- **`@keyframes scan`**: Menciptakan sebilah pemindai optikal buatan (terkait bagian muka About). Garis merah murni dianimasikan terus berlari dari `top: 20px` anjlok hingga pangkal bawah dihitung berdasar waktu secara `linear infinite`.
- **`@keyframes bounce` & `scrollDown`**: Memberi gerakan naik-turun memantul perlahan untuk membujuk atensi mata menggulir layar turun.

### D. Manipulasi Bentuk (Clip-Path) dan Kaca (Glassmorphism)
- Banyak komponen seperti kotak skil (`.skill-card`), tombol primer (`.btn-primary`), dan panel info mengabaikan perulangan standar membulat `border-radius`. Mereka memakai metode memotong titik sudut asimetris menggunakan `clip-path: polygon(...)`. Pemotongan (chamfered edges) ala lempengan zirah mekanikal merupakan teknik definitif nuansa *cyberpunk / 86 mecha*.
- Menu *Navbar* di atas diberikan perintah `backdrop-filter: blur(25px);` saat ter-scroll, melebur warna buram dan bias memudar di area belakangan menu tersebut seolah menggunakan lembaran kaca.

---

## 3. Penjelasan Detail `script.js` (Logika & Interaksi)

Script yang sangat ringkas nan kuat menggerakkan ekosistem animasi laman web.

### A. Pengamanan Inisiasi DOM
- `document.addEventListener('DOMContentLoaded', () => { ... })`: Sebuah pendeteksi mutlak yang menggaransi seluruh fungsi interaktif HANYA akan dipicu seketika tulang dan daging HTML serta CSS rampung ditafsirkan seutuhnya.

### B. Otomasi Event Scroll
- Memiliki rutinitas rutin (sebuah pengamat dinamis) yang dinamakan `handleScroll()`.
- Mengintip hitungan ketinggian gulir peramban (`window.scrollY`). Melewati takaran 60px ke bawah berakibat melahirkan kelas tambahan `scrolled` di tag navigasi (memberi beban kegelapan latar dan bingkai di *navbar*).
- Pada saat bersamaan, `handleScroll()` mengalkulasi kedudukan elevasi (`offsetTop`) dan dimensi setiap `section`. Ketika rentang gulir peramban manusia menyasar area wilayah presisi dari salah satu `section`, `navLinks` alias tautan di atasnya langsung diterangi sebagai "active", menunjukkkan kepada kita posisi kompas kita.

### C. Navigasi Taktis (Hamburger Menu Mobile)
- Bilamana ukuran resolusi dipersempit (lebar HP), ikon garis tiga `.hamburger` muncul.
- Mendengarkan insiden *click*, dan menjawabnya dengan metode _toggle_ (`classList.toggle('active')`), dimana garis burger itu berotasi drastis merangkai bilah silang 'X' sembari kelas pembungkus navigasi membuka dan menutup.

### D. Sintesis Animasi Mesin Tik (Typing Effect)
- Hadir mendefinisikan label profesi. Dikelola mesin waktu perulangan canggih bernama `setTimeout()`.
- Menyiapkan himpunan kalimat di `array roles`.
- Mekanismenya mengeja karakter satu persatu lewat sintaksis `substring()`. Memanjang maju dengan tempo santai (`100ms`). 
- Sesampainya purna dirajut satu kata, proses dipause paksa (ditidurkan 2000 milidetik), sebelum secara tergesa-gesa mengubah wujud modenya ke mundur/penghapusan (`isDeleting = true`) bertempo ekstra cepat (50 milidetik) hingga lenyap dan memuat peran selanjutnya.

### E. Penyingkap Konten Sensor-Silang (Intersection Observer)
- Menghindari model animasi pemuatan zaman kuno yang rawan lag, web menugaskan API sensor presisi `IntersectionObserver`.
- Mesin pintar ini diperintahkan untuk "Mengintai" seluruh wadah `<div class="reveal">`.
- Setelan pelatuknya adalah `threshold: 0.1` (artinya saat sebuah elemen tertangkap kemunculannya 10% masuk layar), pengintai itu menembakkan suntikan stempel `active` terhadap sasaran. Reaksinya dipancarkan CSS untuk mengorbitkannya memudar-terlihat dari arah bawah.

### F. Sistem Partikular Holografis
- Skrip menciptakan perulangan sederhana `for (let i = 0; i < 30; i++)`. Proses *looping* ini mengeksekusi instruksi membuat partikel baru.
- Menciptakan node div `<div class="particle">` sebanyak 30 keping dan menjatuhkannya ke elemen utama yang bernama `.particles` pada body. 
- Tiap entitas dari puluhan unit partikel itu menerima sumbangan nomor koordinat sebaran X dan sebaran Y dengan nilai persentase campur aduk menggunakan keacakan `Math.random()`, dan juga kecepatan animasi yang beda-beda. Ini membentuk fenomena debu dan bunga api kosmik melayang natural tanpa sinkronisasi yang terlihat kaku.

### G. Transisi Pergerakan Menukik (Smooth Anchor)
- Baris kode paling pamungkas membidik semua tautan perantara berawalan tagar (seperti `href="#skills"`). Menjinakkan sifat natural kasar dari navigasi jangkar konvensional (`e.preventDefault()`). Menginterupsi lompatan mendadaknya dan menggeser layar turun/naik mulus memakai `target.scrollIntoView({ behavior: 'smooth' })`.
