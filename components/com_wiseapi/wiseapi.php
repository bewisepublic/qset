<?php
/**
 * @version     1.0.0
 * @package     com_wiseapi
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Sanjeev Shrestha <sanjeev@joomlaguru.com.np> - http://www.b-yy.com
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

// Execute the task.
$controller	= JControllerLegacy::getInstance('Wiseapi');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
