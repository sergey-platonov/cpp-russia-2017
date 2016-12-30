<!-- Доклады -->
<section class="cpp-b_section gray-section talks-section">
    <div class="cpp-r_wrap">
        <div class="cpp-b_talks cpp-b_responsive-row-cols">
            <?php
                foreach(glob($_SERVER['DOCUMENT_ROOT'].'/talks/*', GLOB_ONLYDIR) as $dir) {
                    $dirname = basename($dir);
                    partial("talks/".$dirname."/teaser");
                }
            ?>
        </div>
    </div>
</section>
<!-- /Доклады -->