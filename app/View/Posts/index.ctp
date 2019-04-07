<h1>Blog posts</h1>
<?php
if($loggedIn) {
    echo $this->Html->link(
        '<button>Add post</button>',
        array('controller' => 'posts', 'action' => 'add'),
        array('escape' => false)
    );
?> <?php
    echo $this->Html->link(
        '<button>Logout</button>',
        array('controller' => 'users', 'action' => 'logout'),
        array('escape' => false)
    );
} else {
    echo $this->Html->link(
        '<button>Sign up</button>',
        array('controller' => 'users', 'action' => 'add'),
        array('escape' => false)
    );
?> <?php
    echo $this->Html->link(
        '<button>Login</button>',
        array('controller' => 'users', 'action' => 'login'),
        array('escape' => false)
    );
} ?>
<table class="full-width striped">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Author</th>
        <th>Created</th>
    </tr>

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link($post['Post']['title'], array(
                    'controller' => 'posts',
                    'action' => 'view',
                    $post['Post']['id']
                ));
            ?>
            <div style="float:right">
            <?php
                echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));
            ?>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array(
                        'action' => 'delete',
                        $post['Post']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            </div>
        </td>
        <td><?php echo h($post['User']['username']); ?></td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>