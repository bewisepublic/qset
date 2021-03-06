<?php
/**
 * @version     1.0.0
 * @package     com_dashboard
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Sanjeev Shrestha <sanjeev@joomlaguru.com.np> - http://www.b-yy.com
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_dashboard')) 
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JControllerLegacy::getInstance('Dashboard');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
