<?php

class Model_Entry extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'slug',
		'excerpt',
		'content',
		'published_at',
		'created_at',
		'updated_at',
                'user_id'
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
                
                'Orm\Observer_Slug' => array(
                        'events' => array( 'before_insert', 'before_update'),
                        'source' => 'name',
                        'property' => 'slug',
                ),

	);

	protected static $_table_name = 'entries';
        
        protected static $_belongs_to = array(
        'user',
        'category' => array(
            'key_from' => 'id',
            'model_to' => 'Model_Category_Entry',
            'key_to' => 'entry_id',
            'cascade_save' => false,
            'cascade_delete' => false,
            ),
        );
        protected static $_has_many = array(
            'categories' => array(
                'key_from' => 'id',
                'model_to' => 'Model_Category_Entry',
                'key_to' => 'entry_id',
                'cascade_save' => false,
                'cascade_delete' => false,
            )
        );

}
