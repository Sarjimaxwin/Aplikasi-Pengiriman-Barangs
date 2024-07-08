<?php
session_start();
if(empty($_SESSION['email'])){
    echo"<script>alert('Anda tidak dapat mengakses halaman ini.');
    window.location.href = 'index.php';</script>";
    exit();
}
    ?>
<div class="app-wrapper"> <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Start Navbar Links-->
                
                <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
                  
                   
                    
                    <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <span class="d-none d-md-inline"><?php echo( $_SESSION['nama'] ); ?> </span> </a> 

                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                            <li class="user-header text-bg-primary"> <img src="assets/img/avatar5.png" class="rounded-circle shadow" alt="User Image">
                                <p>
                                <?php echo( $_SESSION['nama'] ); ?>
                                </p>
                            </li> <!--end::User Image--> <!--begin::Menu Body-->
                            <li class="user-footer"> <a href="profil.php" class="btn btn-default btn-flat">Profil</a> <a href="signout.php" class="btn btn-default btn-flat float-end">Keluar</a> </li> <!--end::Menu Footer-->
                        </ul>
                    </li> <!--end::User Menu Dropdown-->
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header-->
