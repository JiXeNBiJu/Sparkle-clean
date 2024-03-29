        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3">SPARKLE CLEAN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
<?php if($_SESSION['aid']):?>


     <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Cleaning Services</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="add-services.php">Add</a>
                         <a class="collapse-item" href="manage-services.php">Manage</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne1"
                    aria-expanded="true" aria-controls="collapseOne1">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Pages</span>
                </a>
                <div id="collapseOne1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="about-us.php">About Us</a>
                         <a class="collapse-item" href="contact-us.php">Contact Us</a>
                    </div>
                </div>
            </li>


     <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-virus"></i>
                    <span>Cleaning Request</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="new-request.php">New</a>
                        <a class="collapse-item" href="team-ontheway.php">On the Way for<br /> Service</a>
                         <a class="collapse-item" href="inprocess-request.php">Inprocess</a>
                           <a class="collapse-item" href="completed-request.php">Completed</a>
                           <a class="collapse-item" href="rejected-request.php">Rejected</a>
                            
 <a class="collapse-item" href="all-request.php">All Request</a>
                    </div>
                </div>
            </li>
   

<?php else:    ?>          
         
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="live-test-updates.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                 Testing
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Testing</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="new-user-testing.php">New User</a>
                        <a class="collapse-item" href="registered-user-testing.php">Already Registered User</a>
                    </div>
                </div>
            </li>
 <li class="nav-item">
                <a class="nav-link" href="patient-search-report.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Test Report</span></a>
            </li>
         
<li class="nav-item active">
                <a class="nav-link" href="login.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Admin</span></a>
            </li>

<?php endif;    ?>          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->