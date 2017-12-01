<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Конференция C++ Russia, <?php echo $speakerData->speaker->name; ?> - <?php echo $speakerData->talk->title; ?></title>
    <?php partial(("includes"), $GLOBALS["project_root"]); ?>
</head>
<body class="cpp-r talks">
<header class="cpp-r_header">
    <?php partial(("templates/header"), $GLOBALS["project_root"]); ?>
</header>
<main class="cpp-r_main">
    <!-- -->
    <div class="cpp-b_page-top-description">
        <div class="cpp-r_wrap">
            <div class="cpp-b_sidetext cpp-b_responsive-row-cols">
                <div class="sidetext-left row-col"></div>
                <div class="sidetext-right row-col">
                    <h1 class="cpp-e_block-title mod-big">
                        <?php echo $speakerData->talk->title; ?>
                    </h1>
                    <div class="cpp-b_block-text"></div>
                </div>
            </div>
            <div class="cpp-b_sidetext cpp-b_responsive-row-cols">
				<div class="sidetext-left row-col">
				<?php if (count($speakerData->speaker->images)): ?>
                <?php foreach ($speakerData->speaker->images as $filename): ?>
                    <img src="/<?php echo $GLOBALS["prefix"].'/'.$filename; ?>" style="width: 15.938rem;">
                <?php endforeach; ?>
                <?php else: ?>
					<img src=/"<?php echo $GLOBALS["prefix"];?>/speakers_data/photo.png" style="width: 15.938rem;">
                <?php endif ?>
                </div>
                
                <div class="sidetext-right row-col">
                    <div class="cpp-b_block-text">
                        <div class="cpp-e_speaker-name">
                            <?php echo $speakerData->speaker->name; ?>
                        </div>
                        <?php echo $speakerData->speaker->about; ?>
                        <hr>
                        <!-- Полное описание доклада -->
                        <?php echo $speakerData->talk->description; ?>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <?php partial(("partials/sponsors"), $GLOBALS["project_root"]); ?>
</main>
<?php partial(("templates/footer"), $GLOBALS["project_root"]); ?>
</body>
</html>
