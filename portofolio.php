<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="portofolio.css">
</head>
<body>

    <!-- Particles Background -->
    <div class="particles"></div>

    <!-- ========== NAVBAR ========== -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <a href="#home" class="nav-logo">PORTO<span>FOLIO</span></a>
            <ul class="nav-links">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#certificate">Certificate</a></li>
                <li><a href="#hobi">Hobi</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- ========== HERO SECTION ========== -->
    <section class="hero" id="home">
        <div class="hero-bg">
            <video autoplay muted loop playsinline>
                <!-- Sesuaikan dengan lokasi video jika ada, atau tambahkan '../Portofolio/hero-video.webm' -->
                <source src="../Portofolio/hero-video.webm" type="video/webm">
            </video>
        </div>
        <div class="container hero-content">
            <div class="hero-tag">PERSONAL PORTOFOLIO</div>
            <h1 class="hero-name">MUHAMMAD<br><span class="highlight">ZULFIKAR</span></h1>
            <p class="hero-role"><span class="typed-text">Data Science & AI Enthusiast</span></p>
            <div class="hero-cta">
                <a href="#projects" class="btn-primary">My Projects</a>
                <a href="#contact" class="btn-outline">Contact Me</a>
            </div>
        </div>
        <div class="hero-scroll-indicator">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>
    </section>

    <!-- ========== ABOUT SECTION ========== -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-image-wrapper reveal">
                    <!-- Sesuaikan src gambar ke folder jika diperlukan -->
                    <div class="scan-line"></div>
                    <img src="../Portofolio/OIP_hd.png" alt="Muhammad Zulfikar" class="about-image">
                </div>
                <div class="about-text reveal">
                    <span class="section-tag">Personal File</span>
                    <h2 class="section-title">About Me</h2>
                    <p>
                        Hi guys, Nama Saya <strong class="text-blood">Muhammad Zulfikar</strong>, 
                        Saya dari Universitas Sains Al-Quran Program Studi <strong class="text-silver">Teknik Informatika</strong>.
                        Saya memiliki minat di bidang data science dan Artificial Intelligence.
                    </p>
                    <div class="about-info-grid">
                        <div class="info-item">
                            <div class="label">Nama</div>
                            <div class="value">M. Zulfikar</div>
                        </div>
                        <div class="info-item">
                            <div class="label">Universitas</div>
                            <div class="value">UNSIQ</div>
                        </div>
                        <div class="info-item">
                            <div class="label">Jurusan</div>
                            <div class="value">Teknik Informatika</div>
                        </div>
                        <div class="info-item">
                            <div class="label">Minat</div>
                            <div class="value">AI & Data</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== SKILLS SECTION ========== -->
    <section class="skills" id="skills">
        <div class="container">
            <span class="section-tag reveal">Competencies</span>
            <h2 class="section-title reveal">Skills</h2>
            <p class="section-desc reveal">Kemampuan dan keahlian yang saya miliki.</p>

            <div class="skills-grid">
                <!-- Skill 1 -->
                <div class="skill-card reveal">
                    <div class="skill-icon">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a4 4 0 0 0-4 4c0 2 1.5 3.5 4 5.5 2.5-2 4-3.5 4-5.5a4 4 0 0 0-4-4z" />
                            <circle cx="12" cy="14" r="3" />
                        </svg>
                    </div>
                    <h3>Data Science</h3>
                    <p>Menganalisis data kompleks dan membangun model prediksi.</p>
                </div>
                
                <!-- Skill 2 -->
                <div class="skill-card reveal">
                    <div class="skill-icon">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="12" width="4" height="9" rx="0.5" />
                            <rect x="10" y="7" width="4" height="14" rx="0.5" />
                            <rect x="17" y="3" width="4" height="18" rx="0.5" />
                        </svg>
                    </div>
                    <h3>Data Analyst</h3>
                    <p>Visualisasi data dan pengolahan data analitik untuk mendapatkan insight bisnis.</p>
                </div>

                <!-- Skill 3 -->
                <div class="skill-card reveal">
                    <div class="skill-icon">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" stroke-dasharray="4 2" />
                            <path d="M4 10l2.5 2M20 10l-2.5 2" />
                        </svg>
                    </div>
                    <h3>Machine Learning</h3>
                    <p>Pengembangan subset AI dari supervised sampai unsupervised learning.</p>
                </div>

                <!-- Skill 4 -->
                <div class="skill-card reveal">
                    <div class="skill-icon">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7" rx="1" />
                            <rect x="14" y="3" width="7" height="7" rx="1" />
                            <rect x="3" y="14" width="7" height="7" rx="1" />
                        </svg>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>Merancang antarmuka aplikasi/website.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== PROJECTS SECTION ========== -->
    <section class="portfolio" id="projects">
        <div class="container">
            <span class="section-tag reveal">Operations Log</span>
            <h2 class="section-title reveal">Projects</h2>
            <p class="section-desc reveal">Berikut adalah beberapa project relevan yang telah saya kerjakan:</p>

            <div class="portfolio-grid">
                <!-- Project 1 -->
                <div class="project-card reveal">
                    <div class="project-header">
                        <span class="project-category">Machine Learning</span>
                        <a href="https://github.com/Masfikar92/Prediksi-Harga-Mobil" target="_blank" class="project-link">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                <polyline points="15 3 21 3 21 9" />
                                <line x1="10" y1="14" x2="21" y2="3" />
                            </svg>
                        </a>
                    </div>
                    <div class="project-body">
                        <h3>Prediksi Harga Mobil</h3>
                        <p>Model prediksi harga mobil berbasis Machine Learning menggunakan model Random Forest Regression.</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card reveal">
                    <div class="project-header">
                        <span class="project-category">Data Science</span>
                        <a href="https://github.com/Masfikar92/Fraud-Detection" target="_blank" class="project-link">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                <polyline points="15 3 21 3 21 9" />
                                <line x1="10" y1="14" x2="21" y2="3" />
                            </svg>
                        </a>
                    </div>
                    <div class="project-body">
                        <h3>Fraud Detection</h3>
                        <p>Analisis dan deteksi kecurangan pada data transaksi menggunakan algoritma klasifikasi dengan menggunakan 2 model yaitu Decision Tree dan Random Forest.</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card reveal">
                    <div class="project-header">
                        <span class="project-category">Data Science</span>
                        <a href="https://github.com/Masfikar92/Clustering-Segmentasi-Pelanggan" target="_blank" class="project-link">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                <polyline points="15 3 21 3 21 9" />
                                <line x1="10" y1="14" x2="21" y2="3" />
                            </svg>
                        </a>
                    </div>
                    <div class="project-body">
                        <h3>Segmentasi Pelanggan</h3>
                        <p>Implementasi algoritma clustering untuk segmentasi data pelanggan (Unsupervised Learning) menggunakan model K-Means Clustering.</p>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="project-card reveal">
                    <div class="project-header">
                        <span class="project-category">Machine Learning</span>
                        <a href="https://github.com/Masfikar92/Klasifikasi-Harga-HP" target="_blank" class="project-link">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                <polyline points="15 3 21 3 21 9" />
                                <line x1="10" y1="14" x2="21" y2="3" />
                            </svg>
                        </a>
                    </div>
                    <div class="project-body">
                        <h3>Klasifikasi Harga HP</h3>
                        <p>Model klasifikasi machine learning untuk memprediksi harga handphone berdasarkan spesifikasi menggunakan semua model dan dipilih model Random Forest dengan metric yang terbaik.</p>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="project-card reveal">
                    <div class="project-header">
                        <span class="project-category">Data Analyst</span>
                        <a href="https://github.com/Masfikar92/Analisis-Penyewaan-Sepeda" target="_blank" class="project-link">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                <polyline points="15 3 21 3 21 9" />
                                <line x1="10" y1="14" x2="21" y2="3" />
                            </svg>
                        </a>
                    </div>
                    <div class="project-body">
                        <h3>Analisis Penyewaan Sepeda</h3>
                        <p>Eksplorasi dan analisis data (EDA) pada dataset layanan bike-sharing untuk menemukan pola sewa,menggunakan correlation untuk mengetahui hubungan antar fitur dan visualisasi untuk menyajikan data dalam bentuk grafik.</p>
                    </div>
                </div>
                
                <!-- Project 6 -->
                <div class="project-card reveal">
                    <div class="project-header">
                        <span class="project-category">Data Analyst</span>
                        <a href="https://github.com/Masfikar92/Smartspend" target="_blank" class="project-link">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                <polyline points="15 3 21 3 21 9" />
                                <line x1="10" y1="14" x2="21" y2="3" />
                            </svg>
                        </a>
                    </div>
                    <div class="project-body">
                        <h3>Smartspend</h3>
                        <p>Capstone Project Coding Camp berupa analisis dan visualisasi data pengeluaran serta membangun model clustering untuk sistem rekomendasi pengeluaran berdasarkan kondisi keuangan.</p>
                    </div>
                </div>

                <!-- Project 7 -->
                <div class="project-card reveal">
                    <div class="project-header">
                        <span class="project-category">UI/UX Design</span>
                        <a href="https://github.com/Masfikar92/Pemweb" target="_blank" class="project-link">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                <polyline points="15 3 21 3 21 9" />
                                <line x1="10" y1="14" x2="21" y2="3" />
                            </svg>
                        </a>
                    </div>
                    <div class="project-body">
                        <h3>Pemrograman Web</h3>
                        <p>Sebuah website hasil pembelajaran di perkuliahan.</p>
                    </div>
                </div>

                <!-- Project 8 -->
                <div class="project-card reveal">
                    <div class="project-header">
                        <span class="project-category">UI/UX Design</span>
                        <a href="https://github.com/Masfikar92/umkm1" target="_blank" class="project-link">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                <polyline points="15 3 21 3 21 9" />
                                <line x1="10" y1="14" x2="21" y2="3" />
                            </svg>
                        </a>
                    </div>
                    <div class="project-body">
                        <h3>UMKM Management System</h3>
                        <p>Platform berbasis Laravel dengan antarmuka yang clean untuk mengelola data UMKM.</p>
                    </div>
                </div>

                <!-- Project 9 -->
                <div class="project-card reveal">
                    <div class="project-header">
                        <span class="project-category">UI/UX Design</span>
                        <a href="https://github.com/Masfikar92/Addclass" target="_blank" class="project-link">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                <polyline points="15 3 21 3 21 9" />
                                <line x1="10" y1="14" x2="21" y2="3" />
                            </svg>
                        </a>
                    </div>
                    <div class="project-body">
                        <h3>Addclass Interactive</h3>
                        <p>Berperan sebagai colaborator untuk membantu rekan dalam membuat website Addclass umkm.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificate -->
     <section class="certificate" id="certificate">
        <div>
                <span class="section-tag reveal">Certificate</span>
                <h2 class="section-title reveal">Sertifikat</h2>
                <p class="section-desc reveal">Sertifikat yang saya peroleh selama pembelajaran.</p>
    
                <div class="certificate-grid">
                    <div class="certificate-card reveal">
                        <img src="Dasar_data_science.png" alt="Certificate Dasar Data Science" class="certificate-image">
                        <h3>Belajar Dasar Data Science</h3>
                        <p>Coding Camp DBS Foundation</p>
                    </div>
                    <div class="certificate-card reveal">
                        <img src="image.png" alt="Certificate Machine Learning" class="certificate-image">
                        <h3>Machine Learning Untuk Pemula</h3>
                        <p>Coding Camp DBS Foundation</p>
                    </div>
                    <div class="certificate-card reveal">
                        <img src="Fundamental_analisis_data.png" alt="Certificate Fundamental Analisis Data" class="certificate-image">
                        <h3>Fundamental Analisis Data</h3>
                        <p>Coding Camp DBS Foundation</p>
                    </div>
                    <div class="certificate-card reveal">
                        <img src="Dasar_visualisasi.png" alt="Certificate Visualisasi Data" class="certificate-image">
                        <h3>Belajar Visualisasi Data</h3>
                        <p>Coding Camp DBS Foundation</p>
                    </div>
                    <div class="certificate-card reveal">
                        <img src="python.png" alt="Certificate Pemrograman Python" class="certificate-image">
                        <h3>Memulai Pemrograman Dengan Python</h3>
                        <p>Coding Camp DBS Foundation</p>
                    </div>
                </div>
        </div>
     </section>

    <!-- ========== HOBI SECTION ========== -->
    <section class="hobbies" id="hobi">
        <div class="container">
            <span class="section-tag reveal">Hobbies</span>
            <h2 class="section-title reveal">Hobi</h2>
            <p class="section-desc reveal">Aktifitas yang saya sukai.</p>

            <div class="hobbies-grid">
                <!-- Lari -->
                <div class="hobby-card reveal">
                    <div class="hobby-visual running">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="13" cy="3" r="2" />
                            <path d="M7 21l3-5" />
                            <path d="M10 16l-2-4 4-1 3 3 3-1" />
                            <path d="M18 13l-1 6" />
                        </svg>
                    </div>
                    <div class="hobby-info">
                        <h3>Lari</h3>
                        <p>Olahraga untuk menjaga kesehatan dan stamina.</p>
                    </div>
                </div>

                <!-- Bermain Game -->
                <div class="hobby-card reveal">
                    <div class="hobby-visual gaming">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="6" width="20" height="12" rx="3" />
                            <path d="M6 12h4" />
                            <path d="M8 10v4" />
                        </svg>
                    </div>
                    <div class="hobby-info">
                        <h3>Bermain Game</h3>
                        <p>Hiburan di waktu luang.</p>
                    </div>
                </div>

                <!-- Menonton -->
                <div class="hobby-card reveal">
                    <div class="hobby-visual watching">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="4" width="20" height="13" rx="2" />
                            <path d="M10 9l5 3.5-5 3.5V9z" />
                        </svg>
                    </div>
                    <div class="hobby-info">
                        <h3>Menonton Film/Anime</h3>
                        <p>Hiburan saat sudah bosan bermain game.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CONTACT SECTION ========== -->
    <section class="contact" id="contact">
        <div class="container">
            <span class="section-tag reveal">Transmission</span>
            <h2 class="section-title reveal">Contact Me</h2>
            <p class="section-desc reveal">Jika Anda ingin menghubungi saya, silakan hubungi saya melalui saluran berikut:</p>

            <div class="contact-grid">
                <div class="contact-text reveal">
                    <h3>Get in Touch</h3>
                    <p>Hubungi saya jika Anda tertarik untuk berkolaborasi atau bekerja sama dengan saya.</p>

                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                        <div class="contact-detail">
                            <div class="contact-label">Email</div>
                            <div class="contact-value">masfikar92@gmail.com</div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z" />
                            </svg>
                        </div>
                        <div class="contact-detail">
                            <div class="contact-label">WhatsApp</div>
                            <div class="contact-value">085743135693</div>
                        </div>
                    </div>
                </div>

                <div class="contact-cta reveal">
                    <h3>Chat Sekarang</h3>
                    <p>Pesan langsung terhubung dengan Whatsapp pribadi saya.</p>
                    <a href="https://wa.me/6285743135693" target="_blank" class="wa-button">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                        Hubungi WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer class="footer">
        <div class="container">
            <p class="footer-quote">"Data represents the past, but understanding it shapes the future."</p>
            <p>© 2026 Muhammad <span>Zulfikar</span> All Rights Reserved</p>
        </div>
    </footer>
    <!-- Script untuk animasi partikel, teks ketik, dan memunculkan elemen saat scroll (reveal) -->
    <script src="script.js"></script>
</body>
</html>