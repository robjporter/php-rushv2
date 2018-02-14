<?php $this->setSiteTitle('Typography'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
    <a href="index">Back</a><br>

    <h5>Text Formatting</h5>
    <div class="row">
      <p class="font-capitalise">tesTING</p>
      <p class="font-lowercase">TESting</p>
      <p class="font-uppercase">testing</p>
    </div>

    <h5>Text Shadowing</h5>
    <div class="row">
      <p class="text-shadow">Shadow</p>
      <p class="text-shadow-1">Shadow 1</p>
      <p class="text-shadow-2">Shadow 2</p>
      <p class="text-shadow-3">Shadow 3</p>
      <p class="text-shadow-4">Shadow 4</p>
    </div>

    <h5>Video text shadow</h5>
    <div class="row">
      <p class="text-shadow font-36 white-text">Hero Title</p>
    </div>


    <h5>Video text shadow</h5>
    <div class="row">
      <a href="#" class="link-back">This is a back link</a>
    </div>
    <div class="row">
      <a href="#" class="link-forward">This is a forward link</a>
    </div>

    <h5>Border ring</h5>
    <div class="row">
      <div><i class="material-icons borderring-0 red-text border-red">lock</i></div>
      <div><i class="material-icons borderring-5">lock</i></div>
      <div><i class="material-icons borderring-10">lock</i></div>
      <div><i class="material-icons borderring-15">lock</i></div>
      <div><i class="material-icons borderring-20 red-text border-red">lock</i></div>
    </div>

    <h5>Blockquote</h5>
    <div class="row">
      <blockquote>
        This is an example quotation that uses the blockquote tag.
      </blockquote>
    </div>

    <h5>Flow Text</h5>
    <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <h5>Font effects</h5>
    <div class="row">
      <p class="pink-text">Text pink color</p>
      <p class="pink-text font-bold">Font bold</p>
      <p class="pink-text font-italic">Font italic</p>
      <p class="pink-text font-underline">Font underline</p>
      <p class="pink-text font-strike-through">Font strike through</p>
      <p class="pink-text font-overline">Font overline</p>
    </div>

    <h5>Font sizes</h5>
    <div class="row">
      <p class="pink-text font-8">Font 8</p>
      <p class="pink-text font-10">Font 10</p>
      <p class="pink-text font-12">Font 12</p>
      <p class="pink-text font-14">Font 14</p>
      <p class="pink-text font-16">Font 16</p>
      <p class="pink-text font-20">Font 20</p>
      <p class="pink-text font-24">Font 24</p>
      <p class="pink-text font-32">Font 32</p>
      <p class="pink-text font-36">Font 36</p>
      <p class="pink-text font-40">Font 40</p>
      <p class="pink-text font-42">Font 42</p>
      <p class="pink-text font-48">Font 48</p>
      <p class="pink-text font-52">Font 52</p>
      <p class="pink-text font-72">Font 72</p>
      <p class="pink-text font-98">Font 98</p>
    </div>
<?php $this->end(); ?>
<?php $this->start('js-script'); ?>
<?php $this->end(); ?>
