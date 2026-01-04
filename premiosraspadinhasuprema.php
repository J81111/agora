<?php
// Array com os dados dos prêmios
$prizes = [
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => '5.000 Reais', 'value' => '5.000,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => 'iPhone 15', 'value' => '5.000,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => 'Notebook Dell G15', 'value' => '4.500,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => 'PlayStation 5', 'value' => '4.500,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => 'Smart TV 4K', 'value' => '3.000,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => 'Ipad 10º', 'value' => '2.800,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => 'Caixa de som JBL', 'value' => '2.500,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => 'AirPods 3ª gen.', 'value' => '1.900,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => '1.000 Reais', 'value' => '1.000,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => 'Air Fryer', 'value' => '850,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => '700 Reais', 'value' => '700,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => '500 Reais', 'value' => '500,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => 'Adaptador tipo C', 'value' => '220,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => '200 Reais', 'value' => '200,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => 'Fone de ouvido', 'value' => '170,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => 'Copo Stanley', 'value' => '165,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => 'Smartwatch D20', 'value' => '150,00'],
    ['img' => 'https://ik.imagekit.io/3kbnnws8u/PRIZES/100-reais.png', 'name' => '100 Reais', 'value' => '100,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => 'PowerBank', 'value' => '60,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => '50 Reais', 'value' => '50,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => '20 Reais', 'value' => '20,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => '5 Reais', 'value' => '5,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => '2 Reais', 'value' => '2,00'],
    ['img' => 'https://ik.imagekit.io/kyjz2djk3p/500-REAIS.png', 'name' => '1 Real', 'value' => '1,00'],
];
?>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<style>
    /* --- SEÇÃO DE PRÊMIOS --- */
    .prizes-section {
        padding-top: 1rem;
    }

    .prizes-title {
        color: #f0f0f0;
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
    }

    /* --- Container do Carrossel --- */
    .prizes-layout-container {
        width: 100%;
        overflow: hidden;
    }

    /* --- CARD DE PRÊMIO --- */
    .prize-card {
        background-color: #2A2A2E;
        border-radius: 8px;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        transition: transform 0.2s ease-in-out;
        position: relative;
        overflow: hidden;
        height: 100%;
    }

    .prize-card:hover {
        transform: translateY(-5px);
    }

    .prize-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 50%;
        background: linear-gradient(to top, rgba(40, 229, 4, 0.20) 0%, transparent 80%);
        pointer-events: none;
        z-index: 1;
    }

    .prize-card > * {
        position: relative;
        z-index: 2;
    }

    .prize-card .prize-image {
        width: 100%;
        max-width: 100px;
        height: 100px;
        object-fit: contain;
    }

    .prize-card .prize-name {
        color: #E5E5E5;
        font-size: 0.9rem;
        font-weight: 500;
        min-height: 2.5em;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .prize-card .prize-value {
        background-color: #fff;
        color: #0e0b0c;
        font-weight: 510;
        font-size: 1rem;
        padding: 0.5rem 0.75rem;
        border-radius: 6px;
        text-align: left;
        box-sizing: border-box;
    }

    /* --- Estilos do Carrossel para todas as telas --- */
    .prizes-layout-container {
        padding-bottom: 2rem;
    }
    .prizes-layout-container .swiper-slide {
        width: 160px; /* Largura fixa para cada card */
        flex-shrink: 0;
    }
    .prizes-layout-container .swiper-pagination-bullet {
        background: #fff;
        opacity: 0.5;
    }
    .prizes-layout-container .swiper-pagination-bullet-active {
        background: #28e504;
        opacity: 1;
    }

</style>

<section class="prizes-section">
    <h2 class="prizes-title">Prêmios da Raspadinha:</h2>

    <div class="swiper prizes-layout-container">
        <div class="swiper-wrapper">
            <?php foreach ($prizes as $prize): ?>
                <div class="swiper-slide">
                    <div class="prize-card">
                        <img src="<?php echo htmlspecialchars($prize['img']); ?>" alt="<?php echo htmlspecialchars($prize['name']); ?>" class="prize-image">
                        <p class="prize-name"><?php echo htmlspecialchars($prize['name']); ?></p>
                        <div class="prize-value">
                            R$ <?php echo htmlspecialchars($prize['value']); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.prizes-layout-container', {
        slidesPerView: 'auto',
        spaceBetween: 16,
        freeMode: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
});
</script>