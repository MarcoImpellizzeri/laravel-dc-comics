<?php
$navLinks = [
    'CHARACTER', 
    'COMICS', 
    'MOVIES', 
    'TV', 
    'GAMES', 
    'COLLECTIBLES', 
    'VIDEOS', 
    'FANS', 
    'NEWS', 
    'SHOP'
];

?>

<header>
    <div class="container py-4">
        <a href="#0"><img src="../../images/dc-logo.png" alt="DC logo"></a>

        <ul class="nav nav-pills">
            <?php foreach ($navLinks as $link): ?>
                <li class="nav-item">
                    <a href="#0" class="nav-link">
                        <?php echo $link; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</header>