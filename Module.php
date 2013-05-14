<?php
namespace Flashhelper;

use Flashhelper\View\Helper\FlashMessages;

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
					$helper = new FlashMessages();
					return $helper;
				},
			),
		);
	}

	public function getConfig()
	{
		return array();
	}

}
