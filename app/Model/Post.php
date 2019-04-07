<?php

class Post extends AppModel {
    public $belongsTo = 'User';

    public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );

    // Returns true if $post is owned by $user
    public function isOwnedBy($post, $user) {
        return $this->field('id', array(
            'id' => $post,
            'user_id' => $user
        )) !== false;
    }
}