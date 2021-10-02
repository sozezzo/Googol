<?php 
# AEFFACER
define('GOOGLE_REGEX_WEB','#><a href="\/url\?q=(?<link>[^"]+)&sa=[^^]*?<div[^>]+>(?<title>[^^]*?)<\/div>[^^]*?<div[^>]+>(?<soustitre>[^^]*?)<\/div>[^^]+?<div[^>]+>(?<description>[^^]*?)\.\.\.[^^]*?<\/div>#s');
define('GOOGLE_REGEX_NEWS','\/url\?q=(?<link>[^"]*?)&[^^]*?>(?<title>[^^]*?)<\/a>[^^]*?<span class="f">(?<date>[^^]*?)<\/span>[^^]*?<div class="st">(?<description>[^^]*?)<\/div>[^^]*?src="(?<thumbnail>[^"]*?)"#s');
define('GOOGLE_REGEX_VIDEOS','#\/url\?q=(?<link>[^"]*?)&sa[^^]*?>(?<title>[^^]*?)<\/a>[^^]*?<img.*?src="(?<thumbnail>[^"]+)".*?style="width:(?<w>[0-9]+)[^^]*?<span class=[^^]*?>(?<description>[^^]*?)<\/div>#');
define('GOOGLE_REGEX_VIDEOS_THUMBS','#<img.*?src="([^"]+)".*?style="width:([0-9]+)"#');
define('GOOGLE_REGEX_IMG','#\/url\?q=(?<link>[^"]*?)&sa=[^^]*?height="(?<h>[0-9]*?)" src="(?<thumbnail>[^"]*?)" width="(?<w>[0-9]*?)"[^^]*?(?<info>[0-9]+ × [0-9]+ - [0-9]+.*?)<\/td>#');
define('GOOGLE_REGEX_PAGES','#&start=([0-9]+)#');

# bannished
define('BANNISHED_REGEX_WEB','#class="w-gl__result-title"[^^]*?href="(?<link>[^"]+)"[^^]*?>(?<title>[^^]*?)<\/a>[^^]*?class="w-gl__description">(?<description>[^^]*?)<\/p>#s');
define('BANNISHED_REGEX_NEWS','\/url\?q=(?<link>[^"]*?)&[^^]*?>(?<title>[^^]*?)<\/a>[^^]*?<span class="f">(?<date>[^^]*?)<\/span>[^^]*?<div class="st">(?<description>[^^]*?)<\/div>[^^]*?src="(?<thumbnail>[^"]*?)"#s');
define('BANNISHED_REGEX_VIDEOS','#\/url\?q=(?<link>[^"]*?)&sa[^^]*?>(?<title>[^^]*?)<\/a>[^^]*?<img.*?src="(?<thumbnail>[^"]+)".*?style="width:(?<w>[0-9]+)[^^]*?<span class=[^^]*?>(?<description>[^^]*?)<\/div>#');
define('BANNISHED_REGEX_VIDEOS_THUMBS','#<img.*?src="([^"]+)".*?style="width:([0-9]+)"#');
define('BANNISHED_REGEX_IMG','#\/url\?q=(?<link>[^"]*?)&sa=[^^]*?height="(?<h>[0-9]*?)" src="(?<thumbnail>[^"]*?)" width="(?<w>[0-9]*?)"[^^]*?(?<info>[0-9]+ × [0-9]+ - [0-9]+.*?)<\/td>#');
define('BANNISHED_REGEX_PAGES','#&start=([0-9]+)#');