<?php
@include 'phpConnect.php';
@include 'product.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <title>Product Add</title>
</head>

<body>

  <header class="header">
    <h1 class="heading-primary">Product Add</h1>
  </header>
  <form id="product_form" class="product_form" action='product.php' method="post">
    <label for="sku">SKU</label>
    <input type="text" placeholder="Product SKU" id="sku" name="sku" />
    <label for="name">Name</label>
    <input type="text" placeholder="Product name" id="name" name="name" />
    <label for="price">Price ($)</label>
    <input type="number" placeholder="Product price" id="price" name="price" />
    <label for="productType">Type Switcher</label>
    <select id="productType" name="productType">
      <option id="DVD" value="dvd">DVD</option>
      <option id="Furniture" value="furniture">Furniture</option>
      <option id="Book" value="book">Book</option>
    </select>
    <div class="optionFeatures" id="dvdFeature">
      <label for="size">Size(MB)</label>
      <input type="number" placeholder="Size" id="size" name='size'>
      <p>Please provide the size of the DVD</p>
    </div>
    <div class="optionFeatures " id="furnitureFeature">
      <label for="height">Height(CM)</label>
      <input type="number" placeholder="Height" id="height" name="height"><br />
      <label for="width">Width(CM)</label>
      <input type="number" placeholder="Width" id="width" name="width"><br />
      <label for="length">Length(CM)</label>
      <input type="number" placeholder="Length" id="length" name="length"><br />
      <p>Please provide the dimensions of the furniture</p>
    </div>
    <div class="optionFeatures " id="bookFeature">
      <label for="weight">Weight(KG)</label>
      <input type=" number" placeholder="Weight" id="weight" name="weight">
      <p>Please provide the weight of the book</p>
    </div>
    <p id="errorMessage"></p>
    <div class="product_form__buttons">
      <button class="btn" type="submit">Save</button>
      <a class="btn" href="index.php">Cancel</a>
    </div>
  </form>
  <footer class="footer">
    <p>Scandiweb Test assignment</p>
  </footer>
  <script src="js/script.js"></script>
</body>

</html>