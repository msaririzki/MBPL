<?php require_once 'inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library</title>
  <?php require_once 'inc/header.php'; ?></head>
<body>

<div class="container mt-4">
  <h2>List of Books</h2>
  <table class="table table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT id, title, author FROM books";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // Output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr>
                      <td>{$row['id']}</td>
                      <td>{$row['title']}</td>
                      <td>{$row['author']}</td>
                      <td><a href=\"detail.php?id={$row['id']}\">View Details</a></td>
                    </tr>";
          }
      } else {
          echo "<tr><td colspan='4'>No books found</td></tr>";
      }

      $conn->close();
      ?>
    </tbody>
  </table>
  <style>
    .table-hover tbody tr:hover {
      background-color: #f1f1f1; /* Warna latar belakang saat hover */
    }
  </style>
</div>

<?php require_once 'inc/footer.php'; ?>

</body>
</html>
