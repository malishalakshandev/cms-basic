<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a 
                            class="nav-link active" 
                            aria-current="page" 
                            href="./home.php">Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a 
                            class="nav-link active" 
                            aria-current="page" 
                            href="./pages_list.php">Pages
                        </a>
                    </li>

                    <li class="nav-item">
                        <a 
                            class="nav-link active" 
                            aria-current="page" 
                            href="./users_list.php">Users
                        </a>
                    </li>
                </ul>
            </div>

            <div id="loggedUser" style="color:white">
                <?php echo $_SESSION['userData']['username']; ?>
                <a href="./logout.php">Logout</a>
            </div>
    </div>
</nav>