<?php $this->setSiteTitle('Images'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
    <a href="index">Back</a><br>

    <h5>Bezel</h5>
    <div class="row">
      <div class="col s2 m2 l2">
        <div class="imagebezel">
          <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img" style="width:200px;">
        </div>
      </div>
      <div class="col s2 m2 l2">
        <div class="imagebezel-5">
          <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img" style="width:200px;">
        </div>
      </div>
      <div class="col s2 m2 l2">
        <div class="imagebezel-10">
          <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img" style="width:200px;">
        </div>
      </div>
      <div class="col s2 m2 l2">
        <div class="imagebezel-15">
          <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img" style="width:200px;">
        </div>
      </div>
      <div class="col s2 m2 l2">
        <div class="imagebezel-20">
          <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img" style="width:200px;">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s2 m2 l2">
        <div class="imagebezel-25">
          <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img" style="width:200px;">
        </div>
      </div>
      <div class="col s2 m2 l2">
        <div class="imagebezel-30">
          <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img" style="width:200px;">
        </div>
      </div>
      <div class="col s2 m2 l2">
        <div class="imagebezel-35">
          <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img" style="width:200px;">
        </div>
      </div>
      <div class="col s2 m2 l2">
        <div class="imagebezel-40">
          <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img" style="width:200px;">
        </div>
      </div>
      <div class="col s2 m2 l2">
        <div class="imagebezel-45">
          <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img" style="width:200px;">
        </div>
      </div>
      <div class="col s2 m2 l2">
        <div class="imagebezel-50">
          <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img" style="width:200px;">
        </div>
      </div>
    </div>

    <h5>Images</h5>
    <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img circle w200">
    <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img circle w400">
    <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img circle w600">
    <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img circle w800">
    <img src="<?=PATH_IMGS?>/photo.jpg" alt="" class="responsive-img circle">

    <h1>Floating Images</h1>
    <div class="row">
      <img src="<?=PATH_IMGS?>300x200.png" alt="" class="img-right">
      <img src="<?=PATH_IMGS?>300x200.png" alt="" class="img-left">
      <img src="<?=PATH_IMGS?>300x200.png" alt="" class="img-center">
    </div>

    <h5>Materlize boxed</h5>
    <img src="<?=PATH_IMGS?>sample-1.jpg" alt="" class="materialboxed" data-caption="Image caption">

    <h5>Placeholders</h5>
    <img class='placeholder font-8' width='64px' height='64px' title='Placeholder1'/><br><br>
    <img class='placeholder font-8' width='90px' height='90px' title='Placeholder1'/><br><br>
    <img class='placeholder font-14' width='100px' height='50px' title='Placeholder1'/><br><br>
    <img class='placeholder font-32' width='250px' height='200px' title='Placeholder1'/><br><br>
    <img class='placeholder font-48' width='400px' height='200px' title='Placeholder1'/><br><br>
    <img class='placeholder font-56' width='100%' height='200px' title='Placeholder1'/><br><br>


<?php $this->end(); ?>
<?php $this->start('js-script'); ?>
<?php $this->end(); ?>
