<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg" style="background-color: rgb(18, 136, 221);">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <!-- Logo nato -->
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="assets/images/logo.jpg" alt="Logo" style="height: 40px; width: 40px; border-radius: 50%; object-fit: cover;">
                </a>
                <!-- Navbar Content ni -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="index.php"><span>Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=events" class="nav-link text-white <?php echo ($_GET['page'] ?? '') === 'events' ? 'active' : ''; ?>">Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=info" class="nav-link text-white <?php echo ($_GET['page'] ?? '') === 'info' ? 'active' : ''; ?>">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Forms
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="index.php?page=appointment" class="dropdown-item <?php echo ($_GET['page'] ?? '') === 'appointment' ? 'active' : ''; ?>">
                                        <i class="bi bi-circle"></i><span>Appointment Form</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php?page=forum" class="dropdown-item <?php echo ($_GET['page'] ?? '') === 'forum' ? 'active' : ''; ?>">
                                        <i class="bi bi-circle"></i><span>Forum</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Search Bar ni sha  -->
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    <!-- End Of Navigation -->

    <section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                        switch ($page) {
                            case 'appointment':
                                include 'forms/appointment.php';
                                break;
                                case 'forum':
                                    include 'forms/forum.php';
                                    break;
                                    case 'events':
                                        include 'events.php';
                                        break;
                                        case 'info':
                                            include 'info.php';
                                            break;
                            default:
                                echo '<p>Page not found.</p>';
                                break;
                        }
                    } else {
                        echo '<p>Welcome to the home page!</p>';
                        echo '
                            <div class="photo-gallery mt-4">
                                <h2>Explore Our Community</h2>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <img src="assets/images/photo1.jpg" class="img-fluid rounded shadow">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="assets/images/photo2.jpg" class="img-fluid rounded shadow">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="assets/images/photo3.jpg" class="img-fluid rounded shadow">
                                    </div>
                                </div>
                                
                            </div>
                        ';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
    <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Baranggay Lapasan </strong> <span>All Rights Reserved<br></span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>