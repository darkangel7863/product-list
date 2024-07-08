<?php
@include 'phpConnect.php';
abstract class product
{
  private $sku;
  private $name;
  private $price;
  private $attributes;

  public function __construct($sku, $name, $price, $attributes)
  {
    $this->sku = $sku;
    $this->name = $name;
    $this->price = $price;
    $this->attributes = $attributes;


  }
  public function getSku()
  {
    return $this->sku;
  }
  public function getName()
  {
    return $this->name;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function getAttributes()
  {
    return $this->attributes;
  }

  public function setSku($sku)
  {
    $this->sku = $sku;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function setPrice($price)
  {
    $this->price = $price;
  }
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }



}
class dvd extends product
{
  public $type = 'dvd';
  public function getType()
  {
    return $this->type;
  }

}
class furniture extends product
{
  public $type = 'furniture';
  public function getType()
  {
    return $this->type;
  }
}
class book extends product
{
  public $type = 'book';
  public function getType()
  {
    return $this->type;
  }
}
$mainUrl = 'index.php';
if ($_POST['productType'] === 'dvd') {


  $sql = "INSERT INTO products (sku,name,price,type,attributes) VALUES ('" . $_POST['sku'] . "','" . $_POST['name'] . "','" . $_POST['price'] . "','" . $_POST['productType'] . "','" . $_POST['size'] . "')";
  mysqli_query($conn, $sql);
  header('Location: ' . $mainUrl);
  die();

}
if ($_POST['productType'] === 'furniture') {
  $sql = "INSERT INTO products (sku,name,price,type,attributes) VALUES ('" . $_POST['sku'] . "','" . $_POST['name'] . "','" . $_POST['price'] . "','" . $_POST['productType'] . "','" . $_POST['height'] . "x" . $_POST['width'] . "x" . $_POST['length'] . "')";
  mysqli_query($conn, $sql);
  header('Location: ' . $mainUrl);
  die();

}
if ($_POST['productType'] === 'book') {

  $sql = "INSERT INTO products (sku,name,price,type,attributes) VALUES ('" . $_POST['sku'] . "','" . $_POST['name'] . "','" . $_POST['price'] . "','" . $_POST['productType'] . "','" . $_POST['weight'] . "')";
  mysqli_query($conn, $sql);
  header('Location: ' . $mainUrl);
  die();
}
