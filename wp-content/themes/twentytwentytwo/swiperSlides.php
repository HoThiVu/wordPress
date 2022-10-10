<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slides</title>
</head>
<body>
    <!-- Swiper -->
  <div #swiperRef="" class="swiper-container mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <p class="append-buttons">
    <button class="prepend-2-slides">Prepend 2 Slides</button>
    <button class="prepend-slide">Prepend Slide</button>
    <button class="append-slide">Append Slide</button>
    <button class="append-2-slides">Append 2 Slides</button>
  </p>

</body>
    <?php include 'swiperJS.js' ?>
</html>