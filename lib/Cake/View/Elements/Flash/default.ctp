<?php
$class = 'message alert danger';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<div id="<?php echo h($key) ?>Message" class="<?php echo h($class) ?>"><?php echo h($message) ?></div>
