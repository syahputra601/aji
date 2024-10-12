        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../../foto_user/<?php if (trim($users['foto']) == ''){ echo "blank.png"; }else{ echo $users['foto']; } ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo "$users[nama_lengkap]"; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a><br>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='color:gray; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MAIN NAVIGATION</li>
            <li><a href="media.php?module=home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

            <li class="treeview">
              <a href="#"><i class="fa fa-shield"></i><span>Master</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                  <input type="hidden" name="nip" value="<?php echo '$users[nip]' ?>">
                  <?php include "menu/menu8.php"; ?>
              </ul>
            </li>
<?php
if($_SESSION['leveluser']=='admin'){?>
            <li class="treeview">
              <a href="#"><i class="fa fa-users"></i><span>Transaksi</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                  <?php include "menu/menu9.php"; ?>
              </ul>
            </li>
<?php
}
?>
            <li class="treeview">
              <a href="#"><i class="fa fa-envelope"></i><span>Laporan</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                  <?php include "menu/menu10.php"; ?>
              </ul>
            </li>
            <li><a href="logout.php"><i class="fa fa-power-off"></i> <span>Sign Out</span></a></li>

        </ul>
        </section>