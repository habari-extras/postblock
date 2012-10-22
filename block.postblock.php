<?php foreach((array)$content->posts as $post): ?>
<?php echo $theme->content($post, $content->context); ?>
<?php endforeach; ?>