<?php

class Model_Categories_Entry extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'category_id',
		'entry_id',
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
	);

	protected static $_table_name = 'categories_entries';
        
        protected static $_belongs_to = array(
            'category',
            'entry',
        );

}
