<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "vhsminify".
 *
 * Auto generated 02-09-2019 10:37
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Minify for vhs assets',
    'description' => 'minify for vhs assets',
    'category' => 'frontend',
    'author' => 'Raphael Zschorsch',
    'author_email' => 'rafu1987@gmail.com',
    'state' => 'excludeFromUpdates',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'version' => '2.0.2-ecom',
    'constraints' =>
        array(
            'depends' =>
                array(
                    'typo3' => '7.6.0-9.99.99',
                    'php' => '7.0.0-7.2.99',
                    'vhs' => ''
                ),
            'conflicts' =>
                array(),
            'suggests' =>
                array(),
        ),
    'autoload' =>
        array(
            'psr-4' =>
                array(
                    "RZ\\Vhsminify\\" => "Classes",
                    "MatthiasMullie\\PathConverter\\" => "vendor/matthiasmullie/path-converter/src",
                    "MatthiasMullie\\Minify\\" => "vendor/matthiasmullie/minify/src"
                ),
        ),
    'clearcacheonload' => true,
    'author_company' => NULL,
);

