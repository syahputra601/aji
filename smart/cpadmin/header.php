

        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>P</b>KH</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>PKH</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../../foto_user/<?php if (trim($users['foto']) == ''){ echo "blank.png"; }else{ echo $users['foto']; } ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo "&nbsp;&nbsp;$users[nama_lengkap]"; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="../../foto_user/<?php if (trim($users['foto']) == ''){ echo "blank.png"; }else{ echo $users['foto']; } ?>" class="img-circle" alt="User Image">
                    <p>                            
<?php                      
$jml = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM users_log WHERE Username = '$_SESSION[namauser]'"));
                      echo "<small>$jml</small>";
?>   
                      <small>STATISTIK JUMLAH LOGIN</small>
                      <small><?php echo "$users[email]"; ?></small>                      
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                    <?php
                      echo "<a href='?module=profil&act=edit&id=$_SESSION[sessid]' class='btn btn-default btn-flat'>Profile</a>";
                    ?>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>

            </ul>
          </div>
        </nav>