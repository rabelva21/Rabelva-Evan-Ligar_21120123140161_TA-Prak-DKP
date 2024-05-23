<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

// Kelas Product
class Product {
    private $name;
    private $price;
    private $image;

    public function __construct($name, $price, $image) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImage() {
        return $this->image;
    }

    public function displayProduct() {
        echo '<div class="product">';
        echo '<div class="tees_price"><h2>' . $this->name . '</h2></div>';
        echo '<img src="' . $this->image . '">';
        echo '<h2>' . formatPrice($this->price) . '</h2>';
        echo '<button class="btn">Buy Now</button>';
        echo '</div>';
    }
}

// Fungsi untuk membersihkan input (modifier)
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags($input));
}

// Fungsi untuk memformat harga
function formatPrice($price) {
    return "Rp " . number_format($price, 0, ',', '.');
}

// Membuat objek Product
$product1 = new Product('Certified Lover Boy', 150000, 'https://down-id.img.susercontent.com/file/id-11134207-7r991-lnxftjok3onae8');
$product2 = new Product('For All The Dogs', 150000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIq_4QghJmhAicfFVxgjmFvjuk9ORAU-JKqQc9YORP9A&s');
$product3 = new Product('Her Loss', 150000, 'https://i.etsystatic.com/37384333/r/il/e061e1/4322757526/il_fullxfull.4322757526_htda.jpg');
$product4 = new Product('Scorpion', 150000, 'https://images.stockx.com/images/Drake-Scorpion-Album-Cover-T-shirt-Black.jpg?fit=fill&bg=FFFFFF&w=700&h=500&fm=webp&auto=compress&q=90&dpr=2&trim=color&updated_at=1655855685');
$product5 = new Product('Anita Max Wynn  Cap', 150000, 'https://images.tokopedia.net/img/cache/700/VqbcmM/2024/1/12/61ea343b-8fcf-402d-ae7b-7f0c6dc4a8eb.jpg')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Landing Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>DRAKE T-SHIRT MERCHANDISE</h1>
    <header id="header">
        <nav id="nav-bar">
            <nav class="nav-bar-content">
                <ul>
                    <li><a class="nav-link" href="#Features" id="keren">Advantages</a></li>
                    <li><a class="nav-link" href="#How_it_works" id="bagus">Best seller</a></li>
                    <li><a class="nav-link" href="#Price" id="kece">Price</a></li>
                    <li><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </nav>
    </header>
    <section>
      <div id="judul">
      <h1>CHAMPAGNE STORE</h1>
</div>
    </section>
    <section class="main-section" id="Features">
        <h2>Advantages</h2>
        <div class="paragraph">
            <h4>Good quality material</h4>
            <p>The materials for our products are of the best quality which will ensure the longevity of the clothes.</p>
        </div>
        <div class="paragraph">
            <h4>Fast sales response and delivery</h4>
            <p>Fast delivery and service make you even more satisfied with your purchase of goods.</p>
        </div>
        <div class="paragraph">
            <h4>Guarantee and security</h4>
            <p>For every purchase we provide a security guarantee for defective and unsatisfactory products.</p>
        </div>
    </section>
    <section class="main-section" id="How_it_works">
        <h2>Best Seller</h2>
        <div class="container">
            <div class="best_seller">
                <img src="https://ae01.alicdn.com/kf/S6000f9055ab6474485384c688fb77e477.jpg_640x640Q90.jpg_.webp">
                <img src="https://down-id.img.susercontent.com/file/id-11134207-7r991-lnxftjok3onae8">
            </div>
        </div>
    </section>
    <section class="main-section" id="Price">
      <h2>Price</h2>
        <div class="product">
            <div class="tees_price">
                <h2><?php echo $product1->getName(); ?></h2>
            </div>
            <img src="<?php echo $product1->getImage(); ?>">
            <h2><?php echo formatPrice($product1->getPrice()); ?></h2>
            <form method="post">
                <input type="hidden" name="product_id" value="1">
                <button type="submit" name="add_to_cart" class="btn">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <div class="tees_price">
                <h2><?php echo $product2->getName(); ?></h2>
            </div>
            <img src="<?php echo $product2->getImage(); ?>">
            <h2><?php echo formatPrice($product2->getPrice()); ?></h2>
            <form method="post">
                <input type="hidden" name="product_id" value="1">
                <button type="submit" name="add_to_cart" class="btn">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <div class="tees_price">
                <h2><?php echo $product3->getName(); ?></h2>
            </div>
            <img src="<?php echo $product3->getImage(); ?>">
            <h2><?php echo formatPrice($product3->getPrice()); ?></h2>
            <form method="post">
                <input type="hidden" name="product_id" value="1">
                <button type="submit" name="add_to_cart" class="btn">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <div class="tees_price">
                <h2><?php echo $product4->getName(); ?></h2>
            </div>
            <img src="<?php echo $product4->getImage(); ?>">
            <h2><?php echo formatPrice($product3->getPrice()); ?></h2>
            <form method="post">
                <input type="hidden" name="product_id" value="1">
                <button type="submit" name="add_to_cart" class="btn">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <div class="tees_price">
                <h2><?php echo $product5->getName(); ?></h2>
            </div>
            <img src="<?php echo $product5->getImage(); ?>">
            <h2><?php echo formatPrice($product3->getPrice()); ?></h2>
            <form method="post">
                <input type="hidden" name="product_id" value="1">
                <button type="submit" name="add_to_cart" class="btn">Buy Now</button>
            </form>
        </div>
    </section>
    <form id="form" action="https://www.freecodecamp.com/email-submit"></form>
</body>
</html>