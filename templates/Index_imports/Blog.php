<section class="section-blog section-outer">
    <div class="section-inner">
        <div class="section-blog-wrapper">
            <div class="section-blog-wrapper__title">Blog</div>
            <div class="section-blog-wrapper__subtitle">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            </div>
        </div>
        <div class="section-blog-content">
            <?php $artices = $mysql->query("SELECT * FROM `blog`")->fetch_all(); ?>
            <?php foreach($artices as $id => $article): ?>
                <article class="section-blog-content-article">
                    <img src="../Images/blog-image.png" alt="" class="section-blog-content-article__img">
                    <div class="section-blog-content-article__description">
                        <div class="section-blog-content-article__description__title">
                            <?=$article[1]?>
                        </div>
                        <div class="section-blog-content-article__description-date-and-dir">
                            <div class="section-blog-content-article__description-date-and-dir__date">
                                <i class="fa fa-calendar" aria-hidden="true"></i><div class="date"><?=$article[4]?></div>
                            </div>
                            <div class="section-blog-content-article__description-date-and-dir__direction">
                                <i class="fa fa-file-o" aria-hidden="true"></i><div class="direction"><?=$article[2]?></div>
                            </div>

                        </div>
                        <div class="section-blog-content-article__description__subtitle">
                            <?=$article[3]?>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
            <div class="section-blog-view-more">
                <button class="section-blog-view-more__btn">VIEW MORE</button>
            </div>
        </div>
    </div>
</section>