<section class="max-w-screen-xl px-4 mx-auto lg:px-6">
    <h1 class="text-2xl font-bold text-center">CONFIRA NOSSOS CURSOS</h3>
    <h2 class="text-center text-lg">Os melhores cursos com espcialistas no assunto</h2>
    <div class="swiper mySwiper pt-10">
        <div class="swiper-wrapper pb-10">
            <?php
            foreach ($products as $product) {
            ?>
                <div class="bg-color1 swiper-slide p-10 items-center shadow rounded-xl h-72">
                    <h1 class="text-white text-center py-2 font-bold"><?php echo $product['name'] ?></h1>
                    <div class="font-serif text-white text-justify">
                        <?php echo $product['info'] ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="text-white swiper-button-next"></div>
        <div class="text-white swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    </h3>
</section>