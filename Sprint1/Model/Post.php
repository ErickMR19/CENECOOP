<?php
/**
 * Created by PhpStorm.
 * User: b20418
 * Date: 4/29/2015
 * Time: 1:55 PM
 */

class Post extends AppModel {
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
	
	public function isOwnedBy($post, $user) {
    return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
	}
}