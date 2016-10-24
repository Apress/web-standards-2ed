// Listing 4-4. Content negotiation in PHP

$accept = $_SERVER["HTTP_ACCEPT"];
$ua = $_SERVER["HTTP_USER_AGENT"];
if (isset($accept) && isset($ua)) {
	if (stristr($accept, "application/xhtml+xml") || stristr($ua, "W3C_Validator")) {
	header("Content-Type: application/xhtml+xml");
	}
}