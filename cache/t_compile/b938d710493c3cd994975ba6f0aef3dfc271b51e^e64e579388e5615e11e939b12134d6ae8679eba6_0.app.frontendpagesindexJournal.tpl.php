<?php
/* Smarty version 4.3.1, created on 2023-11-27 08:07:54
  from 'app:frontendpagesindexJournal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6564404aa03a02_88188263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64e579388e5615e11e939b12134d6ae8679eba6' => 
    array (
      0 => 'app:frontendpagesindexJournal.tpl',
      1 => 1699251809,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/objects/announcement_summary.tpl' => 1,
    'app:frontend/objects/issue_toc.tpl' => 2,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_6564404aa03a02_88188263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojs33\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedName()), 0, false);
?>

<div id="main-content" class="page_index_journal" role="content">

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Index::journal"),$_smarty_tpl ) );?>


	<?php if ($_smarty_tpl->tpl_vars['homepageImage']->value) {?>
		<div class="homepage-image">
			<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepageImage']->value['uploadName'],"url" ));?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepageImageAltText']->value ));?>
" height="400" width="600">
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['journalDescription']->value) {?>
		<div class="journal-description">
			<?php echo $_smarty_tpl->tpl_vars['journalDescription']->value;?>

		</div>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['additionalHomeContent']->value) {?>
		<section class="additional_content">
			<?php echo $_smarty_tpl->tpl_vars['additionalHomeContent']->value;?>

		</section>
	<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['numAnnouncementsHomepage']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['announcements']->value)) {?>
		<section class="cmp_announcements media">
			<header class="page-header">
				<h2>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"announcement.announcements"),$_smarty_tpl ) );?>

				</h2>
			</header>
			<div class="media-list">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement', false, NULL, 'announcements', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_announcements']->value['iteration']++;
?>
					<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_announcements']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_announcements']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['numAnnouncementsHomepage']->value) {?>
						<?php break 1;?>
					<?php }?>
					<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/announcement_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('heading'=>"h3"), 0, true);
?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</section>
	<?php }?>

	 <div class="row issue_tab pb-4">
		<div class="col-md-12 issue_tab_container">			

			<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#current_issue" data-toggle="tab">
							<svg class="icon line-color" id="date-check" data-name="Line color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path id="primary" d="M20,21H4a1,1,0,0,1-1-1V9H21V20A1,1,0,0,1,20,21ZM21,5a1,1,0,0,0-1-1H4A1,1,0,0,0,3,5V9H21Z" style="fill: none; stroke: rgb(101, 45, 144); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;"></path><path id="secondary" d="M16,3V6M8,3V6m1,9,2,2,4-4" style="fill: none; stroke: rgb(246, 146, 30); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;"></path></svg>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.currentIssue"),$_smarty_tpl ) );?>

							</a>
						</li>
						<?php if ($_smarty_tpl->tpl_vars['futureIssue']->value) {?>
						<li>
							<a href="#upcoming_issue" data-toggle="tab">
							<svg class="icon line-color" id="date-forward" data-name="Line color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path id="primary" d="M20,21H4a1,1,0,0,1-1-1V9H21V20A1,1,0,0,1,20,21ZM21,5a1,1,0,0,0-1-1H4A1,1,0,0,0,3,5V9H21Z" style="fill: none; stroke: rgb(101, 45, 144); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;"></path><path id="secondary" d="M16,3V6M8,3V6m7,11a4,4,0,0,0-8,0m5-1,3,1,2-3" style="fill: none; stroke: rgb(246, 146, 30); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;"></path></svg>
							
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.upcomingIssue"),$_smarty_tpl ) );?>

							</a>
						</li>
						<?php }?>
						
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in  active" id="current_issue">
														<?php if ($_smarty_tpl->tpl_vars['issue']->value) {?>
								<section class="current_issue animatedParent">
									<header class="page-header my-4">
										<h2 class="animated fadeIn">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.currentIssue"),$_smarty_tpl ) );?>

										</h2>
									</header>
									<p class="current_issue_title lead">
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() ));?>

									</p>
									
									<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/issue_toc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

									<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"issue",'op'=>"archive"),$_smarty_tpl ) );?>
" class="btn btn-primary read-more">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.viewAllIssues"),$_smarty_tpl ) );?>

										<span class="glyphicon glyphicon-chevron-right"></span>
									</a>
								</section>
							<?php }?>
						</div>


						 						<?php if (($_smarty_tpl->tpl_vars['futureIssue']->value && $_smarty_tpl->tpl_vars['isEnableUpcomingIssue']->value)) {?>
						<div role="tabpanel" class="tab-pane fade " id="upcoming_issue">

						
							<section class="upcoming_issue issue_identification">
								<header class="page-header my-4">
									<h2>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.upcomingIssue"),$_smarty_tpl ) );?>

									</h2>
								</header>
								<p class="upcoming_issue_title lead">
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['futureIssue']->value->getIssueIdentification() ));?>
							
								</p>							

								<div class="future_article_list">							

									<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/issue_toc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('issue'=>$_smarty_tpl->tpl_vars['futureIssue']->value,'issueGalleys'=>$_smarty_tpl->tpl_vars['futureissueGalleys']->value,'publishedSubmissions'=>$_smarty_tpl->tpl_vars['futureSections']->value), 0, true);
?>

								</div>

									
								</section>							

						
						</div>
						<?php }?>
						
					
						
					</div>
				</div>
			</div>


	

	
</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
