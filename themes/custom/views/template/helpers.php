<?php $this->setSiteTitle('Helpers'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
    <a href="index">Back</a><br>

    <h5>Alignment</h5>
    <div><h5 class="left-align">This aligns to the left</h5></div>
    <div><h5 class="right-align">This aligns to the right</h5></div>
    <div><h5 class="center-align">This aligns to the center</h5></div>
    <pre>
      <br />
      &lt;div&gt;&lt;h5 class="left-align"&gt;This aligns to the left&lt;/h5&gt;&lt;/div&gt;<br />
      &lt;div&gt;&lt;h5 class="right-align"&gt;This aligns to the right&lt;/h5&gt;&lt;/div&gt;<br />
      &lt;div&gt;&lt;h5 class="center-align"&gt;This aligns to the center&lt;/h5&gt;&lt;/div&gt;
    </pre>

    <h5>Floating</h5>
    <div class="left">Left</div>
    <div class="right">Right</div>
    <div class="clearfix"></div>
    <pre>
      <br />
      &lt;div class="left"&gt;Left&lt;/div&gt;<br />
      &lt;div class="right"&gt;Right&lt;/div&gt;<br />
      &lt;div class="clearfix"&gt;&lt;/div&gt;
    </pre>

    <h5>Hide</h5>
    <div class="hide">Hidden for all devices</div>
    <div class="hide-on-small-only">Hidden for mobile devices</div>
    <div class="hide-on-med-only">Hidden for tablets only</div>
    <div class="hide-on-med-down">Hidden for tablets and smaller</div>
    <div class="hide-on-med-and-up">Hidden for tablets and larger</div>
    <div class="hide-on-large-only">Hidden for desktops</div>
    <pre>
      <br />
      &lt;div class="hide"&gt;Hidden for all devices&lt;/div&gt;<br />
      &lt;div class="hide-on-small-only"&gt;Hidden for mobile devices&lt;/div&gt;<br />
      &lt;div class="hide-on-med-only"&gt;Hidden for tablets only&lt;/div&gt;<br />
      &lt;div class="hide-on-med-down"&gt;Hidden for tablets and smaller&lt;/div&gt;<br />
      &lt;div class="hide-on-med-and-up"&gt;Hidden for tablets and larger&lt;/div&gt;<br />
      &lt;div class="hide-on-large-only"&gt;Hidden for desktops&lt;/div&gt;
    </pre>

    <h5>Margins</h5>
    <div class="row">
      <div class="m-l-20">Margin left 20</div>
      <pre>
        <br />
      &lt;div class="m-l-20"&gt;Margin left 20&lt;/div&gt;
      </pre>
    </div>

    <h5>Padding</h5>
    <div class="row">
      <div class="p-l-20">Padding left 20</div>
      <pre>
        <br />
        &lt;div class="p-l-20"&gt;Padding left 20&lt;/div&gt;
      </pre>
    </div>


    <h5>Borders</h5>
    <div class="row">
      <div class="border-left border-1">border-left border-1</div><br>
      <div class="border-left border-2">border-left border-2</div><br>
      <div class="border-left border-3">border-left border-3</div><br>
      <div class="border-left border-4">border-left border-4</div><br>
      <div class="border-left border-5">border-left border-5</div><br>
      <div class="border-left border-6">border-left border-6</div><br>
      <div class="border-left border-7">border-left border-7</div><br>
      <div class="border-left border-8">border-left border-8</div><br>
      <pre>
          <br />
          &lt;div class="border-left border-1"&gt;border-left border-1&lt;/div&gt;<br />
          &lt;div class="border-left border-2"&gt;border-left border-2&lt;/div&gt;<br />
          &lt;div class="border-left border-3"&gt;border-left border-3&lt;/div&gt;<br />
          &lt;div class="border-left border-4"&gt;border-left border-4&lt;/div&gt;<br />
          &lt;div class="border-left border-5"&gt;border-left border-5&lt;/div&gt;<br />
          &lt;div class="border-left border-6"&gt;border-left border-6&lt;/div&gt;<br />
          &lt;div class="border-left border-7"&gt;border-left border-7&lt;/div&gt;<br />
          &lt;div class="border-left border-8"&gt;border-left border-8&lt;/div&gt;
      </pre>

      <div class="border-1 border-radius-1">border-radius-1</div><br>
      <div class="border-1 border-radius-2">border-radius-2</div><br>
      <div class="border-1 border-radius-3">border-radius-3</div><br>
      <div class="border-1 border-radius-4">border-radius-4</div><br>
      <div class="border-1 border-radius-5">border-radius-5</div><br>
      <div class="border-1 border-radius-6">border-radius-6</div><br>
      <div class="border-1 border-radius-7">border-radius-7</div><br>
      <div class="border-1 border-radius-8">border-radius-8</div><br>
      <pre>
        <br />
        &lt;div class="border-1 border-radius-1"&gt;border-radius-1&lt;/div&gt;<br />
        &lt;div class="border-1 border-radius-2"&gt;border-radius-2&lt;/div&gt;<br />
        &lt;div class="border-1 border-radius-3"&gt;border-radius-3&lt;/div&gt;<br />
        &lt;div class="border-1 border-radius-4"&gt;border-radius-4&lt;/div&gt;<br />
        &lt;div class="border-1 border-radius-5"&gt;border-radius-5&lt;/div&gt;<br />
        &lt;div class="border-1 border-radius-6"&gt;border-radius-6&lt;/div&gt;<br />
        &lt;div class="border-1 border-radius-7"&gt;border-radius-7&lt;/div&gt;<br />
        &lt;div class="border-1 border-radius-8"&gt;border-radius-8&lt;/div&gt;
      </pre>

      <div class="border-left border-1">border-left-1</div><br>
      <div class="border-right border-1">border-right-1</div><br>
      <div class="border-top border-1">border-top-1</div><br>
      <div class="border-bottom border-1">border-bottom-1</div><br>
      <div class="border-vertical border-1">border-vertical-1</div><br>
      <div class="border-horizontal border-1">border-horizontal-1</div><br>
      <pre>
        <br />
        &lt;div class="border-left border-1"&gt;border-left-1&lt;/div&gt;<br />
        &lt;div class="border-right border-1"&gt;border-right-1&lt;/div&gt;<br />
        &lt;div class="border-top border-1"&gt;border-top-1&lt;/div&gt;<br />
        &lt;div class="border-bottom border-1"&gt;border-bottom-1&lt;/div&gt;<br />
        &lt;div class="border-vertical border-1"&gt;border-vertical-1&lt;/div&gt;<br />
        &lt;div class="border-horizontal border-1"&gt;border-horizontal-1&lt;/div&gt;
      </pre>

      <div class="border-all border-1">border-all-1</div><br>
      <div class="border-all border-2">border-all-2</div><br>
      <div class="border-all border-3">border-all-3</div><br>
      <div class="border-all border-4">border-all-4</div><br>
      <div class="border-all border-5">border-all-5</div><br>
      <div class="border-all border-6">border-all-6</div><br>
      <div class="border-all border-7">border-all-7</div><br>
      <div class="border-all border-8">border-all-8</div><br>
      <pre>
        <br />
        &lt;div class="border-all border-1"&gt;border-all-1&lt;/div&gt;<br />
        &lt;div class="border-all border-2"&gt;border-all-2&lt;/div&gt;<br />
        &lt;div class="border-all border-3"&gt;border-all-3&lt;/div&gt;<br />
        &lt;div class="border-all border-4"&gt;border-all-4&lt;/div&gt;<br />
        &lt;div class="border-all border-5"&gt;border-all-5&lt;/div&gt;<br />
        &lt;div class="border-all border-6"&gt;border-all-6&lt;/div&gt;<br />
        &lt;div class="border-all border-7"&gt;border-all-7&lt;/div&gt;<br />
        &lt;div class="border-all border-8"&gt;border-all-8&lt;/div&gt;
      </pre>
    </div>

    <h5>Tool tips</h5>
    <a href="" class="btn tooltipped" data-position="top" data-tooltip="i am above." data-delay="50">Hover me</a>
    <a href="" class="btn tooltipped" data-position="right" data-tooltip="i am right.">Hover me</a>
    <a href="" class="btn tooltipped" data-position="bottom" data-tooltip="i am below.">Hover me</a>
    <a href="" class="btn tooltipped" data-position="left" data-tooltip="i am left.">Hover me</a>
    <pre>
      <br />
      &lt;a href="" class="btn tooltipped" data-position="top" data-tooltip="i am above." data-delay="50"&gt;Hover me&lt;/a&gt;<br />
      &lt;a href="" class="btn tooltipped" data-position="right" data-tooltip="i am right."&gt;Hover me&lt;/a&gt;<br />
      &lt;a href="" class="btn tooltipped" data-position="bottom" data-tooltip="i am below."&gt;Hover me&lt;/a&gt;<br />
      &lt;a href="" class="btn tooltipped" data-position="left" data-tooltip="i am left."&gt;Hover me&lt;/a&gt;
    </pre>


    <h5>Preloaders</h5>
    <div class="progress">
      <div class="determinate" style="width:70%;"></div>
    </div>
    <div class="progress">
      <div class="indeterminate"></div>
    </div>
    <pre><br/>
      &lt;div class="progress"&gt;<br />
      &lt;div class="determinate" style="width:70%;"&gt;&lt;/div&gt;<br />
    &lt;/div&gt;<br />
    &lt;div class="progress"&gt;<br />
      &lt;div class="indeterminate"&gt;&lt;/div&gt;<br />
    &lt;/div&gt;
    </pre>


    <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue-only">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div>
        <div class="gap-patch">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
    <pre><br/>
      &lt;div class="preloader-wrapper big active"&gt;<br />
      &lt;div class="spinner-layer spinner-blue-only"&gt;<br />
        &lt;div class="circle-clipper left"&gt;<br />
          &lt;div class="circle"&gt;&lt;/div&gt;<br />
        &lt;/div&gt;<br />
        &lt;div class="gap-patch"&gt;<br />
          &lt;div class="circle"&gt;&lt;/div&gt;<br />
        &lt;/div&gt;<br />
        &lt;div class="circle-clipper right"&gt;<br />
          &lt;div class="circle"&gt;&lt;/div&gt;<br />
        &lt;/div&gt;<br />
      &lt;/div&gt;<br />
    &lt;/div&gt;
    </pre>

<?php $this->end(); ?>
<?php $this->start('js-script'); ?>
<?php $this->end(); ?>
<?php $this->start('jquery'); ?>
$('.tooltipped').tooltip({delay: 50});
<?php $this->end(); ?>
