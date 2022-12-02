<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('site/head', $this->data); ?>
    </head>
    <body style="background-color: white;">
        <div>
            <?php $this->load->view('site/header', $this->data); ?>
            <?php $this->load->view('site/slider', $this->data); ?>
        </div>
        <div class="container" style="width: 100%; margin: 0; padding-left: 40px;padding-right: 40px;">

            <?php $this->load->view($temp, $this->data); ?>

        </div>
        <?php $this->load->view('site/footer', $this->data); ?>
        <script src="<?php echo public_url('site/'); ?>bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>