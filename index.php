<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Motor Cycle Parts Inventory</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    body {
      background-color: #f8f9fa;
      color: #495057;
    }

    .container {
      margin-top: 30px;
    }

    .form-label {
      font-weight: bold;
    }

    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
    }

    .table {
      margin-top: 20px;
    }
  </style>

</head>

<body>
  <div class="container">
    <form action="add-inventory.php" method="POST">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product name:</label>
            <input name="productname" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Price:</label>
            <input name="productprice" type="number" class="form-control" />
          </div>

          <div class="mb-3">
            <button type="submit" class="btn btn-success">Add Record</button>
          </div>
        </div>
      </div>
    </form>

    <?php
    // Create database connection
    $conn = new mysqli("localhost", "motors", "", "motor_parts");

    // Construct SQL statement
    $sql =  'SELECT * FROM motorpartsinventory';

    $result = $conn->query($sql);
    ?>

    <div class="row">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Product name</th>
            <th scope="col">Product price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?php echo $row['productname']; ?></td>
              <td><?php echo $row['productprice']; ?></td>
              <td><!-- Add any action buttons or links here --></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
