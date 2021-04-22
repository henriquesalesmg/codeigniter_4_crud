<h1>Banners</h1>

<?php if(!empty($banners) && (is_array($banners))) : ?>

    <?php foreach($banners as $banner): ?>
        <?php echo $banner['banner']; ?> <br>
    <?php endforeach; ?>

<?php endif; ?>