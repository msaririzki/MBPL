  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      padding-bottom: 70px; /* Adjust as needed to prevent the footer from overlapping content */
    }
    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #f8f9fa; /* Bootstrap's background color for light theme */
      text-align: center;
      padding: 10px;
    }
    .card {
      margin-bottom: 20px;
      border-radius: 10px; /* Membuat sudut kartu lebih bulat */
      transition: transform 0.2s; /* Efek transisi saat hover */
    }
    .card:hover {
      transform: scale(1.05); /* Efek zoom saat hover */
    }
    .navbar {
      margin-bottom: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
  </style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
      <img src="path/to/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo"> Bookstore
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>