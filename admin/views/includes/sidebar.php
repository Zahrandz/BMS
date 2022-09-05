<aside class="left-sidebar">
    <div class="d-flex no-block nav-text-box align-items-center">
        <span><img src="" alt="sidebar"></span>
        <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i
                class="ti-menu"></i></a>
        <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i
                class="ti-menu ti-close"></i></a>
    </div>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
            <li> 
                    <a class="waves-effect waves-dark" href="dashboard" aria-expanded="false">
                    <i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="profil" aria-expanded="false">
                    <i class="fa fa-user-circle-o"></i><span class="hide-menu">Profil</span></a>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fa fa-book"></i>
                        <span class="hide-menu">Our Info</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="about">About Us<i class="fa fa-address-card-o"></i></a></li>
                        <li><a href="contact">Contact Us<i class="fa fa-phone"></i></a></li>
                        <li><a href="portfolio">Portfolio<i class="fa fa-star-o"></i></a></li>
                    </ul>

                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="karyawan" aria-expanded="false">
                    <i class="fa fa-users"></i><span class="hide-menu"></span>Employee</a>
                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="pesan" aria-expanded="false">
                    <i class="fa fa-comment"></i><span class="hide-menu"></span>Message</a>
                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="testimoni" aria-expanded="false">
                    <i class="fa fa-indent"></i><span class="hide-menu"></span>Testimonials</a>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fa fa-angle-down"></i>
                        <span class="hide-menu">Data Master</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="jabatan">Position<i class="fa fa-handshake-o"></i></a></li>
                        <!-- <li><a href="wilayah">Wilayah<i class="fa fa-map-marker"></i></a></li> -->
                    </ul>
                </li>
                <?php if ($level=="superadmin") { ?>
                <li> 
                    <a class="waves-effect waves-dark" href="user" aria-expanded="false">
                    <i class="fa fa-cog"></i><span class="hide-menu"></span>Manage User</a>
                </li>
                <?php } ?>
                <div class="text-center m-t-30">
                    <a href="logout" class="btn waves-effect waves-light btn-danger hidden-md-down">Logout</a>
                </div>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>