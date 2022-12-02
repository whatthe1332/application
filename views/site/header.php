<div class="row mynavbar" style="margin-left: 0; margin-right: 0; padding-left: 40px; padding-right: 40px; top: 0; z-index: 999; position: sticky;"  >
    <nav class="navbar navbar-info re-navbar" style="margin-bottom: 0">
        <div class="container-fluid re-container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>  
                </button>
                <a class="navbar-brand" href="#">--- Menu ---</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse re-navbar-collapse " id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li><a style="pointer-events: none; padding: 0" href="#"><img src="<?php echo base_url(); ?>upload/logo.png" alt="" class="img-responsive myimg"></a></li>
                    <li class="active bef-line"><a href="<?php echo base_url(); ?>">TRANG CHỦ<span class="sr-only">(current)</span></a></li>

                    <li><a href="<?php echo base_url('thoi-trang-nam-c7'); ?>">NAM</a></li>
                    <li><a href="<?php echo base_url('thoi-trang-nu-c8'); ?>">NỮ</a></li>
                    <li><a href="<?php echo base_url('ban-chay'); ?>">BÁN CHẠY</a></li>
                    <li><a href="<?php echo base_url('khuyen-mai'); ?>">KHUYẾN MÃI</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li style="padding-top: 7px;margin-left: 10px">
                        <form method="post" action="<?php echo base_url('product/search_name'); ?>">
                            <button class="search-icon" type="submit"></button>
                            <input id="seach_info" type="text" name="search" placeholder="Tìm kiếm..">
                        </form>
                    </li>
                    <?php $this->load->view('site/cart/cart_sh'); ?>

                    <?php if (!isset($user)) { ?>
                        <li><a href="<?php echo base_url('dang-nhap'); ?>">Đăng nhập</a></li>
                    <?php } else { ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user->name; ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('user'); ?>">Tài khoản</a></li>
                                <li role="separator" class="divider"></li>
                              
                                
                                <li><a href="<?php echo base_url('user/logout'); ?>">Đăng xuất</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>
</div>