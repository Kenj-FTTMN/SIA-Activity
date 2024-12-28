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
    <?php
    // Define the dropdown menu items
    $menuItems = [
        ["name" => "Appointment", "link" => "forms/appointment.php"],
        ["name" => "Forum", "link" => "forms/forum.php"],
    ];
    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg" style="background-color: rgb(18, 136, 221);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.jpg" alt="Logo" style="height: 40px; width: 40px; border-radius: 50%; object-fit: cover;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="events.php">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="info.php">Info</a>
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
                        // Check for the page parameter
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                            switch ($page) {
                                case 'appointment':
                                    include 'forms/appointment.php';
                                    break;
                                    case 'forum':
                                        include 'forms/forum.php';
                                        break;
                                default:
                                    echo '<p>Page not found.</p>';
                                    break;
                            }
                        } else {
                            echo '<p>Welcome to the home page!</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>