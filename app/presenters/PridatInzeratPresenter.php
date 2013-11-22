<?php

use Nette\Application\UI\Form;

/**
 * Description of PridatInzeratPresenter
 *
 * @author Admin
 */
class PridatInzeratPresenter extends BasePresenter
{
	
	protected function createComponentAd()
	{
		$form = new Form();
		$form->addText('title', 'Titulek inzerátu');
		$form->addText('text', 'Text inzerátu');
		$form->addText('price', 'Cena');
		$form->addText('email', 'E-mail');
		$form->addText('phone', 'Phone');
		$form->addText('password', 'Heslo');
		$form->addSubmit('submit', 'Přidat inzerát');
		$form->onSuccess[] = $this->adSubmitted;
		return $form;
	}
	
	public function adSubmitted(Form $form)
	{
		$this->flashMessage('Musime ulozit.');
		$this->redirect('Homepage:default');
	}
	
}

