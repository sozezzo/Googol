<?php
$searX = [
	'https://search.disroot.org/',
	'https://spot.ecloud.global/',
	'https://searx.elukerio.org/',
	'https://searx.laquadrature.net/',
	'https://wtf.roflcopter.fr/searx/'
];
$config['alternatives']=array(
	'DDG'=>['url'=>'https://duckduckgo.com/?','query_var'=>'q=','mode'=>'&ia='],
	'SearX'=>['url'=>$searX[mt_rand(0, count($searX) - 1)].'?','query_var'=>'q=','mode'=>'&ia='],
	'Qwant'=>['url'=>'https://www.qwant.com/?','query_var'=>'q=','mode'=>'&t=']
);