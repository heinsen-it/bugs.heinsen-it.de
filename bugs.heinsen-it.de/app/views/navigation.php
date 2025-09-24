<?php


use hitbugsreader\app\helpers\session;
use hitbugsreader\app\helpers\url;
use hitbugsreader\app\models\login;

?>
<!-- Sidebar user (optional) -->
<div class="mt-3 pb-3 mb-3 d-flex">

</div>
<?php /*
<!-- SidebarSearch Form -->
<div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
    </div>
</div> */ ?>
<!-- Sidebar Menu -->
<nav class="mt-2">

    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


        <li class="nav-item">
            <a href="<?= url::LINK('')  ?>" class="nav-link">
                <i class="fas fa-brain nav-icon"></i>
                <p>Startseite</p>
            </a>
        </li>
    <?php /*    <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-question-circle"></i>
                <p>
                 Hilfe
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= url::LINK('hilfe/')  ?>" class="nav-link">
                        <i class="far fa-question-circle nav-icon"></i>
                        <p>SelfCare 21
                        </p>
                    </a>
                </li>
            </ul>
        </li> */ ?>
     <?php /*   <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-database"></i>
                <p>
                    Datentools
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= url::LINK('datentools/historic/')  ?>" class="nav-link">
                        <i class="fas fa-toolbox nav-icon"></i>
                        <p>Historic
                        </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?= url::LINK('datentools/historic/quick/')  ?>" class="nav-link">
                        <i class="fas fa-toolbox nav-icon"></i>
                        <p>Historic Quickform
                        </p>
                    </a>
                </li>
            </ul>
        </li> */ ?>
<?php /*

        <li class="nav-header"><span class="right badge badge-primary">NEU</span> <b>SelfCare21</b></li>


        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="<?= url::LINK('v1/selfcare/'.$akttag.'/')  ?>" class="nav-link">
                <i class="fas fa-calendar-day nav-icon"></i>
                <p>Aktueller Tag</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-clipboard-check"></i>
                <p>
                 Abgeschlossene Tage
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
<li class="nav-item">
                    <a href="<?= url::LINK('v1/selfcare/'.$day.'/')  ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tag <?= $day ?> <span class="right badge badge-info">Abgelaufen</span></p>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-header"><span class="right badge badge-light">Coming Soon</span> <b>Confident70</b> </li>
        <li class="nav-item">
            <a href="<?= url::LINK('info/confident70/')  ?>" class="nav-link">
                <i class="fas fa-info nav-icon"></i>
                <p>Information</p>
            </a>
        </li>

        <li class="nav-header"><span class="right badge badge-light">Coming Soon</span> <b>GoalSetting365</b></li>
        <li class="nav-item">
            <a href="<?= url::LINK('info/goalsetting365/')  ?>" class="nav-link">
                <i class="fas fa-info nav-icon"></i>
                <p>Information</p>
            </a>
        </li> */ ?>
    </ul>
</nav>
