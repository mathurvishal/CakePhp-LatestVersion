
<!DOCTYPE html>
<html>
<head>
   
    <title>
        <?= $title; ?>
    </title>
</head>
<body>
    
  <?php echo $this->element('header'); ?> 
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <?= $this->element('footer'); ?> 
</body>
</html>
