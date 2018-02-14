<?php $this->setSiteTitle('Layouts'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
    <a href="index">Back</a><br>

    <h5>Example Promotion Table</h5>
    <p>If we want 3 divs that are equal size, we define the divs with a width of 4-columns, as 4+4+4 nicely adds up to 12. Inside those divs, we can put our content. Take our front page content for example. We've modified it slightly for the sake of this example.</p>
    <div class="container"><div class="row">
      <div class="col s4">
        <div class="center">
          <i class="material-icons md-96 deep-orange-text">flash_on</i>
          <p class="font-bold font-24">Speeds up development</p>
          <p class="font-light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
        </div>
      </div>
      <div class="col s4">
        <div class="center">
          <i class="material-icons md-96 deep-orange-text">group</i>
          <p class="font-bold font-24">User Experience Focused</p>
          <p class="font-light center">By utilizing elements and principles of Material Design, we were able to create a framework that focuses on User Experience.</p>
        </div>
      </div>
      <div class="col s4">
        <div class="center">
          <i class="material-icons md-96 deep-orange-text">settings</i>
          <p class="font-bold font-24">Easy to work with</p>
          <p class="font-light center">We have provided detailed documentation as well as specific code examples to help new users get started.</p>
        </div>
      </div>
    </div>
  </div>


  <h5>Collapsible</h5>
  <ul class="collapsible" data-collapse="accordian">
    <li>
      <div class="collapsible-header">
        <i class="material-icons">filter_drama</i>First
      </div>
      <div class="collapsible-body">
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
        <i class="material-icons">filter_drama</i>Second
      </div>
      <div class="collapsible-body">
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
        <i class="material-icons">filter_drama</i>Third
      </div>
      <div class="collapsible-body">
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
      </div>
    </li>
  </ul>

  <h5>Collections</h5>
  <div class="container">
    <h1>Collections List</h1>
    <ul class="collection">
      <li class="collection-item">Item 1</li>
      <li class="collection-item">Item 2</li>
      <li class="collection-item">Item 3</li>
      <li class="collection-item">Item 4</li>
    </ul>
    <ul class="collection">
      <a href="" class="collection-item">Link 1</a>
      <a href="" class="collection-item">Link 2</a>
      <a href="" class="collection-item">Link 3</a>
      <a href="" class="collection-item">Link 4</a>
    </ul>
    <ul class="collection-with-header">
      <li class="collection-item"><h4>Header</h4></li>
      <li class="collection-item">Item 1</li>
      <li class="collection-item">Item 2</li>
      <li class="collection-item">Item 3</li>
      <li class="collection-item">Item 4</li>
    </ul>
    <ul class="collection">
      <li class="collection-item avatar">
        <i class="material-icons circle">folder</i>
        <span class="title">Title</span>
        <p>First Line<br>Second Line</p>
        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      </li>
      <li class="collection-item avatar">
        <i class="material-icons circle green">insert_chart</i>
        <span class="title">Title</span>
        <p>First Line<br>Second Line</p>
        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      </li>
      <li class="collection-item avatar">
        <i class="material-icons circle red">play_arrow</i>
        <span class="title">Title</span>
        <p>First Line<br>Second Line</p>
        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      </li>
    </ul>
  </div>

<?php $this->end(); ?>

<?php $this->start('css-include'); ?>
<?php $this->end(); ?>

<?php $this->start('js-include'); ?>
<?php $this->end(); ?>

<?php $this->start('jquery'); ?>
$('.collapsible').collapsible();
<?php $this->end(); ?>
