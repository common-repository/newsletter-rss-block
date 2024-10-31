<?php
/* @var $options array containing all the options of the current block */
/* @var $fields NewsletterFields */
?>

<?php $fields->url('url', __('Feed URL', 'newsletter-rss-block')) ?>

<div class="tnp-field-row">
    <div class="tnp-field-col-3">
        <?php $fields->select_number('max', __('Max', 'newsletter-rss-block'), 1, 20) ?>
    </div>
    <div class="tnp-field-col-3">
        <?php $fields->yesno('title', __('Title?', 'newsletter-rss-block')) ?>
    </div>
    <div class="tnp-field-col-3">
        <?php
        $fields->select('description', __('Description?', 'newsletter-rss-block'), ['0' => __('No'), '1' => __('Plain', 'newsletter-rss-block'), '2' => __('Unfiltered', 'newsletter-rss-block')],
                ['description' => __('Some RSS has no content other than the unfiltered description which may include images', 'newsletter-rss-block')])
        ?>
    </div>
    <div style="clear: both"></div>
</div>

<?php // Always add that at the bottom ?>
<?php $fields->block_commons() ?>



