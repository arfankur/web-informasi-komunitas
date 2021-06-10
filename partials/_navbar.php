<nav class="navbar navbar-expand-lg navbar-light">
    <div class="justify-between d-flex lg:justify-center align-items-center navbar-top">
        <div>
            <a class="navbar-brand" href="#">
                <div class="">
                    <img src="../assets/images/logo.png" class="w-20 lg:inline-block" alt="" srcset="">
                    <div class="lg:inline-block text-3xl hidden font-black">Komunitas Fotografi Bogor</div>
                </div>
            </a>
        </div>

    </div>
    <div class="navbar-bottom-menu">
        <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                <li>
                    <button class="navbar-close">
                        <i class="mdi mdi-close"></i>
                    </button>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">HOME</a>
                </li>
                <?php
                foreach ($_datakomunitas as $key => $value) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?kategori=<?= $key ?>"><?= strtoupper($key) ?></a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>