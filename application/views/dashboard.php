<div class="row">
<div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= count($posts); ?></h3>
                <i class="nav-icon fas fa-users fa-fw"></i>  
                <p>Profile</p>
            </div>
            <div class="icon">
            </div>
            <a href="<?= base_url('post/data'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= count($category); ?></h3>

                <p>Pendidikan</p>
            </div>
            <div class="icon">
            <i class="nav-icon fas fa-tags fa-fw"></i> 
            </div>
            <a href="<?= base_url('category'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= count($comments); ?></h3>

                <p>Pengalaman Kerja</p>
            </div>
            <div class="icon">
            <i class="nav-icon fas fa-newspaper fa-fw"></i>
            </div>
            <a href="<?= base_url('comment'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= count($members); ?></h3>

                <p>Contact Me</p>
            </div>
            <div class="icon">
            <i class="nav-icon fas fa-comments fa-fw"></i>
            </div>
            <a href="<?= base_url('member'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    
</div>