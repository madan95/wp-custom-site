<div>
    <h1>Template called</h1>
    <?php echo wp_kses_post($instance['some_text']); ?>
    <?php echo wp_get_attachment_image(wp_kses_post($instance['some_media'])); ?>
</div>