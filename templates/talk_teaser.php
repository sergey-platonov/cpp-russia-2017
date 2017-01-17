<div class="cpp-b_talk row-col">
    <div class="talk-head">
        <div class="talk-date-track">
            <div class="date">
                <?php echo $speakerData->talk->date; ?>
            </div>
            <div class="track">
                <?php echo $speakerData->talk->track; ?><br>
                <?php echo $speakerData->talk->time; ?>
            </div>
        </div>
        <div class="talk-speaker-photo">
            <img src="<?php echo $speakerData->speaker->images[0]; ?>" alt="<?php echo $speakerData->speaker->name; ?>">
        </div>
    </div>
    <div class="talk-speaker-name">
        <?php echo $speakerData->speaker->name; ?>
    </div>
    <div class="talk-content-fixed">
        <div class="talk-title">
            <div class="cpp-e_title-small">
                <?php echo $speakerData->talk->title; ?>
            </div>
        </div>
        <div class="talk-description">
            <?php echo $speakerData->talk->description; ?>
        </div>
    </div>

    <div class="talk-footer">
        <a class="talk-link" href="<?php echo "/talks/".$speakerData->speaker->dirname; ?>">Подробнее >></a>
    </div>
</div>
