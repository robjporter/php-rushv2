<?php $this->setSiteTitle('Forms'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
    <a href="index">Back</a><br>

    <h5>Custom command highlighter</h5>
    <div class="row">
      <div class="m-l-100 m-r-100">
        <div class="code-snippet">
      		<input class="code-snippet-input"  value="sudo apt-get update" readonly="readonly"/>
      		<button class="code-snippet-action">Copy to clipboard</button>
        </div>
      </div>
    </div>

    <h5>Custom radio - <i class="font-12">custom-input-wrap orange-radio radio</i></h5>
    <div class="row">
      <div class="custom-radio w10 h10">
        <label>
          <input type="radio" name="radio-option" checked="">
          <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <circle class="outer-circle" cx="50" cy="50" r="40" fill="transparent"></circle>
            <line x1="50" y1="50" x2="50" y2="50" class="inner-circle"></line>
          </svg>
        </label>
      </div>
      <div class="custom-radio w20 h20">
        <label>
            <input type="radio" name="radio-option">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <circle class="outer-circle" cx="50" cy="50" r="40" fill="transparent"></circle>
              <line x1="50" y1="50" x2="50" y2="50" class="inner-circle"></line>
            </svg>
          </label>
      </div>
      <div class="custom-radio w30 h30">
          <label>
            <input type="radio" name="radio-option">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <circle class="outer-circle" cx="50" cy="50" r="40" fill="transparent"></circle>
              <line x1="50" y1="50" x2="50" y2="50" class="inner-circle"></line>
            </svg>
          </label>
      </div>
      <div class="custom-radio w40 h40">
          <label>
            <input type="radio" name="radio-option">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <circle class="outer-circle" cx="50" cy="50" r="40" fill="transparent"></circle>
              <line x1="50" y1="50" x2="50" y2="50" class="inner-circle"></line>
            </svg>
          </label>
      </div>
      <div class="custom-radio w50 h50">
          <label>
            <input type="radio" name="radio-option">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <circle class="outer-circle" cx="50" cy="50" r="40" fill="transparent"></circle>
              <line x1="50" y1="50" x2="50" y2="50" class="inner-circle"></line>
            </svg>
          </label>
      </div>
    </div>


    <h5>Custom radio - <i class="font-12">custom-input-wrap orange-radio radio</i></h5>
    <div class="row">
      <div class="custom-radio custom-radio-cisco-blue">
        <label>
          <input type="radio" name="radio-option" checked="">
          <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <circle class="outer-circle" cx="50" cy="50" r="40" fill="transparent"></circle>
            <line x1="50" y1="50" x2="50" y2="50" class="inner-circle"></line>
          </svg>
        </label>
      </div>
      <div class="custom-radio custom-radio-danger">
        <label>
            <input type="radio" name="radio-option">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <circle class="outer-circle" cx="50" cy="50" r="40" fill="transparent"></circle>
              <line x1="50" y1="50" x2="50" y2="50" class="inner-circle"></line>
            </svg>
          </label>
      </div>
      <div class="custom-radio custom-radio-success">
          <label>
            <input type="radio" name="radio-option">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <circle class="outer-circle" cx="50" cy="50" r="40" fill="transparent"></circle>
              <line x1="50" y1="50" x2="50" y2="50" class="inner-circle"></line>
            </svg>
          </label>
      </div>
      <div class="custom-radio custom-radio-warning">
          <label>
            <input type="radio" name="radio-option">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <circle class="outer-circle" cx="50" cy="50" r="40" fill="transparent"></circle>
              <line x1="50" y1="50" x2="50" y2="50" class="inner-circle"></line>
            </svg>
          </label>
      </div>
      <div class="custom-radio custom-radio-primary">
          <label>
            <input type="radio" name="radio-option">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <circle class="outer-circle" cx="50" cy="50" r="40" fill="transparent"></circle>
              <line x1="50" y1="50" x2="50" y2="50" class="inner-circle"></line>
            </svg>
          </label>
      </div>
      <div class="custom-radio custom-radio-info">
          <label>
            <input type="radio" name="radio-option">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <circle class="outer-circle" cx="50" cy="50" r="40" fill="transparent"></circle>
              <line x1="50" y1="50" x2="50" y2="50" class="inner-circle"></line>
            </svg>
          </label>
      </div>
    </div>

    <h5>Custom Checkbox - <i class="font-12">orange-checkbox checkbox custom-input-wrap</i></h5>
    <div class="row">
      <div class="custom-checkbox w10 h10">
          <label>
            <input type="checkbox">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <path class="check" d="M 25 55 C 25 100, 65 55, 85 10" fill="transparent"></path>
              <path class="border" d="M 0 0 L 100 0 L 100 100 L 0 100 L 0 0" fill="transparent"></path>
            </svg>
          </label>
      </div>
      <div class="custom-checkbox w20 h20">
          <label>
            <input type="checkbox">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <path class="check" d="M 25 55 C 25 100, 65 55, 85 10" fill="transparent"></path>
              <path class="border" d="M 0 0 L 100 0 L 100 100 L 0 100 L 0 0" fill="transparent"></path>
            </svg>
          </label>
        </div>
      <div class="custom-checkbox w30 h30">
          <label>
            <input type="checkbox">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <path class="check" d="M 25 55 C 25 100, 65 55, 85 10" fill="transparent"></path>
              <path class="border" d="M 0 0 L 100 0 L 100 100 L 0 100 L 0 0" fill="transparent"></path>
            </svg>
          </label>
      </div>
      <div class="custom-checkbox w40 h40">
          <label>
            <input type="checkbox">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <path class="check" d="M 25 55 C 25 100, 65 55, 85 10" fill="transparent"></path>
              <path class="border" d="M 0 0 L 100 0 L 100 100 L 0 100 L 0 0" fill="transparent"></path>
            </svg>
          </label>
      </div>
      <div class="custom-checkbox w50 h50">
          <label>
            <input type="checkbox">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <path class="check" d="M 25 55 C 25 100, 65 55, 85 10" fill="transparent"></path>
              <path class="border" d="M 0 0 L 100 0 L 100 100 L 0 100 L 0 0" fill="transparent"></path>
            </svg>
          </label>
      </div>
    </div>

    <h5>Custom Checkbox - <i class="font-12">orange-checkbox checkbox custom-input-wrap</i></h5>
    <div class="row">
      <div class="custom-checkbox custom-checkbox-cisco-blue">
          <label>
            <input type="checkbox">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <path class="check" d="M 25 55 C 25 100, 65 55, 85 10" fill="transparent"></path>
              <path class="border" d="M 0 0 L 100 0 L 100 100 L 0 100 L 0 0" fill="transparent"></path>
            </svg>
          </label>
      </div>
      <div class="custom-checkbox custom-checkbox-danger">
          <label>
            <input type="checkbox">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <path class="check" d="M 25 55 C 25 100, 65 55, 85 10" fill="transparent"></path>
              <path class="border" d="M 0 0 L 100 0 L 100 100 L 0 100 L 0 0" fill="transparent"></path>
            </svg>
          </label>
        </div>
      <div class="custom-checkbox custom-checkbox-success">
          <label>
            <input type="checkbox">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <path class="check" d="M 25 55 C 25 100, 65 55, 85 10" fill="transparent"></path>
              <path class="border" d="M 0 0 L 100 0 L 100 100 L 0 100 L 0 0" fill="transparent"></path>
            </svg>
          </label>
      </div>
      <div class="custom-checkbox custom-checkbox-warning">
          <label>
            <input type="checkbox">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <path class="check" d="M 25 55 C 25 100, 65 55, 85 10" fill="transparent"></path>
              <path class="border" d="M 0 0 L 100 0 L 100 100 L 0 100 L 0 0" fill="transparent"></path>
            </svg>
          </label>
      </div>
      <div class="custom-checkbox custom-checkbox-primary">
          <label>
            <input type="checkbox">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <path class="check" d="M 25 55 C 25 100, 65 55, 85 10" fill="transparent"></path>
              <path class="border" d="M 0 0 L 100 0 L 100 100 L 0 100 L 0 0" fill="transparent"></path>
            </svg>
          </label>
      </div>
      <div class="custom-checkbox custom-checkbox-info">
          <label>
            <input type="checkbox">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <path class="check" d="M 25 55 C 25 100, 65 55, 85 10" fill="transparent"></path>
              <path class="border" d="M 0 0 L 100 0 L 100 100 L 0 100 L 0 0" fill="transparent"></path>
            </svg>
          </label>
      </div>
    </div>




    <h5>Custom Checkbox</h5>
    <form action="#">
    <p>
      <label>
        <input type="checkbox" />
        <span>Red</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" checked="checked" />
        <span>Yellow</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>Filled in</span>
      </label>
    </p>
    <p>
      <label>
        <input id="indeterminate-checkbox" type="checkbox" />
        <span>Indeterminate Style</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" checked="checked" disabled="disabled" />
        <span>Green</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" disabled="disabled" />
        <span>Brown</span>
      </label>
    </p>
  </form>

    <h5>Switch - <i class="font-12">switch</i></h5>
    <div class="switch">
      <label>
        Off
        <input type="checkbox">
        <span class="lever"></span>
        On
      </label>
    </div>

    <h5>Range field - <i class="font-12">range-field</i></h5>
    <form action="#">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="100" />
      </p>
    </form>

    <h5>Pagination</h5>
    <ul class="pagination">
      <li class="disabled"><a href=""><i class="material-icons">chevron_left</i></a></li>
      <li class="active"><a href="#">1</a></li>
      <li class="waves-effect"><a href="#">2</a></li>
      <li class="waves-effect"><a href="#">3</a></li>
      <li class="waves-effect"><a href="#">4</a></li>
      <li class="waves-effect"><a href="#">5</a></li>
      <li class="waves-effect"><a href="#">6</a></li>
      <li class="disabled"><a href=""><i class="material-icons">chevron_right</i></a></li>
    </ul>

    <h5>Dropdown</h5>
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content m-t-40" style="">
      <li><a href="#!">one</a></li>
      <li><a href="#!">two</a></li>
      <li class="divider"></li>
      <li><a href="#!">three</a></li>
      <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
      <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
      <li><a href="#!">one<span class="badge">1</span></a></li>
      <li><a href="#!">two<span class="new badge">1</span></a></li>
      <li><a href="#!">three</a></li>
    </ul>
    <a class="btn dropdown-trigger" href="#!" data-target="dropdown2">Dropdown<i class="material-icons right">arrow_drop_down</i></a>
    <a class="btn dropdown-trigger" href="#!" data-target="dropdown1">Drop Me!<i class="material-icons right">arrow_drop_down</i></a>


    <h5>Custom HR</h5>
    <div class="row">
      <h6>Divider 1</h6>
      <div class="hr-divider"></div><br>
      <h6>Divider 1</h6>
      <div class="hr-divider hr-divider-left p-a-20 m-l-10">Divider on the left.</div>
      <h6>Divider 2</h6>
      <div class="hr-divider hr-divider-right p-a-20 m-r-10">Divider on the right.</div>
      <div class="hr-white"></div><br>
      <div class="hr-black-cream"></div><br>
      <div class="hr-cream"></div><br>
      <div class="hr-red"></div><br>
      <div class="hr-cisco-blue"></div><br>
      <div class="hr-cyan"></div><br>
      <div class="hr-green"></div><br>
      <div class="hr-orange"></div><br>
      <div class="hr-blue"></div><br>
      <div class="hr-blue-grey"></div><br>
      <div class="hr-pink"></div><br>
      <div class="hr-light-blue"></div><br>
      <div class="hr-light-green"></div><br>
      <div class="hr-pale-green"></div><br>
      <div class="hr-amber"></div><br>
      <div class="hr-indigo"></div><br>
      <div class="hr-purple"></div><br>
      <div class="hr-deep-purple"></div><br>
      <div class="hr-dark-grey"></div><br>
      <div class="hr-grey"></div><br>
      <div class="hr-light-pink"></div><br>
    </div>

    <h5>Custom HR2</h5>
    <div class="row">
      <div class="dhr-1"></div><br>
        <div class="dhr-2"></div><br>
          <div class="dhr-3"></div><br>
            <div class="dhr-4"></div><br>
              <div class="dhr-5"></div><br>
                <div class="dhr-6"></div><br>
                  <div class="dhr-7 text-pink"></div><br>
                    <div class="dhr-8 text-cisco-blue"></div><br>
    </div>

    <h5>Forms</h5>
    <form>
      <div class="input-field">
        <input type="text" id="name">
        <label for="name">Name</label>
      </div>
      <div class="input-field">
        <input type="email" id="email" class="validate">
        <label for="email">Email</label>
      </div>
      <div class="input-field">
        <textarea type="email" id="textarea" class="materialize-textarea"></textarea>
        <label class="active" for="textarea">Textarea</label>
      </div>
    </form>

    <h5>Chips</h5>
    <div class="chip">
      Tag 1<i class="close material-icons">close</i>
    </div>
    <div class="chip">
      Tag 2<i class="close material-icons">close</i>
    </div>
    <div class="chip">
      <img src="/lab0/imgs/custom/img_avatar0.png" alt="Contact Person">
      Jane Doe
    </div>
    <div class="chip">
      <img src="/lab0/imgs/custom/img_avatar0.png" alt="Contact Person">
      Jane Doe<i class="close material-icons">close</i>
    </div>

<?php $this->end(); ?>
<?php $this->start('js-script'); ?>
<?php $this->end(); ?>
<?php $this->start('jquery'); ?>
$('.dropdown-trigger').dropdown();
<?php $this->end(); ?>
