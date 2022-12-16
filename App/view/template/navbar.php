<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-black mx-4" href="#">LetsFund</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mx-5">
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="<?= miniframework2\app\core\Router::Url("/public") ?>">Home</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link "
                            href="<?= miniframework2\app\core\Router::Url("/public/targetindexwebsite") ?>">Target</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link "
                            href="<?= miniframework2\app\core\Router::Url("/public/programindexwebsite") ?>">Program
                        </a>

                    </li>
                    <?php if (isset($_SESSION['admin'])) { ?>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="<?= miniframework2\app\core\Router::Url("/public/recap") ?>">Recap
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Transaxtions
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="<?= miniframework2\app\core\Router::Url("/public/targettrxindex") ?>">Transaction
                                    target</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="<?= miniframework2\app\core\Router::Url("/public/programtrxindex") ?>">Transaction
                                    program</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="dropdown-item"
                                    href="<?= miniframework2\app\core\Router::Url("/public/withdrawalindex") ?>">Withdrawal
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Content
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="<?= miniframework2\app\core\Router::Url("/public/targetindex") ?>">Target
                                </a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="<?= miniframework2\app\core\Router::Url("/public/programindex") ?>">Program</a>
                            </li>
                        </ul>
                    </li>

                    <?php } if (isset($_SESSION['admin'])||isset($_SESSION['user'])) { ?>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="<?= miniframework2\app\core\Router::Url("/public/logout") ?>">Log Out
                        </a>
                    </li>
                    <?php } else {  ?>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="<?= miniframework2\app\core\Router::Url("/public/login") ?>">Login
                        </a>
                    </li>
                    <?php 
                    } ?>
                </ul>

            </div>
        </div>
    </nav>