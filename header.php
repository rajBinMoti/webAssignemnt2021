<?php
if (isset($_SESSION['_user'])) {
    $user = $_SESSION['_user'];
    $login_menu_item = "Hello " . $user["user_full_name"] . ' (<a href="logout.php">Logout</a>)';
}

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <?php if (isset($login_menu_item)) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            User Options
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="addpost.php">Add Post</a></li>
                            <li><a class="dropdown-item" href="viewposts.php">View Post</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="profile.php?user_id=<?= $user['user_id'] ?>">Profile</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="about.php">About</a>
                </li>
            </ul>
            <form class="d-flex">
                <?php if (isset($login_menu_item)) : ?>
                    <?= $login_menu_item ?>
                <?php endif; ?>
            </form>
        </div>
    </div>
</nav>