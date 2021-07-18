<section class="section-services section-outer">
    <div class="section-inner">
        <div class="section-services-wrapper">
            <div class="section-services-wrapper__title">Our Services</div>
            <div class="section-services-wrapper__subtitle">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            </div>
        </div>
        <div class="section-services-content">
            <?php
            $services = $mysql->query("SELECT * FROM `services`")->fetch_all();

            ?>
            <?php foreach($services as $id => $service): ?>
                <div class="section-services-content-service">
                    <img src='../SVG/smartphone.svg' alt="" class="section-services-content-service__img">
                    <div class="section-services-content-service__title"><?=$service[1]?></div>
                    <div class="section-services-content-service__subtitle">
                        <?=$service[2]?>
                    </div>
                    <button class="section-services-content-service__btn">READ MORE</button>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>