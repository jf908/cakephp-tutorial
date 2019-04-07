<h1><?php echo h($post['Post']['title']); ?></h1>
<p>
    Created <?php echo $post['Post']['created']; ?> by <?php echo h($post['User']['username']) ?>
</p>
<p><?php echo h($post['Post']['body']); ?></p>