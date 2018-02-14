<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?=SITE_DESCRIPTION;?>">
    <meta name="keywords" content="<?=SITE_KEYWORDS;?>">
    <meta name="author" content="<?=SITE_AUTHOR;?>">
    <meta name="revisit-after" content="30 days">
    <meta name="distribution" content="web">
    <meta name="Robots" content="index,follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->

    <!-- CORE CSS-->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet prefetch">
    <link href="<?=PATH_CSS?>bootstrap.min.css" rel="stylesheet" media="screen" title="no title">
    <link href="<?=PATH_CSS?>normalize.min.css" rel="stylesheet" media="screen" title="no title">
    <link href="<?=PATH_CSS?>custom.min.css" rel="stylesheet" media="screen" title="no title">

    <title><?= $this->siteTitle();?></title>

        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <?= $this->content('css-include');?>

        <!-- INCLUDED PLUGIN HEADER ELEMENTS ON THIS PAGE -->
        <?= $this->content('head');?>
  </head>
  <body>
    <div class="wrapper m-a-0">
      <div class="header m-a-0">
        <?php include 'main_menu.php'; ?>
      </div>
      <div class="content m-a-0">
        <?= $this->content('body');?>
      </div>
      <div class="footer m-a-0">
        <?php include 'footer.php'; ?>
      </div>
    </div>
    <script src="<?=PATH_JAVA?>jquery.min.js"></script>
    <script src="<?=PATH_JAVA?>bootstrap.min.js"></script>

    <!-- INCLUDED PLUGIN JS ON THIS PAGE -->
    <?= $this->content('js-include');?>

    <!-- INCLUDED PLUGIN JAVASCRIPT ON THIS PAGE -->
    <script>
      <?= $this->content('js-script');?>
    </script>

    <!-- INCLUDED PLUGIN JQUERY ON THIS PAGE -->
    <script>
      $(document).ready(function(){
        <?= $this->content('jquery');?>
      });
    </script>
  </body>
</html>
