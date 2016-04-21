<a class="anchor" name="mysql"></a>
<div class="row">
  <div class="col-lg-12">
    <h1><img src="<?php echo $neardHomepage->getResourcesUrl() . '/img/mysql.png'; ?>" /> MySQL <small></small></h1>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="list-group">
      <span class="list-group-item mysql-checkport">
        <span class="loader" style="float:right"><img src="<?php echo $neardHomepage->getResourcesUrl() . '/img/loader.gif'; ?>" /></span>
        <i class="fa fa-bar-chart-o"></i> <?php echo $neardLang->getValue(Lang::STATUS); ?>
      </span>
      <span class="list-group-item mysql-versions">
        <span class="loader" style="float:right"><img src="<?php echo $neardHomepage->getResourcesUrl() . '/img/loader.gif'; ?>" /></span>
        <i class="fa fa-puzzle-piece"></i> <?php echo $neardLang->getValue(Lang::VERSIONS); ?>
      </span>
    </div>
  </div>
</div>