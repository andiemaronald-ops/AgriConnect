<?php

include("db.php");

$result = $conn->query(
    "SELECT * FROM products"
);

?>

<!DOCTYPE html>
<html>
<head>

    <title>Products</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<h2 class="page-title">Available Produce</h2>

<div class="products-container">

<?php

while($row = $result->fetch_assoc()){

?>

<div class="product-card">

    <h3>
        <?php echo $row['product_name']; ?>
    </h3>

    <p>
        Price: Ksh <?php echo $row['price']; ?>
    </p>

    <button>
        Add To Cart
    </button>

</div>

<?php

}

?>

</div>

</body>
</html>