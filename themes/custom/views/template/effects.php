<?php $this->setSiteTitle('Effects'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
    <a href="index">Back</a><br>

    <div class="row">
      <h1>Time & Date</h1>
      <h1 class="animated fadeInLeft">21:00</h1>
      <p class="animated fadeInRight">Sat,October 1st 2029</p>
    </div>

    <h5>Hover</h5>
    <div class="red white-text hoverable">hoverable content</div>
    <div class="blue white-text pulse">pulse content</div>
    <p class="z-depth-1">z-depth-1</p>
    <p class="z-depth-2">z-depth-2</p>
    <p class="z-depth-3">z-depth-3</p>
    <p class="z-depth-4">z-depth-4</p>
    <p class="z-depth-5">z-depth-5</p>


    <h5>Waves</h5>
    <div class="collection waves-color-demo">
        <div class="collection-item">Default<a href="#!" class="waves-effect btn secondary-content white black-text">Send</a></div>
        <div class="collection-item"><code class="language-markup">waves-light</code><a href="#!" class="waves-effect waves-light btn secondary-content">Send</a></div>
        <div class="collection-item"><code class="language-markup">waves-red</code><a href="#!" class="waves-effect waves-red btn white black-text secondary-content">Send</a></div>
        <div class="collection-item"><code class="language-markup">waves-yellow</code><a href="#!" class="waves-effect waves-yellow btn white black-text secondary-content">Send</a></div>
        <div class="collection-item"><code class="language-markup">waves-orange</code><a href="#!" class="waves-effect waves-orange btn white black-text secondary-content">Send</a></div>
        <div class="collection-item"><code class="language-markup">waves-purple</code><a href="#!" class="waves-effect waves-purple btn white black-text secondary-content">Send</a></div>
        <div class="collection-item"><code class="language-markup">waves-green</code><a href="#!" class="waves-effect waves-green btn white black-text secondary-content">Send</a></div>
        <div class="collection-item"><code class="language-markup">waves-teal</code><a href="#!" class="waves-effect waves-teal btn white black-text secondary-content">Send</a></div>
    </div>

    <h1>Transitions</h1>
    <ul id="staggered-test">
      <li style="opacity:0">
        <h5><a href="#">List Item 1</a></h5>
        <p>This is a description</p>
      </li>
      <li style="opacity:0">
        <h5><a href="#">List Item 2</a></h5>
        <p>This is a description</p>
      </li>
      <li style="opacity:0">
        <h5><a href="#">List Item 3</a></h5>
        <p>This is a description</p>
      </li>
      <li style="opacity:0">
        <h5><a href="#">List Item 4</a></h5>
        <p>This is a description</p>
      </li>
      <li style="opacity:0">
        <h5><a href="#">List Item 5</a></h5>
        <p>This is a description</p>
      </li>
    </ul>
    <img id="image-test" class="responsive-img pt-3" src="<?=PATH_IMGS?>20.png" style="opacity: 0;">

    <a href="#!" class="btn" onclick="Materialize.showStaggeredList('#staggered-test')">Click Me - List</a>
    <a href="#!" class="btn" onclick="Materialize.fadeInImage('#image-test')">Click Me - Image</a>


<?php $this->end(); ?>
<?php $this->start('js-script'); ?>
<?php $this->end(); ?>
