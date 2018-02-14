<?php $this->setSiteTitle('VIDEO'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
    <a href="index">Back</a><br>

    <div class="video-content">
      <video class="video" autoPlay loop preload="auto" poster="https://www.sky.com/assets/toolkit/docs/hero/example-poster.jpg" width="100%" height="100%">
        <source src="<?=PATH_VIDO?>example.mp4" type="video/mp4">
      </video>
      <div class="video-subtitle-caption">
        <div class="video-subtitle-container">
          <a class="" href="#">
            <p class="video-heading-alpha m-b-0 white-text">Hero Title</p>
            <p class="video-heading-delta m-b-0 white-text">Sub Content</p>
          </a>
        </div>
      </div>
    </div>

<?php $this->end(); ?>

<?php $this->start('css-include'); ?>
<?php $this->end(); ?>

<?php $this->start('js-include'); ?>
<?php $this->end(); ?>

<?php $this->start('jquery'); ?>
 <?php $this->end(); ?>
