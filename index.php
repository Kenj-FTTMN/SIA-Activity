<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <?php
    // Define the dropdown menu items
    $menuItems = [
        ["name" => "Action", "link" => "forums/appointment.php"],
        ["name" => "Another action", "link" => "forums/events.php"],
        ["name" => "Something else here", "link" => "forums/forum.php"],
    ];
    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg" style="background-color: rgb(18, 136, 221);">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <?php foreach ($menuItems as $item): ?>
                  <li>
                    <a class="dropdown-item" href="<?= $item['link'] ?>"><?= $item['name'] ?></a>
                  </li>
                <?php endforeach; ?>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <a class="dropdown-item" href="forums/special.php">Special Item</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled text-light" aria-disabled="true">Disabled</a>
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
