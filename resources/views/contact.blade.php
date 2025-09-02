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

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Hubungi Kami</h2>
                <p>Kunjungi toko kami atau hubungi untuk konsultasi dan pemeriksaan mata</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div>
                            <h4>Alamat</h4>
                            <p>Jl. Krakal No. 123<br>Yogyakarta 55584</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div>
                            <h4>Telepon</h4>
                            <p>(0274) 123-4567<br>+62 812-3456-7890</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">🕒</div>
                        <div>
                            <h4>Jam Operasional</h4>
                            <p>Senin - Sabtu: 09:00 - 21:00<br>Minggu: 10:00 - 18:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <x-footer></x-footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
