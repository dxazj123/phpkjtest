<?php 
	final class Kuaixuephp{
		public static function run(){
			self::_set_const();
			// self::create_dir();
			// self::_import_file();
			// Application::run();
		}

		private static function _set_const(){
			// var_dump(__FILE__);

			$path = str_replace('\\', '/', __FILE__);
			define('KUAIXUEPHP_PATH',dirname($path));
			define('CONFIG_PAHT',KUAIXUEPHP_PATH.'/Config');
			define('DATA_PATH',KUAIXUEPHP_PATH.'/Data');
			define('LIB_PATH', KUAIXUEPHP_PATH.'/Lib');
			define('CORE_PATH',LIB_PATH.'/Core');
			define('FUNCTION',LIB_PATH.'/FUNCTION');

			define('ROOT_PATH',dirname(KUAIXUEPHP_PATH));

			define('APP_PATH',ROOT_PATH.'/'.APP_NAME);

			define('APP_CONFIG_PATH', APP_PATH.'/Config');
			define('APP_CONTROLLER_PATH',APP_PATH.'/Controller');
			define('APP_TPL_PATH',APP_PATH.'/Tpl');
			define('APP_PUBLIC_PATH',APP_TPL_PATH.'/public');
		}

		private static function _create_dir(){
			$arr = array(
				APP_PATH,
				APP_CONFIG_PATH,
				APP_CONTROLLER_PATH,
				APP_TPL_PATH,
				APP_PUBLIC_PATH
			);
			foreach ($$arr as $v) {
				is_dir($v) || mkdir($v,077);
			}
		}
	}

	Kuaixuephp::run();