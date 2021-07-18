<section class="section-team section-outer">
    <div class="section-inner">
        <div class="section-team-wrapper">
            <div class="section-team-wrapper__title">Our Team Member</div>
            <div class="section-team-wrapper__subtitle">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            </div>
        </div>
        <div class="section-team-content">
            <?php $team = $mysql->query("SELECT * FROM `team`")->fetch_all(); ?>
            <?php foreach($team as $id => $team_member): ?>
                <div class="section-team-content-member">
                    <img src="../Images/member.png" alt="" class="section-team-content-member__img">
                    <div class="section-team-content-member__name"><?=$team_member[1]?></div>
                    <div class="section-team-content-member__occupation"><?=$team_member[2]?></div>
                    <div class="section-team-content-member__social_networks">
                        <a href="<?=$team_member[3]?>">
                            <div class="section-team-content-member__social_networks__facebook social_network">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </div>
                        </a>
                        <a href="<?=$team_member[4]?>">
                            <div class="section-team-content-member__social_networks__twitter social_network">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </div>
                        </a>
                        <a href="<?=$team_member[5]?>">
                            <div class="section-team-content-member__social_networks__chat social_network">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                            </div>
                        </a>
                        <a href="<?=$team_member[6]?>">
                            <div class="section-team-content-member__social_networks__dribble social_network">
                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>