<?php

/**
 * @version     1.0.0
 * @package     com_dashboard
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Sanjeev Shrestha <sanjeev@joomlaguru.com.np> - http://www.b-yy.com
 */
defined('_JEXEC') or die;

class DashboardFrontendHelper
{
	

	/**
	 * Get an instance of the named model
	 *
	 * @param string $name
	 *
	 * @return null|object
	 */
	public static function getModel($name)
	{
		$model = null;

		// If the file exists, let's
		if (file_exists(JPATH_SITE . '/components/com_dashboard/models/' . strtolower($name) . '.php'))
		{
			require_once JPATH_SITE . '/components/com_dashboard/models/' . strtolower($name) . '.php';
			$model = JModelLegacy::getInstance($name, 'DashboardModel');
		}

		return $model;
	}
}
