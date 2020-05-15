    <!-- Navigation -->
    <nav class="navbar navbar-expand-md bg-secondary navbar-dark fixed-top shadow">
        <a class="navbar-brand" href="index.php?id=index">LOGO </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?id=index"> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?id=about">
                        About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?id=contact">
                        Contact</a>
                </li>
                <?php 
                    if (isset($_COOKIE['Username'])) {
                        echo '<li class="nav-item dropdown">';
                        echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                        echo $_COOKIE['Username'];
                        echo '</a>';
                        echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
                        echo '<a class="dropdown-item" href="#">Profile</a>';
                        echo '<a class="dropdown-item" href="#">Logout</a>';
                        echo '</li>';
                    }else {
                        echo '<li class="nav-item">';
                        echo '<a class="nav-link" href="index.php?id=login">Login</a>';
                        echo '</li>';
                    }
                ?>
            </ul>
        </div>
    </nav>