<?php
/**
 * @var AfishaMainSchemaWidget $this
 * @var array $schema
 * @var array $links
 * @var array $events
 */
?>
<?php if (!empty($events)): ?>
    <section>
        <div class="b-where-to group">
            <a href="<?php echo $this->schema['rubric']['fullUrl']; ?>" class="b-where-to_all-items"><?php echo Yii::t('afisha', 'Все'); ?></a>
            <h2 class="b-where-to_heading"><a href="<?php echo $this->schema['rubric']['fullUrl']; ?>" class="b-where-to_heading_lnk"><?php echo HtmlHelper::encode($this->schema['title']); ?> <?php if ($this->city->id != DEFAULT_CITY) : ?> в <?php echo HtmlHelper::encode($this->city->prepositional_title); ?><?php endif; ?></a></h2>
            <?php if (!empty($links)): ?>
                <ul class="b-where-to_list">
                    <?php foreach ($links as $link): ?>
                        <li class="b-where-to_list_item"><a href="<?php echo HtmlHelper::encode($link['url']); ?>" class="b-where-to_list_item_lnk"><?php echo HtmlHelper::encode($link['title']); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
        <div class="b-afisha-layout_maldives_strap">
            <ul class="b-afisha-layout_maldives_strap__list">
                <?php foreach ($events as $event): ?>
                    <?php if (empty($event)): ?>
                    <li></li>
                    <?php else: ?>
                    <li>
                        <div class="b-afisha-layout_strap--item">
                            <a href="<?php echo $event['fullUrl']; ?>" class="b-afisha_blocks-strap_item_lnk">
                                <?php if ($event['is_premiere'] == Constants::YES): ?><i class="b-afisha_blocks-movies_item_lnk_premier"></i><?php endif; ?>
                                <img class="b-afisha_blocks-movies_item_img" src="<?php echo HtmlHelper::encode($event['logoPath']); ?>" alt="<?php echo HtmlHelper::encode($event['title']); ?>">
                            </a>
                            <span class="b-afisha-layout_maldives_strap_date"><?php echo HtmlHelper::encode($event['formattedDate']['wide']); ?></span>
                            <a href="<?php echo HtmlHelper::encode($event['fullUrl']); ?>" class="b-afisha_blocks-strap_item_lnk_txt link link--colored"><?php echo empty($event['short_title']) ? HtmlHelper::encode($event['title']) : $event['short_title']; ?></a>
                            <?php if ($event['afishaEventPeriod']['place']['slideShowPlace']): ?>
                                <span class="b-afisha-layout_maldives_strap_place"><?php echo HtmlHelper::encode((!empty($event['afishaEventPeriod']['place']['info']['short_title']) ? $event['afishaEventPeriod']['place']['info']['short_title'] : $event['afishaEventPeriod']['place']['info']['title'])); ?></span>
                            <?php endif; ?>
                            <?php if (!empty($event['canBuyTicket']) && $event['canBuyTicket'] == Constants::YES): ?>
                                <a class="button button_xs button_theme-4 button_caps" href="<?php echo HtmlHelper::encode($event['fullUrl']); ?>"><?php echo Yii::t('afisha', 'Купить билет'); ?></a>
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>
