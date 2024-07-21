<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'Home') || !isset ($_GET['x'])) ? 'active link-light' : 'link-dark' ; ?>" aria-current="page" href="Home"><i class="bi bi-house-heart"></i> Dashboard </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'Enrollments') ? 'active link-light' : 'link-dark'; ?>" aria-current="page" href="Enrollments"><i class="bi bi-person-add"></i> Enrollments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'Courses')  ? 'active link-light' : 'link-dark'; ?>" aria-current="page" href="Courses"><i class="bi bi-bookmark-star"></i> Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'Intructors')  ? 'active link-light' : 'link-dark'; ?>" aria-current="page" href="Intructors"><i class="bi bi-person-rolodex"></i> Intructors</a>
                        </li>
                        <?php 
                        if($hasil['level']==1)
                        {?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'Report')  ? 'active link-light' : 'link-dark'; ?>" aria-current="page" href="Report"><i class="bi bi-flag-fill"></i> Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'User')  ? 'active link-light' : 'link-dark'; ?>" aria-current="page" href="User"><i class="bi bi-person-rolodex"></i> User</a>
                        </li>
                        
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>