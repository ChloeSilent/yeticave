<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <?php foreach ($categories as $menuItem): ?>
                <li class="promo__item promo__item--boards">
                    <a class="promo__link"  href="all-lots.html"><?=$menuItem?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <?php foreach ($goods as $good):?>
                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src="img/<?=$good["image"]; ?>" width="350" height="260" alt="<?=$good["category"]; ?>">
                    </div>
                    <div class="lot__info">
                        <span class="lot__category"><?=$good["category"]; ?></span>
                        <h3 class="lot__title"><a class="text-link" href="lot.html"><?=$good["name"]; ?></a>
                            <div class="lot__state">
                                <div class="lot__rate">
                                    <span class="lot__amount">Стартовая цена</span>
                                    <span class="lot__cost"><?=show_price($good["price"]); ?></span>
                                </div>
                                <div class="lot__timer timer">
                                <?=count_time ($today, $tomorrow); ?>
                                </div>
                            </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>