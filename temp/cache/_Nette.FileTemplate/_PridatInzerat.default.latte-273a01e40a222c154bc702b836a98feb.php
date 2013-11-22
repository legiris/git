<?php //netteCache[01]000401a:2:{s:4:"time";s:21:"0.91611100 1379840873";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:79:"E:\xampp\htdocs\web\kolobazar\sandbox\app\templates\PridatInzerat\default.latte";i:2;i:1379840855;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"80a7e46 released on 2013-08-08";}}}?><?php

// source file: E:\xampp\htdocs\web\kolobazar\sandbox\app\templates\PridatInzerat\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'bo5kn37c6l')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbc173544df7_content')) { function _lbc173544df7_content($_l, $_args) { extract($_args)
?><div id="page">

<h1>Kolobazar</h1>

<div id="top-menu">
	<p>Přidání nového inzerátu</p>
</div>

<div id="table">
	<div id="ad">

<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = (is_object("ad") ? "ad" : $_control["ad"]), array()) ?>
		<?php $_input = is_object("title") ? "title" : $_form["title"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
 <?php $_input = (is_object("title") ? "title" : $_form["title"]); echo $_input->getControl()->addAttributes(array()) ?>

<?php $_input = (is_object("submit") ? "submit" : $_form["submit"]); echo $_input->getControl()->addAttributes(array()) ;Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>


	</div>
</div>


</div>	<!-- /page -->

<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 