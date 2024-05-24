<?php
session_start();

// Define the formatPrice function
function formatPrice($price) {
    return "Rp " . number_format($price, 0, ',', '.');
}

// Assuming products are stored in an array for demonstration purposes.
$products = [
    1 => ['name' => 'Certified Lover Boy', 'price' => 150000, 'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r991-lnxftjok3onae8'],
    2 => ['name' => 'For All The Dogs', 'price' => 150000, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIq_4QghJmhAicfFVxgjmFvjuk9ORAU-JKqQc9YORP9A&s'],
    3 => ['name' => 'Her Loss', 'price' => 150000, 'image' => 'https://i.etsystatic.com/37384333/r/il/e061e1/4322757526/il_fullxfull.4322757526_htda.jpg'],
    4 => ['name' => 'Scorpion', 'price' => 150000, 'image' => 'https://images.stockx.com/images/Drake-Scorpion-Album-Cover-T-shirt-Black.jpg?fit=fill&bg=FFFFFF&w=700&h=500&fm=webp&auto=compress&q=90&dpr=2&trim=color&updated_at=1655855685'],
    5 => ['name' => 'Anita Max Wynn Cap', 'price' => 150000, 'image' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2024/1/12/61ea343b-8fcf-402d-ae7b-7f0c6dc4a8eb.jpg']
];

$product_id = $_POST['product_id'];
if (!isset($products[$product_id])) {
    echo "Invalid product.";
    exit;
}
$product = $products[$product_id];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    <link rel="stylesheet" href="checkout.css">
</head>
<body>
    <h1>Checkout</h1>
    <div class="product-details">
        <h2><?php echo $product['name']; ?></h2>
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <h2><?php echo formatPrice($product['price']); ?></h2>
        <form method="post" action="complete_purchase.php">
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            <button type="submit" name="confirm_purchase" class="btn">Confirm Purchase</button>
        </form>
    </div>
</body>
</html>
