 <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="index.php?page=home"><strong>Daerah Kita Pegawai</strong></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="index.php?page=home">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link active text-white" href="index.php?page=aboutUs">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pegawai
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item " href="index.php?page=dataPegawai">Data Pegawai</a></li>
                                    <li><a class="dropdown-item " href="#">Daftar Lain</a></li>
                                </ul>
                            </li>
                            <?php
                           
                            if(!isset($member)) {
                
                            } else {
                                
                            ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?= $member['fullname']; ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Users</a></li>
                                        <li><a class="dropdown-item" href="index.php?page=profile">Profile</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="logout.php" onclick="return confirm('Kamu Ingin Keluar?')">Logout</a></li>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- end menu -->