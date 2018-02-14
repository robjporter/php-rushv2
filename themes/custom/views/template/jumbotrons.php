<?php $this->setSiteTitle('Jumbotrons'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
    <a href="index">Back</a><br>

    <h5>Jumbotrons</h5>
    <div class="row">
      <div class="col s12">
          <div class="jumbotron">
            <h1 class="font-72 m-t-0 m-b-0 font-lightbold">Hello, world!</h1>
            <p class="flow-text">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr>
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
          </div>
      </div>
    </div>


    <div class="row">
      <div class="col s12">
          <div class="jumbotron jumbotron-fluid p-l-10">
              <h1 class="font-72 m-t-0 m-b-0 font-lightbold">Fluid jumbotron</h1>
              <p class="flow-text">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
          </div>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <img src="<?=PATH_IMGS?>300x200.png" alt="" class="img-left m-t-50 m-l-40">
          <div class="jumbotron jumbotron-fluid p-l-10 p-r-20">
            <h1 class="font-72 m-t-0 m-b-0 font-lightbold">Fluid jumbotron</h1>
            <p class="flow-text">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
          </div>
      </div>
    </div>


    <div class="row">
      <div class="col s12">
          <div class="jumbotron purple lighten-4 ">
            <h1 class="font-72 m-t-0 m-b-0 font-lightbold">Hello, world!</h1>
            <p class="flow-text">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr>
            <p class="font-semibold">It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn purple lighten-2 btn-lg" href="#" role="button">Learn more</a>
          </div>
      </div>
    </div>

<?php $this->end(); ?>
<?php $this->start('js-script'); ?>
<?php $this->end(); ?>
