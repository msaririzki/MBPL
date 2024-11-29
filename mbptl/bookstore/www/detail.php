<?php require_once 'inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Detail</title>
  <?php require_once 'inc/header.php'; ?>
</head>
<body>

<div class="container mt-4">
  <h2>Book Detail</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $row["image"]; ?>" class="card-img-top" alt="<?php echo $row["title"]; ?>">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row["title"]; ?></h5>
          <p class="card-text">Author: <?php echo $row["author"]; ?></p>
          <p class="card-text">Description: <?php echo $row["description"]; ?></p>
          <p class="card-text">ID: <?php echo $row["id"]; ?></p>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <?php
        if ($result === false) {
            echo "Error: " . $conn->error;
        } else {
            if ($row) {
                echo "<h3>Title: " . $row["title"] . "</h3>";
                echo "<p>Author: " . $row["author"] . "</p>";
                echo "<p>Description: " . $row["description"] . "</p>";
                echo "<p>ID: " . $row["id"] . "</p>";
            } else {
                echo "Book not found.";
            }

            if ($result) {
                $result->free();
            }
        }

        $conn->close();
      ?>
    </div>
  </div>
</div>

<div class="container mt-4">
    <a href="index.php" class="btn btn-primary btn-lg">Back to Home</a>
</div>

<?php require_once 'inc/footer.php'; ?>

</body>
</html>
