<section id="intro">
    <h1>Mon super MVC</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ex, officia aperiam itaque, quidem illum aliquid vel sapiente quisquam quos dolore quia! Voluptatibus architecto rem laudantium! Qui blanditiis fugiat corrupti!</p>
</section>


<section id="last-article">
    <h2>les derniers articles</h2>

<div>
    <?php  foreach($articles as $article){?>

        <article>
        <h3><?= $article['title']?></h3>
        <p><?= $article['resume']?></p>
        <a href="#">Lire l'article</a>
        
        </article>

    <?php } ?>
</div>
</section>