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


     <!-- Products Section -->
    <section id="products" class="products">
        <div class="container">
            <div class="section-header">
                <h2>Koleksi Kacamata Premium</h2>
                <p>Pilihan frame berkualitas tinggi untuk gaya dan kenyamanan optimal</p>
            </div>
            <div class="products-grid">
                <div class="product-card">
                    <img src="https://images.pexels.com/photos/701877/pexels-photo-701877.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Kacamata Classic">
                    <div class="product-info">
                        <h3>Classic Series</h3>
                        <p>Frame klasik yang timeless dengan material berkualitas tinggi</p>
                        <div class="product-price">Mulai dari Rp 450.000</div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="https://images.pexels.com/photos/1229861/pexels-photo-1229861.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Kacamata Modern">
                    <div class="product-info">
                        <h3>Modern Collection</h3>
                        <p>Desain kontemporer untuk gaya hidup aktif dan dinamis</p>
                        <div class="product-price">Mulai dari Rp 650.000</div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="https://images.pexels.com/photos/934070/pexels-photo-934070.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Kacamata Sports">
                    <div class="product-info">
                        <h3>Sports Line</h3>
                        <p>Frame sporty dengan teknologi anti-slip dan tahan impact</p>
                        <div class="product-price">Mulai dari Rp 550.000</div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="https://images.pexels.com/photos/947885/pexels-photo-947885.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Kacamata Premium">
                    <div class="product-info">
                        <h3>Premium Series</h3>
                        <p>Frame mewah dengan finishing premium dan detail eksklusif</p>
                        <div class="product-price">Mulai dari Rp 850.000</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <x-footer></x-footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
