<!-- Navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand-logo" href="#">
            <img src="logo.png" style="width: 200px; height: 100px" alt="Book Review System Logo" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><i class="fa-solid fa-house-chimney mx-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="Books.php"><i class="fa-solid fa-book mx-2"></i>Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AuthorPage.php"><i class="fa-solid fa-feather mx-2"></i>Author</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Review.php"><i class="fa-solid fa-message mx-2"></i>Reviews</a>
                </li>

                <li class="nav-item hide-in-large">
                    <a class="nav-link" href="Profile.php">Profile</a>
                </li>
                <li class="nav-item account">
                    <a href="Profile.php">
                        <div class="avatar">
                            <img src="../image/<?php if (empty($userimg)) {
                                echo "nurse.jpg";
                            } else {
                                echo $userimg;
                            } ?>" alt="User Avatar" />
                        </div>
                    </a>

                </li>
            </ul>
        </div>
    </nav>