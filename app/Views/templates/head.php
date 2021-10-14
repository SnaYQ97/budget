<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="SnaYQ">
  <!-- DYNAMIC Title from viewdata -->
  <title><?php if( isset($title)) {echo $title;} ?> </title>

  <!-- DYNAMIC CSS -->
  <?php if( isset($styles) && is_array($styles) ) : ?>
    <?php foreach( $styles as $style ) : ?>
      <link href=<?=base_url("$style")?> rel="stylesheet" type="text/css">
    <?php endforeach; ?>
  <?php endif; ?>
   <!-- DYNAMIC JS -->
  <?php if( isset($scripts) && is_array($scripts) ) : ?>
   <?php foreach( $scripts as $script ) : ?>
     <script src=<?=base_url("$script")?>></script>
    <?php endforeach; ?>
  <?php endif; ?>
   <!-- DYNAMIC DEFER JS -->
  <?php if( isset($defers) && is_array($defers) ) : ?>
    <?php foreach( $defers as $defer ) : ?>
      <script defer src=<?=base_url("$defer")?>></script>
    <?php endforeach; ?>
  <?php endif; ?>
  
</head>
<body>
    
