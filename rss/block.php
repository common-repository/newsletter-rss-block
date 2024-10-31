<?php
/*
 * Name: RSS
 * Section: content
 * Description: Generates content from RSS feeds (and probably Atom as well)
 */

/* @var $options array */
/* @var $wpdb wpdb */


// On future releases of Newsletter, default options will be part of the options.php
// file, it is the best place to have them. By now, be patience.

$default_options = array(
    'max' => 10,
    'description' => 1,
    'title_font_family' => 'Helvetica, Arial, sans-serif',
    'title_font_size' => 24,
    'title_font_color' => '#000000',
    'title_font_weight' => 'bold',
    'font_family' => 'Helvetica, Arial, sans-serif',
    'font_size' => 16,
    'font_color' => '#000000',
    // block_ prefixed options are reserved for Newsletter and the ones below managed directly by Newsletter
    'block_padding_left' => 15,
    'block_padding_right' => 15,
    'block_padding_top' => 15,
    'block_padding_bottom' => 15,
    'block_background' => '#ffffff',
);

$options = array_merge($default_options, $options);

if (empty($options['url'])) {
    echo 'Please, set an RSS url.';
    return;
}

$feed = fetch_feed($options['url']);
if (is_wp_error($feed)) {
    echo $feed->get_error_message();
    return;
}

$max_items = $feed->get_item_quantity($options['max']);

/* @var $items SimplePie_Item[] */
$items = $feed->get_items(0, $max_items);

if (empty($items) || !is_array($items)) {
    echo 'No items';
    return;
}
?>
<?php
// The CSS classes below are expanded into the HTML tags by Newsletter and removed
// from the final block content
?>
<style>
    .image {
        width: 600px;
        max-width: 100%!important;
    }
    .title {
        font-size: <?php echo $options['title_font_size'] ?>px; 
        font-family: <?php echo $options['title_font_family'] ?>;
        color: <?php echo $options['title_font_color'] ?>;
        font-weight: <?php echo $options['title_font_weight'] ?>;
        margin-bottom: 15px;
        line-height: normal;
        text-decoration: none;
    }
    .title {
        font-size: <?php echo $options['font_size'] ?>px; 
        font-family: <?php echo $options['font_family'] ?>;
        color: <?php echo $options['font_color'] ?>;
        font-weight: <?php echo $options['font_weight'] ?>;
        margin-bottom: 15px;
        line-height: normal;
        text-decoration: none;
    }
    .link {
        text-decoration: none;
    }
    .post {
        margin-bottom: 30px;
    }
</style>
<?php foreach ($items as $item) { ?>
    <div inline-class="post">
        <a href="<?php echo esc_url($item->get_permalink()); ?>" inline-class="link">

            <?php if (!empty($options['title'])) { ?>
                <div inline-class="title"><?php echo esc_html($item->get_title()) ?></div>
            <?php } ?>

            <?php
            // Check for included images
            /* @var $enclosures SimplePie_Enclosure[] */
            $enclosures = $item->get_enclosures();
            foreach ($enclosures as $enclosure) {
                if ($enclosure->get_medium() === 'image') {
                    echo '<img src="' . $enclosure->get_link() . '" inline-class="image">';
                    echo '<br>';
                }
            }
            ?>

            <?php if (!empty($options['description'])) { ?>
                <?php if ($options['description'] == 1) { ?>
                    <div inline-class="description"><?php echo esc_html(strip_tags($item->get_description(true))) ?></div>
                <?php } else { ?>
                    <div inline-class="description"><?php echo $item->get_description(true) ?></div>
                <?php } ?>
            <?php } ?>
        </a>
    </div>
<?php } ?>
