<?php
/* Smarty version 4.3.1, created on 2023-11-27 08:07:56
  from 'app:frontendobjectsgalley_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6564404c273d39_25026855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9190456890661656c2db668fc3c363ee4354c517' => 
    array (
      0 => 'app:frontendobjectsgalley_link.tpl',
      1 => 1699252489,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6564404c273d39_25026855 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['journalOverride']->value) {?>
	<?php $_smarty_tpl->_assignInScope('currentJournal', $_smarty_tpl->tpl_vars['journalOverride']->value);
}?>

<?php if ($_smarty_tpl->tpl_vars['galley']->value->isPdfGalley()) {?>
	<?php $_smarty_tpl->_assignInScope('type', "pdf");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('type', "file");
}?>

<?php if ($_smarty_tpl->tpl_vars['parent']->value instanceOf Issue) {?>
	<?php $_smarty_tpl->_assignInScope('page', "issue");?>
	<?php $_smarty_tpl->_assignInScope('parentId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['parent']->value->getBestIssueId() )));
} else { ?>
	<?php $_smarty_tpl->_assignInScope('page', "article");?>
	<?php $_smarty_tpl->_assignInScope('parentId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['parent']->value->getBestArticleId() )));
}?>

<?php if (!$_smarty_tpl->tpl_vars['hasAccess']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['restrictOnlyPdf']->value && $_smarty_tpl->tpl_vars['type']->value == "pdf") {?>
		<?php $_smarty_tpl->_assignInScope('restricted', "1");?>
	<?php } elseif (!$_smarty_tpl->tpl_vars['restrictOnlyPdf']->value) {?>
		<?php $_smarty_tpl->_assignInScope('restricted', "1");?>
	<?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['parent']->value->getData('status') !== (defined('STATUS_PUBLISHED') ? constant('STATUS_PUBLISHED') : null) && $_smarty_tpl->tpl_vars['isEnableUpcomingIssue']->value == 1 && !$_smarty_tpl->tpl_vars['parent']->value instanceOf Issue) {?>
						<?php $_smarty_tpl->_assignInScope('galleyLink', '#');
} elseif ($_smarty_tpl->tpl_vars['parent']->value->getData('status') !== (defined('STATUS_PUBLISHED') ? constant('STATUS_PUBLISHED') : null) && $_smarty_tpl->tpl_vars['isEnableUpcomingIssue']->value == 2 && !$_smarty_tpl->tpl_vars['parent']->value instanceOf Issue) {?>
						<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>'upcoming','op'=>"view",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['parentId']->value,$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId($_smarty_tpl->tpl_vars['currentJournal']->value) ))),$_smarty_tpl ) ) ));
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('galleyLink', $_prefixVariable3);
} else { ?>
	<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['page']->value,'op'=>"view",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['parentId']->value,$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId($_smarty_tpl->tpl_vars['currentJournal']->value) ))),$_smarty_tpl ) ) ));
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('galleyLink', $_prefixVariable4);
}?>
<a class="galley-link btn <?php if ($_smarty_tpl->tpl_vars['isSupplementary']->value) {?>btn-default<?php } else { ?>btn-primary<?php }?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value ));
if ($_smarty_tpl->tpl_vars['restricted']->value) {?> restricted<?php }?>" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['page']->value,'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['path']->value),$_smarty_tpl ) );?>
"<?php if ($_smarty_tpl->tpl_vars['labelledBy']->value) {?> aria-labelledby=<?php echo $_smarty_tpl->tpl_vars['labelledBy']->value;
}?>>

		<?php if ($_smarty_tpl->tpl_vars['restricted']->value) {?>
		<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
		<span class="sr-only">
			<?php if ($_smarty_tpl->tpl_vars['purchaseArticleEnabled']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"reader.subscriptionOrFeeAccess"),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"reader.subscriptionAccess"),$_smarty_tpl ) );?>

			<?php }?>
		</span>
	<?php }?>

	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['galley']->value->getGalleyLabel() ));?>


	<?php if ($_smarty_tpl->tpl_vars['restricted']->value && $_smarty_tpl->tpl_vars['purchaseFee']->value && $_smarty_tpl->tpl_vars['purchaseCurrency']->value) {?>
		<span class="purchase-cost">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"reader.purchasePrice",'price'=>$_smarty_tpl->tpl_vars['purchaseFee']->value,'currency'=>$_smarty_tpl->tpl_vars['purchaseCurrency']->value),$_smarty_tpl ) );?>

		</span>
	<?php }?>
</a>
<?php }
}
