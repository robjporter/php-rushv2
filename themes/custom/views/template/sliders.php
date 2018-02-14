<?php $this->setSiteTitle('Sliders'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
    <a href="index">Back</a><br>

    <h5>Slider</h5>
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="<?=PATH_IMGS?>nature1.jpg" alt="">
          <div class="caption center-align">
            <h3>This is our tagline.</h3>
            <h5 class="light grey-text text-lighten-3">Here is our slogan</h5>
          </div>
        </li>
        <li>
          <img src="<?=PATH_IMGS?>nature1.jpg" alt="">
          <div class="caption right-align">
            <h3>This is our tagline.</h3>
            <h5 class="light grey-text text-lighten-3">Here is our slogan</h5>
          </div>
        </li>
        <li>
          <img src="<?=PATH_IMGS?>nature1.jpg" alt="">
          <div class="caption left-align">
            <h3>This is our tagline.</h3>
            <h5 class="light grey-text text-lighten-3">Here is our slogan</h5>
          </div>
        </li>
      </ul>
    </div>

    <h5>Carousel</h5>
    <div class="carousel">
      <a href="#one!" class="carousel-item"><img src="<?=PATH_IMGS?>nature1.jpg" alt=""></a>
      <a href="#two!" class="carousel-item"><img src="<?=PATH_IMGS?>nature1.jpg" alt=""></a>
      <a href="#three!" class="carousel-item"><img src="<?=PATH_IMGS?>nature1.jpg" alt=""></a>
      <a href="#four!" class="carousel-item"><img src="<?=PATH_IMGS?>nature1.jpg" alt=""></a>
      <a href="#five!" class="carousel-item"><img src="<?=PATH_IMGS?>nature1.jpg" alt=""></a>
    </div>
    <div class="carousel carousel-slider">
      <a href="#one!" class="carousel-item"><img src="<?=PATH_IMGS?>nature1.jpg" alt=""></a>
      <a href="#two!" class="carousel-item"><img src="<?=PATH_IMGS?>nature1.jpg" alt=""></a>
      <a href="#three!" class="carousel-item"><img src="<?=PATH_IMGS?>nature1.jpg" alt=""></a>
      <a href="#four!" class="carousel-item"><img src="<?=PATH_IMGS?>nature1.jpg" alt=""></a>
      <a href="#five!" class="carousel-item"><img src="<?=PATH_IMGS?>nature1.jpg" alt=""></a>
    </div>

<?php $this->end(); ?>
<?php $this->start('js-script'); ?>
<?php $this->end(); ?>
<?php $this->start('jquery'); ?>
  $('.slider').slider();
  $('.carousel').carousel();
  $('.carousel.carousel-slider').carousel({fullWidth:true});
<?php $this->end(); ?>
