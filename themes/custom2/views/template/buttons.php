<?php $this->setSiteTitle('Buttons'); ?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
  <a href="index">Back</a>

  <div class="row">
    <div class="col">
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button class="btn btn-sm btn-outline-secondary">Share</button>
          <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar"></span>
          This week
        </button>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </div>
  </div>
<?php $this->end(); ?>
<?php $this->start('js-script'); ?>
<?php $this->end(); ?>
<?php $this->start('jquery'); ?>
<?php $this->end(); ?>
