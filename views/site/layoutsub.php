<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('site/head', $this->data); ?>
    </head>
    <body>
        <div class="mynavbar" style="top: 0; z-index: 999; position: sticky;">
            <?php $this->load->view('site/header', $this->data); ?>
        </div>
        <div class="container" style="width: 100%; margin: 0; padding-left: 40px; padding-right: 40px">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding" style="margin-top: 15px;">
                    <?php $this->load->view('admin/message.php'); ?>
                    <?php $this->load->view('site/sidebar', $this->data); ?>
                    <?php $this->load->view($temp, $this->data); ?>
                </div>
            </div>

        </div>
        <?php $this->load->view('site/footer', $this->data); ?>
        <script src="<?php echo public_url('site/'); ?>bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>