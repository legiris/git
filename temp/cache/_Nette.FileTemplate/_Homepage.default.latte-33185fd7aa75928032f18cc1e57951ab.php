<?php //netteCache[01]000396a:2:{s:4:"time";s:21:"0.73786100 1379761524";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:74:"E:\xampp\htdocs\web\kolobazar\sandbox\app\templates\Homepage\default.latte";i:2;i:1379761521;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"80a7e46 released on 2013-08-08";}}}?><?php

// source file: E:\xampp\htdocs\web\kolobazar\sandbox\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'aloxu48k2t')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb6755cf91c6_content')) { function _lb6755cf91c6_content($_l, $_args) { extract($_args)
?><div id="page">

<h1>Kolobazar</h1>

<div id="top-menu">
<p><a href="<?php echo htmlSpecialChars($basePath) ?>/pridat-inzerat/" title="Chci vložit inzerát">Přidat inzerát</a></p>
</div>

<div id="table">
<?php $iterations = 0; foreach ($ads as $ad): ?>
	<div class="ad">	
		<div class="ad-title"> <?php echo Nette\Templating\Helpers::escapeHtml($ad->typeName, ENT_NOQUOTES) ?>
: <?php echo Nette\Templating\Helpers::escapeHtml($ad->title, ENT_NOQUOTES) ?> | <?php echo Nette\Templating\Helpers::escapeHtml($ad->date, ENT_NOQUOTES) ?> </div>
		<div class="ad-description"> <?php echo Nette\Templating\Helpers::escapeHtml($ad->text, ENT_NOQUOTES) ?> </div>
		<div class="ad-info"> Cena: <?php echo Nette\Templating\Helpers::escapeHtml($ad->price, ENT_NOQUOTES) ?>
 Kč &nbsp;&nbsp;&nbsp;&bull;&nbsp; Region: <?php echo Nette\Templating\Helpers::escapeHtml($ad->regionName, ENT_NOQUOTES) ?> &nbsp;&nbsp;&nbsp;&bull;&nbsp;
			<?php echo Nette\Templating\Helpers::escapeHtml($ad->categoryName, ENT_NOQUOTES) ?> </div>
	</div>	<!-- /ad -->
<?php $iterations++; endforeach ?>
</div>	<!-- /table -->




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