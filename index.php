<?php
$products = [
    [
        "nama" => "MSI GeForce RTX™ 5060 Ti 8G GAMING OC",
        "kategori" => "Graphics Card MSI",
        "deskripsi" => "menghadirkan performa gaming dan kreativitas maksimal berkat arsitektur NVIDIA Blackwell serta fitur AI DLSS 4. Kartu grafis ini juga dilengkapi sistem pendingin TWIN FROZR 10",
        "harga" => 12299000,
        "stok" => 7,
        "gambar" => "MSI Geforce RTX 5060 Ti.webp"
    ],
    [
        "nama" => "MSI GeForce RTX™ 2080 Ti 8G GAMING X TRIO",
        "kategori" => "Graphics Card MSI",
        "deskripsi" => "MSI GeForce RTX 2080 GAMING X TRIO menghadirkan performa grafis luar biasa dengan teknologi Ray Tracing dan arsitektur NVIDIA Turing untuk gaming AAA yang mulus",
        "harga" => 4494743,
        "stok" => 0,
        "gambar" => "MSI RTX 2080.webp"
    ],
    [
        "nama" => "ASUS ROG Astral GeForce RTX 5090 32GB GDDR7 OC Edition ",
        "kategori" => "Graphics Card ASUS",
        "deskripsi" => "ASUS ROG Astral GeForce RTX 5090 32GB GDDR7 OC Edition menghadirkan performa kelas flagship tanpa kompromi dengan VRAM 32GB GDDR7 dan sistem pendingin mutakhir",
        "harga" => 144975000,
        "stok" => 12,
        "gambar" => "ROG RTX5090.jpeg"
    ],
    [
        "nama" => "Gigabyte NVIDIA GeForce RTX 4080 AERO OC 16GB GDDR6X",
        "kategori" => "Graphics Card Gigabyte",
        "deskripsi" => "Gigabyte NVIDIA GeForce RTX 4080 AERO OC 16GB GDDR6X menghadirkan performa gaming dan kreativitas maksimal dengan VRAM 16GB GDDR6X dan sistem pendingin canggih",
        "harga" => 59999000,
        "stok" => 5,
        "gambar" => "RTX 4080 AERO.png"
    ],
    [
        "nama" => "ASUS TUF Gaming GeForce RTX 4090 OC Edition 24GB GDDR6X",
        "kategori" => "Graphics Card ASUS",
        "deskripsi" => "ASUS TUF Gaming GeForce RTX 4090 OC Edition 24GB GDDR6X menghadirkan daya komputasi grafis kelas atas dengan daya tahan tingkat militer dan sistem pendingin optimal",
        "harga" => 36950000,
        "stok" => 4,
        "gambar" => "VGA ASUS TUF Gaming GeForce RTX 4090 OC Edition 24GB GDDR6X.jpg"
    ],
    [
        "nama" => "ZOTAC GAMING GeForce RTX 4070 Ti AMP Extreme AIRO 6GB GDDR6X",
        "kategori" => "Graphics Card ZOTAC",
        "deskripsi" => "adalah kartu grafis entry-level berbasis arsitektur NVIDIA Ampere yang dirancang efisien untuk kebutuhan gaming 1080p ringan",
        "harga" => 5495000 ,
        "stok" => 15,
        "gambar" => "ZOTAC RTX3050.jfif"
    ]

];
$total_produk = count($products);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sena Store</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
    --bg-color: #F8F9FA;
    --primary-color: #111827;
    --secondary-color: #64748B;
    --accent-color: #2563EB;
    --accent-hover: #1D4ED8;
    --card-color: #FFFFFF;
    --border-color: #E5E7EB;
    --success-color: #10B981;
    --danger-color: #EF4444;
    --warning-bg: #FEF3C7;
    --warning-text: #D97706;
    --disabled-bg: #E2E8F0;
    --disabled-text: #94A3B8;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

body {
    background-color: var(--bg-color);
    color: var(--primary-color);
    line-height: 1.5;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 8%;
    background-color: var(--card-color);
    border-bottom: 1px solid var(--border-color);
}

.navbar .brand {
    font-size: 22px;
    font-weight: 700;
    color: var(--primary-color);
}

.navbar ul {
    display: flex;
    list-style: none;
    gap: 24px;
}

.navbar a {
    text-decoration: none;
    color: var(--secondary-color);
    font-size: 14px;
    font-weight: 500;
    transition: color 0.2s ease;
}

.navbar a:hover {
    color: var(--accent-color);
}

.container {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
}

.hero {
    background-color: var(--card-color);
    border: 1px solid var(--border-color);
    padding: 60px 48px;
    border-radius: 20px;
    margin-bottom: 48px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
}

.hero span {
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1.5px;
    color: var(--accent-color);
    text-transform: uppercase;
}

.hero h1 {
    font-size: 48px;
    font-weight: 700;
    color: var(--primary-color);
    margin: 12px 0;
    line-height: 1.15;
    max-width: 650px;
}

.hero p {
    font-size: 16px;
    color: var(--secondary-color);
    margin-bottom: 24px;
    max-width: 500px;
}

.hero .btn-hero {
    display: inline-block;
    background-color: var(--accent-color);
    color: #FFFFFF;
    padding: 12px 28px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    transition: all 0.2s ease;
}

.hero .btn-hero:hover {
    background-color: var(--accent-hover);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.25);
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 24px;
}

.section-header h2 {
    font-size: 20px;
    font-weight: 600;
    color: var(--primary-color);
}

.section-header p {
    color: var(--secondary-color);
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 4px;
}

.total-badge {
    background-color: var(--card-color);
    border: 1px solid var(--border-color);
    color: var(--secondary-color);
    padding: 6px 16px;
    border-radius: 20px;
    font-weight: 500;
    font-size: 14px;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}

.card {
    background-color: var(--card-color);
    border-radius: 16px;
    padding: 20px;
    border: 1px solid var(--border-color);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), 
                box-shadow 0.25s cubic-bezier(0.16, 1, 0.3, 1), 
                border-color 0.25s ease;
    cursor: pointer;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px -4px rgba(17, 24, 39, 0.08), 
                0 4px 6px -2px rgba(17, 24, 39, 0.03);
    border-color: #CBD5E1;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
}

.category {
    font-size: 12px;
    font-weight: 500;
    color: var(--secondary-color);
    text-transform: uppercase;
}

.product-description {
    font-size: 14px;
    font-weight: 400;
    color: var(--secondary-color);
    margin-bottom: 12px;
    line-height: 1.4;
}

.badge-discount {
    background-color: var(--warning-bg);
    color: var(--warning-text);
    font-size: 11px;
    font-weight: 600;
    padding: 3px 8px;
    border-radius: 6px;
}

.product-image {
    width: 100%;
    height: 180px;
    object-fit: contain;
    margin-bottom: 16px;
    background-color: var(--bg-color);
    border-radius: 10px;
    padding: 12px;
}

.card h3 {
    font-size: 18px;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 8px;
}

.price-container {
    margin-bottom: 16px;
}

.old-price {
    text-decoration: line-through;
    color: var(--secondary-color);
    font-size: 14px;
    font-weight: 400;
}

.current-price {
    font-size: 22px;
    font-weight: 600;
    color: var(--primary-color);
}

.card-footer {
    margin-top: auto;
}

.stock-info {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    margin-bottom: 12px;
    color: var(--secondary-color);
}

.status-available {
    color: var(--success-color);
    font-weight: 600;
}

.status-empty {
    color: var(--danger-color);
    font-weight: 600;
}

.btn-buy {
    width: 100%;
    padding: 12px;
    background-color: var(--accent-color);
    color: #FFFFFF;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
}

.btn-buy:hover:not(:disabled) {
    background-color: var(--accent-hover);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
}

.btn-buy:disabled {
    background-color: var(--disabled-bg);
    color: var(--disabled-text);
    cursor: not-allowed;
}

footer {
    text-align: center;
    padding: 40px;
    color: var(--secondary-color);
    font-size: 14px;
    margin-top: 60px;
    border-top: 1px solid var(--border-color);
    background-color: var(--card-color);
}

@media (max-width: 900px) {
    .product-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .hero h1 {
        font-size: 36px;
    }
}

@media (max-width: 600px) {
    .product-grid {
        grid-template-columns: 1fr;
    }
    
    .navbar {
        flex-direction: column;
        gap: 12px;
    }
    
    .hero {
        padding: 32px 20px;
    }
    
    .hero h1 {
        font-size: 32px;
    }
}
        </style>       
</head>
<body>
    <nav class="navbar">
        <div class="brand">Sena Store</div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>
        <div class="container">
        <section class="hero">
            <span>PREMIUM TECH, BEST PRICES</span>
            <h1>Temukan Solusi Terbaik untuk Kebutuhan Anda.</h1>
            <p>kualitas top, harga terbaik, layanan terbaik, semua di satu tempat</p>
            <a href="#products" class="btn-hero">Shop Now</a>
        </section>

        <div class="section-header" id="products">
            <div>
                <p>FEATURED PRODUCTS</p>
                <h2>Katalog Produk</h2>
            </div>
            <div class="total-badge">
                Total Produk: <?php echo $total_produk; ?>
            </div>
        </div>
        <div class="product-grid">
            <?php foreach ($products as $item): ?>
                <?php
                    $has_discount = $item['harga'] >= 1000000;
                    $final_price = $item['harga'];
                    
                    if ($has_discount) {
                        $discount_amount = $item['harga'] * 0.10;
                        $final_price = $item['harga'] - $discount_amount;
                    }

                    $is_available = $item['stok'] > 0;
                ?>
                <div class="card">
                    <div>
                        <div class="card-header">
                            <span class="category"><?php echo $item['kategori']; ?></span>
                            <?php if ($has_discount): ?>
                                <span class="badge-discount">DISKON 10%</span>
                            <?php endif; ?>
                        </div>

                        <p class="product-description"><?php echo $item['deskripsi']; ?></p>
                        <img 
                            src="<?php echo $item['gambar']; ?>" 
                            alt="<?php echo $item['nama']; ?>" 
                            class="product-image"
                        >

                        <h3><?php echo $item['nama']; ?></h3>

                        <div class="price-container">
                            <?php if ($has_discount): ?>
                                <div class="old-price">Rp<?php echo number_format($item['harga'], 0, ',', '.'); ?></div>
                                <div class="current-price">Rp<?php echo number_format($final_price, 0, ',', '.'); ?></div>
                            <?php else: ?>
                                <div class="current-price">Rp<?php echo number_format($item['harga'], 0, ',', '.'); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="stock-info">
                            <span>Stok: <?php echo $item['stok']; ?></span>
                            <?php if ($is_available): ?>
                                <span class="status-available">Tersedia</span>
                            <?php else: ?>
                                <span class="status-empty">Stok Habis</span>
                            <?php endif; ?>
                        </div>

                        <button class="btn-buy" <?php echo !$is_available ? 'disabled' : ''; ?>>
                            <?php echo $is_available ? 'Beli Sekarang' : 'Stok Habis'; ?>
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <footer>
        <p>&copy; 2026 Sena Store. All Rights Reserved.</p>
    </footer>

</body>
</html>

    
