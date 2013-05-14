<?php
namespace Flashhelper;

use Flashhelper\View\Helper\FlashMessages as ViewHelperFlashMessages;

class Module
{
	public function getAutoloaderConfig()
	{
		return array(
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
					__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
                )
			)
		);
	}

	public function getViewHelperConfig()
	{
		return array(
			'factories'=> array(
				'flashmessages' => function($sm) {
					$helper = new ViewHelperFlashMessages();
					return $helper;
				},
			),
		);
	}

	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}

}
