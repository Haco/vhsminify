<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "vhsminify"
 *
 * Auto generated by Extension Builder 2018-06-27
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Minify for vhs assets',
    'description' => 'minify for vhs assets',
    'category' => 'frontend',
    'author' => 'Raphael Zschorsch',
    'author_email' => 'rafu1987@gmail.com',
    'state' => 'beta',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'extbase' => '8.7.0-9.3.99',
            'fluid' => '8.7.0-9.3.99',
            'typo3' => '8.7.0-9.3.99',
            'php' => '7.0.0-7.2.99',
            'vhs' => '',
        ],
        'conflicts' => [

        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'RZ\\Vhsminify\\' => 'Classes',
            'MatthiasMullie\\Minify\\' => 'Classes/Minify/',
            'MatthiasMullie\\PathConverter\\' => 'Classes/PathConverter/',
        ],
    ],
];
