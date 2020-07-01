<!doctype html>
<html class="no-js" lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title><?php echo $title ?></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
    </head>
    <body>
      <div class="ui tiny menu">
          <a class="active item">
            Home
          </a>
          <div class="right menu">
            <?php if ($this->session->userdata('nama') === NULL) {?>
            <div class="item">
                <a class="ui primary button" href="<?php echo base_url()?>Auth">Log In</div>
            </div>
            <?php }
            else{?>
              <div class="ui dropdown item">
                <?php echo $this->session->userdata('nama') ?> <i class="dropdown icon"></i>
                <div class="menu">
                  <a class="item">Tulis Jurnal</a>
                  <a href="#" class="item">Log Out</a>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
        <br />
        <?php echo $contents ?>
    </body>
</html>
