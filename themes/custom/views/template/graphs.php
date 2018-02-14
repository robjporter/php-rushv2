<?php $this->setSiteTitle('Cards'); ?>

<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
    <a href="index">Back</a><br>

      <div class='progressbar'>
        <div class='progressbar-fill-danger' style='width: 5%'><div class="center-align">5%</div></div>
      </div>
      <div class='progressbar'>
        <div class='progressbar-fill-success' style='width: 10%'><div class="center-align">10%</div></div>
      </div>
      <div class='progressbar'>
        <div class='progressbar-fill-amber' style='width: 15%'><div class="center-align">15%</div></div>
      </div>
      <div class='progressbar'>
        <div class='progressbar-fill-cisco-blue' style='width: 20%'><div class="center-align text-white">20%</div></div>
      </div>
      <div class='progressbar'>
        <div class='progressbar-fill-cream' style='width: 25%'></div>
      </div>
      <div class='progressbar'>
        <div class='progressbar-fill-blue-grey' style='width: 30%'></div>
      </div>
      <div class='progressbar'>
        <div class='progressbar-fill-light-pink' style='width: 35%'></div>
      </div>
      <div class='progressbar'>
        <div class='progressbar-fill-pink' style='width: 40%'></div>
      </div>
      <div class='progressbar'>
        <div class='progressbar-fill-orange' style='width: 45%'></div>
      </div>
      <div class='progressbar'>
        <div class='progressbar-fill-primary' style='width: 50%'></div>
      </div>


<ul class="bar-graph">
  <li class="bar-graph-axis">
    <div class="bar-graph-label">100%</div>
    <div class="bar-graph-label">80%</div>
    <div class="bar-graph-label">60%</div>
    <div class="bar-graph-label">40%</div>
    <div class="bar-graph-label">20%</div>
    <div class="bar-graph-label">0%</div>
  </li>
  <li class="bar primary" style="height: 95%;" title="95">
    <div class="percent">95<span>%</span></div>
    <div class="description">Yetis</div>
  </li>
  <li class="bar secondary" style="height: 90%;" title="90">
    <div class="percent">90<span>%</span></div>
    <div class="description">ZURBians</div>
  </li>
  <li class="bar success" style="height: 80%;" title="80">
    <div class="percent">80<span>%</span></div>
    <div class="description">Cows</div>
  </li>
  <li class="bar warning" style="height: 75%;" title="75">
    <div class="percent">75<span>%</span></div>
    <div class="description">Cows that think they're Yetis</div>
  </li>
  <li class="bar alert" style="height: 40%;" title="40">
    <div class="percent">40<span>%</span></div>
    <div class="description">Who knows</div>
  </li>
</ul>

<?php $this->end(); ?>

<?php $this->start('css-include'); ?>
<?php $this->end(); ?>

<?php $this->start('js-include'); ?>
<?php $this->end(); ?>

<?php $this->start('jquery'); ?>
 <?php $this->end(); ?>
