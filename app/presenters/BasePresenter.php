<?php

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	/** @var Ad */
	protected $ad;
	
	
	protected function startup()
	{
		parent::startup();
		
		//instance sluzby
		$this->ad = $this->context->ad;
	}
	
	
}
