<?php
@include 'phpConnect.php';
@include 'product.php';
if (isset($_POST['delete']) && isset($_POST['deleteId'])) {
  foreach ($_POST['deleteId'] as $deleteId) {
    $delete = "DELETE FROM products WHERE id = $deleteId";
    mysqli_query($conn, $delete);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

  <title>Product List</title>
</head>

<body>

  <header class="header">
    <h1 class="heading-primary">Product List</h1>
    <div class="header__buttons">
      <a class="btn" href="add-product.php">Add</a>
      <button class="btn" id="delete-product-btn" type="submit" name="delete" form="product-list-form">Mass
        delete</button>
    </div>
  </header>
  <main class="product-container">
    <form id="product-list-form" action="" method="post">
      <?php
      $sql = "SELECT * FROM products;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          if ($row['type'] === 'dvd') {
            $product = new dvd($row['sku'], $row['name'], $row['price'], $row['attributes']);
            ?>
            <div class="product">
              <input type="checkbox" class="delete-checkbox" name="deleteId[]" value="<?php echo $row['id'] ?>">
              <div class="product__text">
                <p><?php echo $product->getSku(); ?></p>
                <p><?php echo $product->getName(); ?></p>
                <p><?php echo $product->getPrice() . ".00$"; ?></p>
                <p><?php echo "Size : " . $product->getAttributes() . " MB" ?></p>
              <?php } else if ($row['type'] === 'furniture') {
            $product = new furniture($row['sku'], $row['name'], $row['price'], $row['attributes']);
            ?>
                  <div class="product">
                    <input type="checkbox" class="delete-checkbox" name="deleteId[]" value="<?php echo $row['id'] ?>">
                    <div class="product__text">
                      <p><?php echo $product->getSku(); ?></p>
                      <p><?php echo $product->getName(); ?></p>
                      <p><?php echo $product->getPrice() . ".00$"; ?></p>
                      <p><?php echo "Dimensions : " . $product->getAttributes() ?></p>
                  <?php } else if ($row['type'] === 'book') {
            $product = new book($row['sku'], $row['name'], $row['price'], $row['attributes']);
            ?>
                        <div class="product">
                          <input type="checkbox" class="delete-checkbox" name="deleteId[]" value="<?php echo $row['id'] ?>">
                          <div class="product__text">
                            <p><?php echo $product->getSku(); ?></p>
                            <p><?php echo $product->getName(); ?></p>
                            <p><?php echo $product->getPrice() . ".00$"; ?></p>
                            <p><?php echo "Weight : " . $product->getAttributes() . " KG" ?></p>
                      <?php } ?>
                      <!-- <?php if ($row['type'] === 'DVD') { ?>
              <p><?php echo "Size : " . $row['attributes'] . " MB" ?></p>
            <?php } else if ($row['type'] === 'Furniture') { ?>
                <p><?php echo "Dimensions : " . $row['attributes'] ?></p>
            <?php } else if ($row['type'] === 'Book') { ?>
                  <p><?php echo "Weight : " . $row['attributes'] . " KG" ?></p>
            <?php } ?> -->
                    </div>
                  </div>
                  <?php
        }
      }
      ?>
    </form>
  </main>

  <footer class="footer">
    <p>Scandiweb Test assignment</p>
  </footer>
</body>

</html>