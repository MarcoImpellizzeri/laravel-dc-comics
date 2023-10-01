<?php
$DcComicsLinks = [
    "Characters", 
    "Comics", 
    "Movies", 
    "Tv", 
    "Games", 
    "Videos", 
    "News"
];

$ShopLinks = [
    "Shop Dc", 
    "Shop Collectables"
];

$DCLinks = [
    "Terms Of Use", 
    "Privacy Policy(New)", 
    "AdChoice", 
    "Advertising", 
    "Jobs", 
    "Subscriptions", 
    "Talent Workshops", 
    "CPSC Certificates", 
    "Ratings", 
    "Shop Help", 
    "Contact Us"
];

$SitesLinks = [
    "DC", 
    "Mad Magazine", 
    "DC Kids", 
    "DC Universe", 
    "DC Power Visa"
];
?>

<footer>
    <div class="my-c-top">
        <div class="container">
            <div class="left-side">
                <div class="pe-4">
                    <h4>DC COMICS</h4>
                    <ul class="list-unstyled">
                        <?php foreach ($DcComicsLinks as $link): ?>
                            <li>
                                <a href="#0"><?php echo $link; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <h4>SHOP</h4>
                    <ul class="list-unstyled">
                        <?php foreach ($ShopLinks as $link): ?>
                            <li>
                                <a href="#0"><?php echo $link; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="pe-4">
                    <h4>DC</h4>
                    <ul class="list-unstyled">
                        <?php foreach ($DCLinks as $link): ?>
                            <li>
                                <a href="#0"><?php echo $link; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div>
                    <h4>SITES</h4>
                    <ul class="list-unstyled">
                        <?php foreach ($SitesLinks as $link): ?>
                            <li>
                                <a href="#0"><?php echo $link; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="right-side">
                <img src="../../images/dc-logo-bg.png" alt="">
            </div>
        </div>
    </div>
    <div class="my-c-bot py-4">
        <div class="container">
            <button class="btn btn-outline-primary fw-bold">SING-UP NOW!</button>

            <div>
                <h4>FOLLOW US</h4>
                <a href="#0">
                    <img src="../../images/footer-facebook.png" alt="Facebook logo">
                </a>
                <a href="#0">
                    <img src="../../images/footer-twitter.png" alt="Twitter logo">
                </a>
                <a href="#0">
                    <img src="../../images/footer-youtube.png" alt="YouToube logo">
                </a>
                <a href="#0">
                    <img src="../../images/footer-pinterest.png" alt="Pinterest logo">
                </a>
                <a href="#0">
                    <img src="../../images/footer-periscope.png" alt="Periscope logo">
                </a>
            </div>
        </div>
    </div>
</footer>