<section class="section-works section-outer">
    <div class="section-inner">
        <div class="section-works-wrapper">
            <div class="section-works-wrapper__title">Latest Works</div>
            <div class="section-works-wrapper__subtitle">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            </div>
        </div>

        <div class="section-works-filter">
            <button class="section-works-filter__btn">ALL</button>
            <button class="section-works-filter__btn">WEB DESIGN</button>
            <button class="section-works-filter__btn">UI/UX DESIGN</button>
            <button class="section-works-filter__btn">MOCKUPS</button>
        </div>

        <div class="section-works-content">
            <?php
            $works = $mysql->query("SELECT * FROM `works` ORDER BY `date` DESC")->fetch_all();
            ?>
            <?php foreach ($works as $id => $work): ?>
                <div class="section-works-content-work">
                    <img src="../Images/work-img.png" alt="" class="section-works-content-work__img">
                    <div class="section-works-content-work-wrapper">
                        <div class="section-works-content-work-wrapper__title"><?=$work[1]?></div>
                        <div class="section-works-content-work-wrapper__subtitle"><?=$work[2]?></div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
        <div class="section-works-view_more">
            <button class="section-works-view_more-btn">VIEW ALL</button>
        </div>
    </div>
</section>