<?php
session_start();

$products = [
    1 => ['name' => 'Certified Lover Boy', 'price' => 150000, 'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r991-lnxftjok3onae8'],
    2 => ['name' => 'For All The Dogs', 'price' => 150000, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIq_4QghJmhAicfFVxgjmFvjuk9ORAU-JKqQc9YORP9A&s'],
    3 => ['name' => 'Her Loss', 'price' => 150000, 'image' => 'https://i.etsystatic.com/37384333/r/il/e061e1/4322757526/il_fullxfull.4322757526_htda.jpg'],
    4 => ['name' => 'Scorpion', 'price' => 150000, 'image' => 'https://images.stockx.com/images/Drake-Scorpion-Album-Cover-T-shirt-Black.jpg?fit=fill&bg=FFFFFF&w=700&h=500&fm=webp&auto=compress&q=90&dpr=2&trim=color&updated_at=1655855685'],
    5 => ['name' => 'Anita Max Wynn Cap', 'price' => 150000, 'image' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2024/1/12/61ea343b-8fcf-402d-ae7b-7f0c6dc4a8eb.jpg']
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    if (isset($products[$product_id])) {
        $product_name = $products[$product_id]['name'];
        $message = "Purchase of product: $product_name completed successfully!";
    } else {
        $message = "Invalid product.";
    }
} else {
    $message = "Invalid request.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Purchase Confirmation</title>
    <link rel="stylesheet" href="complete_purchase.css">
</head>
<body>
    <div class="confirmation-container">
        <h1>Checkout Confirmation</h1>
        <p class="message"><?php echo $message; ?></p>
        <a href="index.php" class="btn">Return to Home</a>
    </div>
</body>
</html>
