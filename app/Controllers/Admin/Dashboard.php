<?php

namespace App\Controllers\Admin;

class Dashboard extends AdminBaseController
{
	function renderDashboard()
	{
		$this->data['title'] = 'Dashboard';
		return view($this->config->views['analytics-dashboard'], $this->data);
	}
}