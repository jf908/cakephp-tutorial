<h1>Users</h1>
<table class="full-width striped">
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Posts</th>
        <th>Role</th>
        <th>Joined</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link($user['User']['username'], array(
                    'controller' => 'users',
                    'action' => 'view',
                    $user['User']['id']
                ));
            ?>
        </td>
        <td><?php echo sizeof($user['Post']); ?></td>
        <td><?php echo $user['User']['role']; ?></td>
        <td><?php echo $user['User']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>