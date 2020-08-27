<body>
    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <a href="<?= base_url(); ?>home/index" class="logo pull-left">
                <img src="<?= base_url(); ?>assets/assets/images/logo fix.png" height="54" alt="Porto Admin" />
                | PPDB SMK ATM
            </a>

            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Log In</h2>
                </div>
                <div class="panel-body">
                    <form action="<?= base_url(); ?>SMK_ATM_LOG_auth" method="post">
                        <?php if ($this->session->flashdata('pw')) : ?>
                            <div class="form-group mb-lg">
                                <div class="col-sm-12 alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?= $this->session->flashdata('pw'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="form-group mb-lg">
                            <label>Username/Email</label>
                            <div class="input-group input-group-icon">
                                <input name="email" type="text" class="form-control input-lg" />
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group mb-lg">
                            <div class="clearfix">
                                <label class="pull-left">Password</label>
                            </div>
                            <div class="input-group input-group-icon">
                                <input name="password" type="password" class="form-control input-lg" />
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 text-left">
                                <button type="submit" class="btn btn-primary hidden-xs">Log In</button>
                                <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Log In</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end: page -->