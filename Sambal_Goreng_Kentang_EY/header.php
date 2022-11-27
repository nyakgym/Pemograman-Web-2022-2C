<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
    <div class="container-lg ">
        <a class="navbar-brand text-dark" href="."><img src="img/148762.png" width="40" height="40"> SAMBAL GORENG KENTANG EY  </a>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php
                        echo $hasil['username'];
                        ?>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

