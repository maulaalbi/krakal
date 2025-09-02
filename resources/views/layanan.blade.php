<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krakal Optik - Solusi Penglihatan Terbaik</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->

    <x-navbar></x-navbar>
    <!-- Hero Section -->


    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2>Layanan Profesional Kami</h2>
                <p>Dengan peralatan canggih dan tim ahli, kami memberikan layanan optik terbaik</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">👁️</div>
                    <h3>Pemeriksaan Mata</h3>
                    <p>Pemeriksaan mata komprehensif dengan teknologi terdepan untuk mendeteksi masalah penglihatan dan kesehatan mata.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">👓</div>
                    <h3>Kacamata Custom</h3>
                    <p>Frame kacamata berkualitas tinggi dengan lensa yang disesuaikan dengan kebutuhan penglihatan Anda.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔍</div>
                    <h3>Lensa Kontak</h3>
                    <p>Berbagai pilihan lensa kontak dari brand terpercaya dengan konsultasi penggunaan yang tepat.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🏥</div>
                    <h3>Konsultasi Ahli</h3>
                    <p>Konsultasi dengan optometrist berpengalaman untuk solusi penglihatan yang tepat dan nyaman.</p>
                </div>
            </div>
        </div>
    </section>




    <x-footer></x-footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
