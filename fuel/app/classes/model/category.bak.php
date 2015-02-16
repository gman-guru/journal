<?php

class Model_Category extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'slug',
		'created_at',
		'updated_at',
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

	protected static $_table_name = 'categories';
        
        protected static $_belongs_to = array(
            'entry' => array(
                'key_from' => 'id',
                'model_to' => 'Model_Category_Entry',
                'key_to' => 'category_id',
                'cascade_save' => false,
                'cascade_delete' => false,
                ),
        );
        protected static $_has_many = array(
            'entries' => array(
                'key_from' => 'id',
                'model_to' => 'Model_Category_Entry',
                'key_to' => 'category_id',
                'cascade_save' => false,
                'cascade_delete' => false,
            )
        );

}
