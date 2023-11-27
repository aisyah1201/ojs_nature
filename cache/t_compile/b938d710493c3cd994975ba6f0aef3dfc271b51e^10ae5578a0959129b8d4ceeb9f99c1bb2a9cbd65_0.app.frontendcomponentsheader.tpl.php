<?php
/* Smarty version 4.3.1, created on 2023-11-27 08:10:14
  from 'app:frontendcomponentsheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656440d615a651_53771017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ae5578a0959129b8d4ceeb9f99c1bb2a9cbd65' => 
    array (
      0 => 'app:frontendcomponentsheader.tpl',
      1 => 1701069007,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/headerHead.tpl' => 1,
  ),
),false)) {
function content_656440d615a651_53771017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojs33\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('showingLogo', true);
if ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && !$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_string($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('showingLogo', false);
}?>

<?php $_smarty_tpl->_assignInScope('onlineIssn', $_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('onlineIssn'));
$_smarty_tpl->_assignInScope('printIssn', $_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('printIssn'));?>

<!DOCTYPE html>
<html lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
" xml:lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
">
<?php if (!$_smarty_tpl->tpl_vars['pageTitleTranslated']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitleTranslated", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['pageTitle']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="pkp_page_<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp);?>
 pkp_op_<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedOp']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp);
if ($_smarty_tpl->tpl_vars['showingLogo']->value) {?> has_site_logo<?php }?>">
	<span class="hidden">Novelty OJS 3 Theme by openjournaltheme.com theme</span>

	<?php if ($_smarty_tpl->tpl_vars['isMaintenanceMode']->value) {?>
	<div id="maintenance_container">
		<!-- Other elements here -->
		<div id="maintenance_content" style="text-align:center; color: #DBB539; padding: 5px 0">
			<i class="fa fa-wrench mr-3"> </i> <a href="https://openjournaltheme.com" style="color: #DBB539; padding: 5px 0"> Site is in maintenance mode</a>			
		</div>
	</div>
	<?php }?>
	
	
	
	<div class="pkp_structure_page">

		<nav id="accessibility-nav" class="sr-only" role="navigation" aria-labelled-by="accessible-menu-label">
			<div id="accessible-menu-label">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.novelty.accessible_menu.label"),$_smarty_tpl ) ) ));?>

			</div>
			<ul>
			  <li><a href="#main-navigation"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.novelty.accessible_menu.main_navigation"),$_smarty_tpl ) ) ));?>
</a></li>
			  <li><a href="#main-content"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.novelty.accessible_menu.main_content"),$_smarty_tpl ) ) ));?>
</a></li>
			  <li><a href="#sidebar"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.novelty.accessible_menu.sidebar"),$_smarty_tpl ) ) ));?>
</a></li>
			</ul>
		</nav>
				<header class="navbar navbar-default" id="headerNavigationContainer" role="banner">
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "homeUrl", null);?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index",'router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null)),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
						<div class="container">
				<div class="row">
					<div class="col-md-3 journal_logo">
						<?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_array($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value)) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="navbar-brand navbar-brand-logo">
								<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['uploadName'],"url" ));?>
" <?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] != '') {?>alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] ));?>
"<?php }?>>
							</a>
						<?php } elseif ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && !$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_string($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="navbar-brand"><?php echo $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value;?>
</a>
						<?php } elseif ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && !$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_array($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="navbar-brand navbar-brand-logo">
								<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value['uploadName'],"url" ));?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value['altText'] ));?>
">
							</a>
						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="navbar-brand">
								Journal Logo 
							</a>
						<?php }?>
					</div>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "primaryMenu", null);?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"primary",'id'=>"main-navigation",'ulClass'=>"nav navbar-nav"),$_smarty_tpl ) );?>

					<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	
					<?php if (!empty(trim($_smarty_tpl->tpl_vars['primaryMenu']->value)) || $_smarty_tpl->tpl_vars['currentContext']->value) {?>
						
						<nav id="nav-menu" class="navbar-collapse collapse" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.site"),$_smarty_tpl ) ) ));?>
">
														<?php echo $_smarty_tpl->tpl_vars['primaryMenu']->value;?>

	
							
														<nav aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.user"),$_smarty_tpl ) ) ));?>
" class="pull-md-right" >
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"user",'id'=>"navigationUser",'ulClass'=>"nav nav-pills tab-list pull-right"),$_smarty_tpl ) );?>

							</nav>
																				</nav>
					<?php }?>
					<div>
						
						
											</div>
				</div>
			</div>

				
			<div class="container main_menu">
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "primaryMenu", null);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"primary",'id'=>"main-navigation",'ulClass'=>"nav navbar-nav"),$_smarty_tpl ) );?>

				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<?php if (!empty(trim($_smarty_tpl->tpl_vars['primaryMenu']->value)) || $_smarty_tpl->tpl_vars['currentContext']->value) {?>
					
																	
																	</nav>
				<?php }?>
			</div>
				
				<div class="navbar-header">

										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

										<?php if ($_smarty_tpl->tpl_vars['requestedOp']->value == 'index') {?>
						<h1 class="site-name">
					<?php } else { ?>
						<div class="site-name">
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['requestedOp']->value == 'index') {?>
						</h1>
					<?php } else { ?>
						</div>
					<?php }?>

				</div>

								<div class="about_jurnal container">
					<?php if ($_smarty_tpl->tpl_vars['currentContext']->value) {?>
						<div class="pkp_structure_content">
							<div class="gambar-container">
								<img src="C:\xampp\htdocs\ojs33\plugins\generic\ojtPlugin\modules\novelty\images\diskusi.jpg">
							</div>
								<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.about"),$_smarty_tpl ) );?>
 </h1>
								<p>
									<?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedSetting('about');?>

								</p>
						</div>
						<?php }?>
				</div>
			</div><!-- .pkp_head_wrapper -->



			
		</header><!-- .pkp_structure_head -->

				<div class="pkp_structure_content container">
		    <aside id="left" class="col-md-3"> </aside>
			<main class="pkp_structure_main col-xs-12 col-sm-10 col-md-6" role="main">
<?php }
}
