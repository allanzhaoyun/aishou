<?phpif (!(defined('IN_IA'))) {	exit('Access Denied');}define('IN_GW', true);define('MODEL_NAME','ox_reclaim');require_once IA_ROOT . '/addons/'.MODEL_NAME.'/application/bootstrap.php';class Ox_reclaimModuleSite extends WeModuleSite{    public function doWebWeb()    {        Application::run();    }}?>