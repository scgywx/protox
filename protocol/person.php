<?php
class person_protocol extends protox
{
	protected $fields = array(
		'name' => 'string',
		'age' => 'int',
		'phone' => 'string',
		'address' => 'string',
		'qq' => 'string|optional',
		'email' => 'string|optional',
	);
}