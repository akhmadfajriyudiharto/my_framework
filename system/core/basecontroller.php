<?php

class BaseController {

	protected $a_model = array();

	protected function view($view, $layout = null, $data = null) {

		$path = VIEWPATH.'/'.$view.'.php';

		if (!file_exists($path))
		{
			show_error('Unable to load the requested file: '.$path);
		}

		if (empty($layout)) {
			include($path);
		}else{

			include($path);
			$content = ob_get_contents();
			ob_clean();
			include(VIEWPATH.'/layouts/'.$layout.'.php');
		}
    }

	protected function model($model, $db_conn = FALSE) {

		if (in_array($model, $this->a_model, TRUE)) {
			return;
		}

		$model = ucfirst($model);

		$this->a_model[$model] = new $model();

		return $this->a_model[$model];
    }
}
?>