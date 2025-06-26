<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Anugrah Wira Sejahtera - Developer Properti Terpercaya</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary: #1a365d;
            --secondary: #2c5282;
            --accent: #ecc94b;
            --light: #f7fafc;
        }
        body {
            font-family: 'Poppins', sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .heading-font {
            font-family: 'Playfair Display', serif;
        }
        .hero {
            background: linear-gradient(rgba(26, 54, 93, 0.8), rgba(26, 54, 93, 0.8)), 
                        url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1473&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .property-card {
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .property-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: var(--accent);
        }
        .testimonial-card {
            background-color: var(--light);
        }
        .btn-primary {
            background-color: var(--primary);
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: var(--secondary);
            transform: translateY(-2px);
        }
        .nav-link {
            position: relative;
        }
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: var(--accent);
            transition: width 0.3s ease;
        }
        .nav-link:hover:after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="text-2xl font-bold text-gray-800 heading-font">
                        <span class="text-blue-900">PT</span> HomeSweet
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="nav-link text-gray-800 hover:text-blue-900">Beranda</a>
                    <a href="#about" class="nav-link text-gray-800 hover:text-blue-900">Tentang Kami</a>
                    <a href="#projects" class="nav-link text-gray-800 hover:text-blue-900">Proyek Kami</a>
                    <a href="#services" class="nav-link text-gray-800 hover:text-blue-900">Layanan</a>
                    <a href="#testimonials" class="nav-link text-gray-800 hover:text-blue-900">Testimoni</a>
                    <a href="#contact" class="nav-link text-gray-800 hover:text-blue-900">Kontak</a>
                    <a href="#contact" class="btn-primary text-white px-6 py-2 rounded-full">Hubungi Kami</a>
                </div>
                <button class="md:hidden text-gray-800 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero flex items-center justify-center text-white py-32">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 heading-font">Temukan Rumah Impian Anda</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">PT HomeSweet menghadirkan properti berkualitas dengan lokasi strategis dan fasilitas lengkap</p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="#projects" class="btn-primary text-white px-8 py-3 rounded-full text-lg">Lihat Proyek</a>
                <a href="#contact" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full text-lg hover:bg-white hover:text-blue-900 transition">Konsultasi Gratis</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <img src="{{ asset('images/ide-desain-rumah-mewah-untuk-anda-130125013838148646.jpg') }}" 
                         alt="Tentang AWS Properties" 
                         class="rounded-lg shadow-xl w-full h-auto">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-3xl font-bold mb-6 heading-font">Tentang <span class="text-blue-900">PT HomeSweet</span></h2>
                    <p class="mb-6 text-lg">Sebagai developer properti terkemuka di Indonesia, kami berkomitmen untuk menyediakan hunian berkualitas dengan konsep modern dan fasilitas lengkap.</p>
                    <div class="mb-6">
                        <div class="flex items-start mb-4">
                            <div class="feature-icon rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-home text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">10+ Tahun Pengalaman</h3>
                                <p>Pengalaman luas dalam pengembangan properti residensial dan komersial</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="feature-icon rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-award text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Penghargaan Industri</h3>
                                <p>Diakui sebagai developer terbaik dalam kategori hunian modern</p>
                            </div>
                        </div>
                    </div>
                    <a href="#about" class="inline-block btn-primary text-white px-6 py-3 rounded-full">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 heading-font">Proyek <span class="text-blue-900">Unggulan Kami</span></h2>
                <p class="max-w-2xl mx-auto text-lg">Berbagai pilihan properti dengan lokasi strategis di seluruh Indonesia</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="property-card bg-white rounded-lg overflow-hidden">
                    <img src="{{ asset('images/ide-desain-rumah-mewah-untuk-anda-130125013838148646.jpg') }}" 
                         alt="Griya Harmoni Residence" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 heading-font">Griya Harmoni Residence</h3>
                        <p class="text-gray-600 mb-4">Bogor, Jawa Barat</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-blue-900 font-bold">Rp 1,2 M - Rp 2,5 M</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Tersedia</span>
                        </div>
                        <div class="flex justify-between text-sm text-gray-500 mb-4">
                            <span><i class="fas fa-bed mr-1"></i> 3-4 Kamar</span>
                            <span><i class="fas fa-bath mr-1"></i> 2-3 Kamar Mandi</span>
                            <span><i class="fas fa-ruler-combined mr-1"></i> 120-200m²</span>
                        </div>
                        <a href="/property/1" class="block text-center btn-primary text-white py-2 rounded-full">Detail Properti</a>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="property-card bg-white rounded-lg overflow-hidden">
                    <img src="{{ asset('images/desain-rumah-sederhana-tapi-indah-Instagram-@ngulikrumah.jpg') }}" 
                         alt="Taman Surya Heights" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 heading-font">Taman Surya Heights</h3>
                        <p class="text-gray-600 mb-4">Bekasi, Jawa Barat</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-blue-900 font-bold">Rp 950 Jt - Rp 1,8 M</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Hampir Habis</span>
                        </div>
                        <div class="flex justify-between text-sm text-gray-500 mb-4">
                            <span><i class="fas fa-bed mr-1"></i> 2-3 Kamar</span>
                            <span><i class="fas fa-bath mr-1"></i> 1-2 Kamar Mandi</span>
                            <span><i class="fas fa-ruler-combined mr-1"></i> 90-150m²</span>
                        </div>
                        <a href="/property/2" class="block text-center btn-primary text-white py-2 rounded-full">Detail Properti</a>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="property-card bg-white rounded-lg overflow-hidden">
                    <img src="{{ asset('images/griya.png') }}" 
                         alt="Puri Alam Sentosa" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 heading-font">Puri Alam Sentosa</h3>
                        <p class="text-gray-600 mb-4">Depok, Jawa Barat</p>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-blue-900 font-bold">Rp 1,5 M - Rp 3 M</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Tersedia</span>
                        </div>
                        <div class="flex justify-between text-sm text-gray-500 mb-4">
                            <span><i class="fas fa-bed mr-1"></i> 4-5 Kamar</span>
                            <span><i class="fas fa-bath mr-1"></i> 3-4 Kamar Mandi</span>
                            <span><i class="fas fa-ruler-combined mr-1"></i> 200-350m²</span>
                        </div>
                        <a href="/property/3" class="block text-center btn-primary text-white py-2 rounded-full">Detail Properti</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="#" class="inline-block border-2 border-blue-900 text-blue-900 px-8 py-3 rounded-full text-lg font-semibold hover:bg-blue-900 hover:text-white transition">Lihat Semua Proyek</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 heading-font">Layanan <span class="text-blue-900">Kami</span></h2>
                <p class="max-w-2xl mx-auto text-lg">Kami menyediakan solusi lengkap untuk kebutuhan properti Anda</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-lg text-center">
                    <div class="feature-icon rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-home text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 heading-font">Penjualan Properti</h3>
                    <p class="mb-4">Berbagai pilihan rumah siap huni dengan kualitas terbaik dan harga kompetitif</p>
                    <a href="#" class="text-blue-900 font-semibold">Selengkapnya →</a>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg text-center">
                    <div class="feature-icon rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-handshake text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 heading-font">KPR & Pembiayaan</h3>
                    <p class="mb-4">Kemudahan pembiayaan melalui bank partner dengan bunga kompetitif</p>
                    <a href="#" class="text-blue-900 font-semibold">Selengkapnya →</a>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg text-center">
                    <div class="feature-icon rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-tools text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 heading-font">After Sales Service</h3>
                    <p class="mb-4">Layanan purna jual untuk memastikan kepuasan pelanggan jangka panjang</p>
                    <a href="#" class="text-blue-900 font-semibold">Selengkapnya →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-blue-900 text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 heading-font">Apa Kata <span class="text-yellow-300">Pelanggan Kami</span></h2>
                <p class="max-w-2xl mx-auto text-lg">Testimoni dari pelanggan yang telah mempercayakan properti mereka kepada kami</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="testimonial-card p-8 rounded-lg text-gray-800">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" 
                             alt="Testimoni 1" 
                             class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Dewi</h4>
                            <p class="text-sm text-gray-600">Owner</p>
                        </div>
                    </div>
                    <p class="italic">"Proses pembelian sangat mudah dan transparan. Rumahnya berkualitas dengan lingkungan yang asri."</p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-card p-8 rounded-lg text-gray-800">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" 
                             alt="Testimoni 2" 
                             class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Budi</h4>
                            <p class="text-sm text-gray-600">Karyawan Swasta</p>
                        </div>
                    </div>
                    <p class="italic">"Pelayanan sangat memuaskan dari awal sampai akhir. Proses KPR juga dibantu hingga selesai."</p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="testimonial-card p-8 rounded-lg text-gray-800">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" 
                             alt="Testimoni 3" 
                             class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Siti Aminah</h4>
                            <p class="text-sm text-gray-600">Ibu Rumah Tangga</p>
                        </div>
                    </div>
                    <p class="italic">"Rumahnya nyaman dan sesuai dengan yang dijanjikan. Lingkungannya juga ramah keluarga."</p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <h2 class="text-3xl font-bold mb-6 heading-font">Hubungi <span class="text-blue-900">Kami</span></h2>
                    <p class="mb-6 text-lg">Kami siap membantu Anda menemukan properti impian. Hubungi kami melalui informasi kontak berikut atau isi formulir di samping.</p>
                    
                    <div class="mb-6">
                        <div class="flex items-start mb-4">
                            <div class="text-blue-900 mr-4 mt-1">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-1">Kantor Pusat</h3>
                                <p>Jl. Sudirman No. 123, Jakarta Selatan, DKI Jakarta 12190</p>
                            </div>
                        </div>
                        <div class="flex items-start mb-4">
                            <div class="text-blue-900 mr-4 mt-1">
                                <i class="fas fa-phone-alt text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-1">Telepon</h3>
                                <p>(021) 1234-5678</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-blue-900 mr-4 mt-1">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-1">Email</h3>
                                <p>dayen783@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Jam Operasional</h3>
                        <p class="mb-2">Senin - Jumat: 08.00 - 17.00 WIB</p>
                        <p>Sabtu: 09.00 - 15.00 WIB</p>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <form class="bg-white p-8 rounded-lg shadow-lg">
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2" for="name">Nama Lengkap</label>
                            <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2" for="email">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2" for="phone">Nomor Telepon</label>
                            <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2" for="subject">Subjek</label>
                            <select id="subject" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>Informasi Properti</option>
                                <option>Konsultasi KPR</option>
                                <option>Keluhan/Pengaduan</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 mb-2" for="message">Pesan</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        <button type="submit" class="w-full btn-primary text-white py-3 rounded-full text-lg font-semibold">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-6">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 heading-font">PT Anugrah Wira Sejahtera</h3>
                    <p class="mb-4">Membangun hunian berkualitas untuk kehidupan yang lebih baik.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://github.com/Fadayen" class="text-gray-400 hover:text-white"><i class="fa-brands fa-github"></i></a>
                        <a href="https://www.instagram.com/dayennht/" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/fadayen-nurhidayat-a69775229?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 heading-font">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white">Beranda</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white">Tentang Kami</a></li>
                        <li><a href="#projects" class="text-gray-400 hover:text-white">Proyek Kami</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white">Layanan</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 heading-font">Proyek Terbaru</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Griya Harmoni Residence</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Taman Surya Heights</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Puri Alam Sentosa</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Bukit Permai Estate</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 heading-font">Newsletter</h4>
                    <p class="mb-4 text-gray-400">Dapatkan informasi terbaru tentang proyek dan promo kami.</p>
                    <form class="flex">
                        <input type="email" placeholder="Alamat Email" class="px-4 py-2 w-full rounded-l focus:outline-none text-gray-800">
                        <button type="submit" class="bg-blue-700 hover:bg-blue-800 px-4 py-2 rounded-r">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-6 text-center text-gray-400">
                <p>&copy; 2025 PT HomeSweet. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <a href="https://wa.me/+6289506263907" class="bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition">
            <i class="fab fa-whatsapp text-2xl"></i>
        </a>
    </div>
</body>
</html>
