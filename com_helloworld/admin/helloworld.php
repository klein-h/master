<?php

defined('_JEXEC') or die('Restricted access');

$controller = JControllerLegacy::getInstance('HelloWorld');

$controller->execute(JFactory::getApplication()->input->get('task'));

$controller->redirect();
