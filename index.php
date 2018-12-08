<?
header("Content-Type: text/html; charset=utf-8");

require_once ("config/config.php");
require_once("src/vendor/autoload.php");
require_once("src/traits/TraitUrlParser.php");
require_once("src/classes/ClassRoutes.php");

use Src\Classes\ClassRoutes;


/**
 * 
 */
class Teste extends ClassRoutes
{
	
	function __construct()
	{
		$teste = $this->getRota();
		var_dump($teste);
	}
}
$new = new Teste();
?>
