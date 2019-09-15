<?php 
	final class Kuaixuephp{
		public static function run(){
			self::_set_const();
			self::create_dir();
			self::_import_file();
			Application::run();
		}

		private static function _set_const(){
			// var_dump(__FILE__);
			
		}
	}

	Kuaixuephp::run();