<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Image Effects',
	'description' => 'Assign effects to images in sys_file_reference',
	'category' => 'fe',
	'state' => 'stable',
	'version' => '1.0.0',
	'constraints' => [
		'depends' => [
			'typo3' => '7.6.18-7.6.99',
        ],
    ],
];
