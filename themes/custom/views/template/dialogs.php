<?php $this->setSiteTitle('Dialogs'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
    <a href="index">Back</a><br>

    <a class="btn" onclick="M.toast({html:'I am a toast'}, 4000)">Toast!</a>
    <a class="waves-effect waves-light btn" onclick="M.toast({html: 'I am a toast!', classes: 'rounded'});">Round Toast!</a>
    <a class="waves-effect waves-light btn" onclick="displayCustomHTMLToast()">Toast with Action</a>
    <a class="btn" onclick="M.toast({html: 'I am a toast', completeCallback: function(){alert('Your toast was dismissed')}})">Toast with callback!</a>

    <h5>Modal</h5>
    <a href="#modal1" class="btn waves-effect modal-trigger">Modal 1</a>
    <a href="#modal2" class="btn waves-effect red modal-trigger">Modal 2</a>

    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Modal 1 Header</h4>
        <p>A bunch of text</p>
      </div>
      <div class="modal-footer">
        <a href="" class="modal-action modal-close waves-effect waves-green">Button</a>
      </div>
    </div>
    <div id="modal2" class="modal">
      <div class="modal-content">
        <h4>Modal 2 Header</h4>
        <p>A bunch of text</p>
      </div>
      <div class="modal-footer">
        <a href="" class="modal-action modal-close waves-effect waves-green">Button</a>
      </div>
    </div>

<?php $this->end(); ?>
<?php $this->start('js-script'); ?>
var displayCustomHTMLToast = function () {
  var toastHTML = '<span>I am toast content</span><button class="btn-flat toast-action">Undo</button>';
M.toast({html: toastHTML});
    }
<?php $this->end(); ?>
<?php $this->start('jquery'); ?>
$('.modal').modal();
<?php $this->end(); ?>
