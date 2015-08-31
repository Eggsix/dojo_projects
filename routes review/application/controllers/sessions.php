<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Sessions {
		public function new_session()
		{
			echo "logged in";
		}
		public function destroy()
		{
			echo "destroy";
		}
	}
?>