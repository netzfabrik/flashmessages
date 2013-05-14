<?php
namespace Flashhelper\View\Helper;

use Zend\View\Helper\AbstractHelper;

class FlashMessages extends AbstractHelper
{
	/**
	 * invoke flashmessages helper
	 * @return String
	 */
	public function __invoke()
	{
		$return = '';

		$messenger = $this->getView()->flashmessenger();

		if ($messenger->hasSuccessMessages()) {
			foreach ($messenger->getSuccessMessages() as $message) {
				$return .= '<div class="alert alert-success"><span>' . $message . '</span></div>';
			}
		}

		if ($messenger->hasMessages()) {
			foreach ($messenger->getMessages() as $message) {
				$return .= '<div class="alert"><span>' . $message . '</span></div>';
			}
		}

		if ($messenger->hasErrorMessages()) {
			foreach ($messenger->getErrorMessages() as $message){
				$return .= '<div class="alert alert-danger"><span>' . $message . '</span></div>';
			}
		}

		return $return;
	}
}
