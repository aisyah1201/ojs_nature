<?php
/* Smarty version 4.3.1, created on 2023-11-27 08:07:55
  from 'app:frontendobjectsannouncement_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6564404b616705_91304633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '660b223f3bf07582db114d3b754e5eef84375869' => 
    array (
      0 => 'app:frontendobjectsannouncement_summary.tpl',
      1 => 1699251809,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6564404b616705_91304633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojs33\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<article class="announcement-summary media">
	<div class="media-body">
				<p class="date">
			<span class="fa fa-calendar"></span>
			<?php if (($_smarty_tpl->tpl_vars['journalVersion']->value >= '33')) {?>
				<?php echo smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getDatePosted() )),$_smarty_tpl->tpl_vars['dateFormatLong']->value);?>

			<?php } else { ?>
				<?php echo smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getDatePosted() )),"%e %B %Y");?>

			<?php }?>
		</p>
		
		<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"announcement",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['announcement']->value->getId()),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescriptionShort() ));?>

		</a>
	</div>
</article><!-- .announcement-summary -->
<?php }
}
