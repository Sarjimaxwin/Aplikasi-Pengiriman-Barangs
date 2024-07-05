<?php

if(empty($_SESSION['email'])){
    echo"<script>alert('Anda tidak dapat mengakses halaman ini.');
    window.location.href = 'index.php';</script>";
    exit();
}
    ?>
<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a class="brand-link"> <!--begin::Brand Image--> <img src="assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">Bintang Kantin</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                       
                        <li class="nav-item"> <a href="dashboard.php" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Dashboard
                                    <span class="nav-badge badge text-bg-secondary me-3"></span> 
                                </p>
                            </a>
                         </li>   
                         <li class="nav-item"> <a href="pesanan.php" class="nav-link"> <i class="nav-icon bi bi-bucket-fill"></i>
                                <p>
                                    Pesanan 
                                    <span class="nav-badge badge text-bg-secondary me-3"></span> 
                                </p>
                            </a>
                         </li>  
                          <li class="nav-item"> <a href="profil.php" class="nav-link"> <i class="nav-icon bi bi-person-fill-check"></i>
                                <p>
                                    Profil
                                    <span class="nav-badge badge text-bg-secondary me-3"></span> 
                                </p>
                            </a>
                         </li>     
                         <li class="nav-item"> <a href="signout.php" class="nav-link"> <i class="nav-icon bi bi-escape"></i>
                                <p>
                                    Signout
                                    <span class="nav-badge badge text-bg-secondary me-3"></span> 
                                </p>
                            </a>
                         </li>   
                            
                     </ul>
                                   
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar-->