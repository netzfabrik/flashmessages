Flashmessages in Twitter Bootstrap style
========================================

This Zend Framework 2 module provides a view helper for displaying FlashMessenger messages in Twitter Bootstrap style with the according css classes.

## Installation

Add the module by adding the repository to your composer.json file:

	{
		"repositories": [
	        {
	            "type": "vcs",
	            "url": "https://github.com/netzfabrik/flashmessages"
	        }
	    ],
	    "require": {
	        "netzfabrik/flashmessages": "*"
	    }
	}	

Afterwards run an update to fetch the module to your vendor path

	composer update

Add the new module to your application.config in the application root and you are done.

	return array(
		'modules' => array(
			'<some_module>',
			'<another_module>',
			'Flashhelper'
		),

## Usage

Use the Zend Framework 2 FlashMessenger plugin as usual and append messages of different types (controller examples below).

For error messages:

	$this->flashMessenger()->addErrorMessage('An error occured');

For success messages:

	$this->flashMessenger()->addSuccessMessage('Yeah - it worked!');

For info messages:

	$this->flashMessenger()->addMessage('Remember to switch off coffee machine'); 


You can render the messages by using the viewhelper `flashmessages()` somewhere in your view templates. 
 
	<?php echo $this->flashmessages() ?>

The outcome will be div containers wrapped around a span in Twitter Bootstrap style

	<div class="alert alert-danger"><span>An error occured</span></div> 
	<div class="alert alert-success"><span>Yeah - it worked!</span></div>
	<div class="alert"><span>Remember to switch off coffee machine</span></div>

Optionally you can define the type of messages to be displayed by the viewhelper by passing one of the following parameters: `error`, `info` or `success`. If you leave the parameter empty, all types of messages will be rendered in order `success`, `info` and then `error`. 

	<?php echo $this->flashmessages('info') ?>

will result in:

	<div class="alert"><span>Remember to switch off coffee machine</span></div>
