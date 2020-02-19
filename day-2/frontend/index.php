<?PHP

$pokemon = $_GET["name"];
$cr = curl_init();
curl_setopt($cr, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/".$pokemon."/");
curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
$retorno = curl_exec($cr);
echo $retorno;
curl_close($cr);
?>
