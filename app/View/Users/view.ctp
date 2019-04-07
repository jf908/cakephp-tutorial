<h1><?php echo h($user['User']['username']); ?></h1>
<p>
    Role: <?php echo $user['User']['role']; ?><br>
    Joined: <?php echo $user['User']['created']; ?>
</p>
<p>
    <?php echo h($user['User']['username']); ?> has made <?php echo sizeof($user['Post']) ?> posts.
</p>