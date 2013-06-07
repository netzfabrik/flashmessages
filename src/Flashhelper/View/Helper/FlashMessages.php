<?php
namespace Flashhelper\View\Helper;

use Zend\View\Helper\AbstractHelper;

class FlashMessages extends AbstractHelper
{
	/**
	 * invoke flashmessages helper
	 * @param string $type
	 * @return String
	 */
	public function __invoke($type = null)
	{
		$return = '';

		$messenger = $this->getView()->flashmessenger();

		if ( (is_null($type) || $type == 'success') && $messenger->hasSuccessMessages()) {
			foreach ($messenger->getSuccessMessages() as $message) {
				$return .= '<div class="alert alert-success"><span>' . $message . '</span></div>';
			}
		}

		if ( (is_null($type) || $type == 'info') && $messenger->hasMessages()) {
			foreach ($messenger->getMessages() as $message) {
				$return .= '<div class="alert"><span>' . $message . '</span></div>';
			}
		}

		if ( (is_null($type) || $type == 'error') && $messenger->hasErrorMessages()) {
			foreach ($messenger->getErrorMessages() as $message){
				$return .= '<div class="alert alert-danger"><span>' . $message . '</span></div>';
			}
		}

		return $return;
	}
}
