<?php
if ($_GET['text']) {
	$url = 'http://simsimi.com/getRealtimeReq?lc=vi&ft=0&reqText=' . urlencode($_GET['text']);
	&json = json_decode(httpGet($url));
	echo $json_decode(httpGet($url));
}else {
	die('Cannot GET/');
}
function httpGet ($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURL_RETURNTRANSFER, true);
	curl_setopt($ch, CURL_COOKIE, 'currentChatCnt=0; _gat=1; dotcom_session_key=s:0mkDonJwdByLzZwkMbrpullFHeBNil33.EaBZYZ28rSUs5TjSX4I7+qZHHhMYr560AF48S6MdGFs; _ga=GA1.2.1059986034.1503674518; _gid=GA1.2.508694618.1503674518; normalProb=2; lc=vn');
	$output = curl_exec($ch);
	curl_close($ch);
	return $output;
}
?>
