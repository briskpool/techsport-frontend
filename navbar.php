


<section class="nav-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.svg" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" id = "open-menu">
                <img src="images/icons/menu.svg" alt="menu-icon">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item px-2">
                        <a href="gender-pay-gap.php" class="nav-link <?php if($currentPage =='Gender Pay Gap'){echo 'active';}?>">
                            Gender Pay Gap
                        </a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link <?php if($currentPage =='charity'){echo 'active';}?>" href="charity.php">
                            Charity
                        </a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link <?php if($currentPage =='about'){echo 'active';}?>" href="about.php">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item px-2">
                        <a href = "index.php#contact-us" class="nav-link">
                            Contact Us
                        </a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="https://accounts.techsport-global.com" class="btn btn-primary mx-2 px-4">
                    <i class="bi bi-person-fill me-1"></i>Login
                    </a>
                    <a href="register.php" class="btn btn-secondary mx-2 px-4">
                        REGISTER
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="side-mobile-nav">
        <div class="side-nav-header">
            <img id = "close-menu" src="images/icons/cross.svg" alt="cross-icon">
        </div>
        <div class="side-list pb-4">
            <ul class="nav flex-column text-center">
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?php if($currentPage =='home'){echo 'active';}?>">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="gender-pay-gap.php" class="nav-link <?php if($currentPage =='Gender Pay Gap'){echo 'active';}?>">
                        Gender Pay Gap
                    </a>
                </li>
                <li class="nav-item">
                    <a href="charity.php" class="nav-link <?php if($currentPage =='charity'){echo 'active';}?>">
                     Charity
                    </a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link <?php if($currentPage =='about'){echo 'active';}?>">
                        About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php#contact-us" class="nav-link">
                        Contact Us
                    </a>
                </li>

                <li class="nav-item">
                <a href="https://accounts.techsport-global.com" class="btn-primary nav-link">
                    <i class="bi bi-person-fill me-1"></i>Login
                    </a>
                </li>

                <li class="nav-item">
                    <a href="register.php" class="nav-link btn-secondary">
                        REGISTER
                    </a>
                </li>
                <li class="nav-item">
                    
                </li>
                
            </ul>
        </div>
    </div>

</section>