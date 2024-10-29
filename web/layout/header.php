<div class="header-inner">

  <div class="container max-1600">

    <!-- Logo ============================================= -->
    <div class="nav-logo">
      <a href="<?php echo base_url(); ?>" class="">
        <img src="<?php echo base_url('uploads/theme/logo-w-150.png'); ?>" class="img-logo">
        <!-- <img src="<?php //echo base_url('uploads/theme/logo-200.png'); 
                        ?>" class="logo-sticky"> -->
      </a>
    </div>
    <!-- #logo end -->

    <div class="nav-user">
      <div class="mr-3">
        <span class="txt-username txt7">
          <?php echo $this->aster->get_curr_auth_sess_value('name'); ?>
        </span>
      </div>
      <div>
        <a href="javascript:;" id="menu-btn" class="menu-btn">
          <i class="icon-menu"></i>
        </a>
      </div>

    </div>

    <!-- Search -->
    <!-- <div id="search">
            <a id="btn-search-close" class="btn-search-close" aria-label="Close search form">
                <i class="icon-x"></i>
            </a>
            <form class="search-form" action="" method="get">
                <input class="form-control" name="q" type="search" placeholder="Type & Search..." />
                <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
            </form>
        </div> -->
    <!-- end: search -->

    <?php //$this->load->view($this->_aster_config['fn_theme_ci_path'].'/'.$this->_aster_config['fn_nav']); 
    ?>


  </div>

</div>