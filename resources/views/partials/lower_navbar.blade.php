<?php
$menuItems = [
    'DIGITAL COMICS' => [
        'name' => 'DIGITAL COMICS',
        'image' => '../../images/buy-comics-digital-comics.png',
        'alt' => 'digital comics img',
    ],
    'DC MERCHANDISE' => [
        'name' => 'DC MERCHANDISE',
        'image' => '../../images/buy-comics-merchandise.png',
        'alt' => 'merchandise img',
    ],
    'SUBSCRIPTION' => [
        'name' => 'SUBSCRIPTION',
        'image' => '../../images/buy-comics-shop-locator.png',
        'alt' => 'subscription img',
    ],
    'COMIC SHOP LOCATOR' => [
        'name' => 'COMIC SHOP LOCATOR',
        'image' => '../../images/buy-comics-subscriptions.png',
        'alt' => 'shop locator img',
    ],
    'DC POWER VISA' => [
        'name' => 'DC POWER VISA',
        'image' => '../../images/buy-dc-power-visa.svg',
        'alt' => 'power visa img',
    ],
];
?>

<div class="lower-navbar">
    <div class="my-navbar py-5">
        <div class="container">
            <ul>
                <?php foreach ($menuItems as $menuItem) : ?>
                <li class="list-unstyled">
                    <a href="#0">
                        <img src="<?php echo $menuItem['image']; ?>" alt="<?php echo $menuItem['alt']; ?>">
                        <?php echo $menuItem['name']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>