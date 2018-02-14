<?php $this->setSiteTitle('Navigation'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
    <a href="index">Back</a><br>

    <h5>Tabs</h5>
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a href="#test1">Test 1</a></li>
          <li class="tab col s3"><a href="#test2">Test 2</a></li>
          <li class="tab col s3"><a href="#test3">Test 3</a></li>
          <li class="tab col s3"><a href="#test4">Test 4</a></li>
        </ul>
      </div>
      <div id="test1" class="col s12">Test 1</div>
      <div id="test2" class="col s12">Test 2</div>
      <div id="test3" class="col s12">Test 3</div>
      <div id="test4" class="col s12">Test 4</div>
    </div>

    <h5>nav</h5>
    <nav>
      <div class="nav-wrapper blue">
        <a href="" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </nav>
    <br><br>
    <nav>
      <div class="nav-wrapper red">
        <a href="" class="brand-logo right">Logo</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </nav>
    <br><br>
    <nav>
      <div class="nav-wrapper green">
        <a href="" class="brand-logo center">Logo</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </nav>
    <br><br>
    <nav>
      <div class="nav-wrapper purple">
        <a href="" class="brand-logo center">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </nav>
    <br><br>
    <ul id="dropdown1" class="dropdown-content" style="margin-top:65px;">
      <li><a href="#!">One</a></li>
      <li><a href="#!">Two</a></li>
      <li class="divider"></li>
      <li><a href="#!">Three</a></li>
    </ul>
    <nav>
      <div class="nav-wrapper green">
        <a href="" class="brand-logo center">Logo</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="" class="dropdown-button" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </nav>
    <br><br>
    <nav>
      <div class="nav-wrapper black">
        <a href="" class="brand-logo right">Logo</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="#"><i class="material-icons">search</i></a></li>
          <li><a href="#"><i class="material-icons left">refresh</i>Link with left icon</a></li>
          <li><a class="waves-effect waves-light btn">Button</a></li>
        </ul>
      </div>
    </nav>

    <h5>Search bar</h5>
    <nav>
      <div class="nav-wrapper">
        <form>
          <div class="input-field">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>
      </div>
    </nav>

    <h5>Breadcrumbs</h5>
    <nav>
      <div class="nav-wrapper">
        <div class="col s12">
          <a href="" class="breadcrumb">First</a>
          <a href="" class="breadcrumb">Second</a>
          <a href="" class="breadcrumb">Third</a>
          <a href="" class="breadcrumb">Fourth</a>
        </div>
      </div>
    </nav>

    <!-- Element Showed -->
    <a class="waves-effect waves-light btn" onclick="$('.tap-target').featureDiscovery('open')">Open tap target</a>
    <a class="waves-effect waves-light btn" onclick="$('.tap-target').featureDiscovery('close')">Close tap target</a>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a id="menu" class="btn btn-floating btn-large cyan"><i class="material-icons">menu</i></a>
    </div>

    <div class="tap-target cyan" data-target="menu">
      <div class="tap-target-content white-text">
        <h5>I am here</h5>
        <p class="white-text">Provide value and encourage return visits by introducing users to new features and functionality at contextually relevant moments.</p>
      </div>
    </div>

<?php $this->end(); ?>
<?php $this->start('js-script'); ?>
<?php $this->end(); ?>
<?php $this->start('jquery'); ?>
$('ul.tabs').tabs();
$('.tap-target').featureDiscovery();
<?php $this->end(); ?>
