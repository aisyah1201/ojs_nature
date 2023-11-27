<?php
/* Smarty version 4.3.1, created on 2023-11-27 08:07:55
  from 'app:frontendobjectsarticle_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6564404baf0039_39486465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf1cd52b8ba8108de77f197078de34b733dd394' => 
    array (
      0 => 'app:frontendobjectsarticle_summary.tpl',
      1 => 1699251809,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/galley_link.tpl' => 1,
  ),
),false)) {
function content_6564404baf0039_39486465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojs33\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'C:\\xampp\\htdocs\\ojs33\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_assignInScope('articlePath', $_smarty_tpl->tpl_vars['article']->value->getBestArticleId($_smarty_tpl->tpl_vars['currentJournal']->value));?>

<?php if ((!$_smarty_tpl->tpl_vars['section']->value['hideAuthor'] && $_smarty_tpl->tpl_vars['article']->value->getHideAuthor() == (defined('AUTHOR_TOC_DEFAULT') ? constant('AUTHOR_TOC_DEFAULT') : null)) || $_smarty_tpl->tpl_vars['article']->value->getHideAuthor() == (defined('AUTHOR_TOC_SHOW') ? constant('AUTHOR_TOC_SHOW') : null)) {?>
  <?php $_smarty_tpl->_assignInScope('showAuthor', true);
}?>

<?php $_smarty_tpl->_assignInScope('publication', $_smarty_tpl->tpl_vars['article']->value->getCurrentPublication());?>

<?php $_smarty_tpl->_assignInScope('doi', $_smarty_tpl->tpl_vars['article']->value->getData('pub-id::doi'));
if (!$_smarty_tpl->tpl_vars['doi']->value) {?>
  <?php $_smarty_tpl->_assignInScope('doi', $_smarty_tpl->tpl_vars['publication']->value->getData('pub-id::doi'));
}?>

<?php $_smarty_tpl->_assignInScope('categoryIds', $_smarty_tpl->tpl_vars['article']->value->getData('categoryIds'));
if (!$_smarty_tpl->tpl_vars['categoryIds']->value) {?>
  <?php $_smarty_tpl->_assignInScope('categoryIds', $_smarty_tpl->tpl_vars['publication']->value->getData('categoryIds'));
}?>


<div class="article-summary media" data-article-id="<?php echo $_smarty_tpl->tpl_vars['article']->value->getId();?>
">




  <div class="media-body">



    <?php $_smarty_tpl->_assignInScope('isCoverAvailable', $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage());?>

    <?php if ($_smarty_tpl->tpl_vars['isCoverAvailable']->value) {?>
      <div class="col-md-3 col-xs-12 cover pl-0 pb-4">
        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageUrl() ));?>
" data-lightbox="image-<?php echo $_smarty_tpl->tpl_vars['article']->value->getId();?>
"
          data-title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>
">
          <img class="media-object" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageUrl() ));?>
">
        </a>
      </div>
    <?php }?>

    <div class="<?php if ($_smarty_tpl->tpl_vars['isCoverAvailable']->value) {?> col-md-9 px-0 <?php } else { ?> col-md-12 col-xs-12 px-0<?php }?>">

      <?php if ($_smarty_tpl->tpl_vars['isEnableArticleCategory']->value && $_smarty_tpl->tpl_vars['categoryIds']->value) {?>
        <div class="mb-3">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoryIds']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('category', $_smarty_tpl->tpl_vars['categoryDAO']->value->getById($_smarty_tpl->tpl_vars['category']->value));?>
            <?php $_smarty_tpl->_assignInScope('path', $_smarty_tpl->tpl_vars['category']->value->getPath());?>
            <small class="categories">
              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"catalog",'op'=>"category",'path'=>$_smarty_tpl->tpl_vars['category']->value->getPath()),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->getLocalizedTitle();?>

              </a>
            </small>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      <?php }?>

      <h3 class="media-heading mb-2 text-justify">
        <?php if ($_smarty_tpl->tpl_vars['article']->value->getStatus() !== (defined('STATUS_PUBLISHED') ? constant('STATUS_PUBLISHED') : null) && $_smarty_tpl->tpl_vars['isEnableUpcomingIssue']->value == 1) {?>
                    <?php $_smarty_tpl->_assignInScope('articleLink', '#');?>
        <?php } elseif ($_smarty_tpl->tpl_vars['article']->value->getStatus() !== (defined('STATUS_PUBLISHED') ? constant('STATUS_PUBLISHED') : null) && $_smarty_tpl->tpl_vars['isEnableUpcomingIssue']->value == 2) {?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"upcoming",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('articleLink', $_prefixVariable1);?>
        <?php } else { ?>
          <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('articleLink', $_prefixVariable2);?>
        <?php }?>

        <a href="<?php echo $_smarty_tpl->tpl_vars['articleLink']->value;?>
">
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

          <?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle()) {?>
            <p>
              <small><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle() ));?>
</small>
            </p>
          <?php }?>
        </a>
      </h3>

      <?php if ($_smarty_tpl->tpl_vars['showAuthor']->value || $_smarty_tpl->tpl_vars['article']->value->getPages()) {?>
        <?php if ($_smarty_tpl->tpl_vars['showAuthor']->value && !$_smarty_tpl->tpl_vars['activeTheme']->value->getOption('author_affiliation')) {?>
          <div class="meta">
            <?php if ($_smarty_tpl->tpl_vars['showAuthor']->value) {?>
              <div class="authors ">
                <?php echo smarty_modifier_truncate(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getAuthorString() )),100);?>

              </div>
            <?php }?>
          </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['showAuthor']->value && $_smarty_tpl->tpl_vars['activeTheme']->value->getOption('author_affiliation') && $_smarty_tpl->tpl_vars['publication']->value->getData('authors')) {?>
          <div class="author">
            <span class="authors">
              <i class="fa fa-users"> </i>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publication']->value->getData('authors'), 'author');
$_smarty_tpl->tpl_vars['author']->iteration = 0;
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
$_smarty_tpl->tpl_vars['author']->iteration++;
$__foreach_author_10_saved = $_smarty_tpl->tpl_vars['author'];
?>
                <?php echo $_smarty_tpl->tpl_vars['author']->value->getFullName();?>

                <sup>(<?php echo $_smarty_tpl->tpl_vars['author']->iteration;?>
)</sup><?php if ($_smarty_tpl->tpl_vars['author']->iteration !== smarty_modifier_count($_smarty_tpl->tpl_vars['publication']->value->getData('authors'))) {?>,<?php }?>
              <?php
$_smarty_tpl->tpl_vars['author'] = $__foreach_author_10_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </span>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publication']->value->getData('authors'), 'author', false, NULL, 'authors', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['author']->iteration = 0;
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
$_smarty_tpl->tpl_vars['author']->iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['total'];
$__foreach_author_11_saved = $_smarty_tpl->tpl_vars['author'];
?>
              <div style="font-style: italic; font-size:0.8em; color:#6e6e6e">
                (<?php echo $_smarty_tpl->tpl_vars['author']->iteration;?>
)
                <span class="author-affiliation" data-author-id="<?php echo $_smarty_tpl->tpl_vars['author']->value->getId();?>
">
                  <?php echo $_smarty_tpl->tpl_vars['author']->value->getLocalizedData('affiliation');?>
</span><?php if ($_smarty_tpl->tpl_vars['author']->value->getData('country')) {?><span
                    class="author-country"
                    data-author-id="<?php echo $_smarty_tpl->tpl_vars['author']->value->getId();?>
">,&nbsp;<?php echo $_smarty_tpl->tpl_vars['author']->value->getCountryLocalized();?>
</span><?php }
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['last'] : null)) {?><span>,</span><?php }?>
                </div>
              <?php
$_smarty_tpl->tpl_vars['author'] = $__foreach_author_11_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          <?php }?>

          <div class="row py-4">
            <?php if ($_smarty_tpl->tpl_vars['enableDimensionCitation']->value && !$_smarty_tpl->tpl_vars['hideDimensionsCitation']->value) {?>
              <div class="col-md-8 col-xs-6">
                <?php if ($_smarty_tpl->tpl_vars['doi']->value) {?>
                  <span class="__dimensions_badge_embed__" data-doi="<?php echo $_smarty_tpl->tpl_vars['doi']->value;?>
" data-style="large_rectangle"></span>
                <?php } else { ?>
                  <small class="font-italic text-grey ">DOI record not available </small>
                <?php }?>
              </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['article']->value->getPages()) {?>
              <div
                class="<?php if ($_smarty_tpl->tpl_vars['enableDimensionCitation']->value && !$_smarty_tpl->tpl_vars['hideDimensionsCitation']->value) {?>col-md-4 <?php } else { ?> col-md-12 <?php }?> col-xs-6 text-right page_number ">
                                <svg class="icon line-color" width="14" height="14" id="file-search" data-name="line color"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path id="primary"
                    d="M8,20H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3h8.59a1,1,0,0,1,.7.29l3.42,3.42a1,1,0,0,1,.29.7V8"
                    style="fill: none; stroke: rgb(101, 45, 144); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
                  </path>
                  <path id="secondary" d="M17,17.6,21,21m-7-2a4,4,0,1,0-4-4A4,4,0,0,0,14,19Z"
                    style="fill: none; stroke: rgb(246, 146, 30); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
                  </path>
                </svg>
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getPages() ));?>


              </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['enableStatistic']->value) {?>
              <div class="col-md-8 col-xs-12 article_statistic mt-3 px-0">
                <div class="col-md-7 col-xs-6 abstract_count pr-0">
                  <span class="article_stat">
                    <svg class="icon line-color" width="18" height="18" id="statistic-grow" data-name="Line Color"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <line id="secondary" x1="3" y1="19" x2="21" y2="19"
                        style="fill: none; stroke: rgb(246, 146, 30); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
                      </line>
                      <path id="primary" d="M21,5l-7,7L8,9,3,15m18-5V5H16"
                        style="fill: none; stroke: rgb(101, 45, 144); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
                      </path>
                    </svg>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.abstractViews"),$_smarty_tpl ) );?>
 : <?php echo $_smarty_tpl->tpl_vars['article']->value->getViews();?>

                  </span>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['article']->value->getGalleys()) {?>
                  <div class="col-md-5 col-xs-6 pdf_count  text-right text-sm-left px-md-0">
                    <?php $_smarty_tpl->_assignInScope('totalDownloadGalley', 0);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getGalleys(), 'galley');
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
                      <?php $_smarty_tpl->_assignInScope('totalDownloadGalley', $_smarty_tpl->tpl_vars['galley']->value->getViews()+$_smarty_tpl->tpl_vars['totalDownloadGalley']->value);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <svg class="icon line-color" width="15" height="15" id="down" data-name="Line Color"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <line id="secondary" x1="12" y1="21" x2="12" y2="3"
                        style="fill: none; stroke: rgb(246, 146, 30); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
                      </line>
                      <polyline id="primary" points="19 14 12 21 5 14"
                        style="fill: none; stroke: rgb(101, 45, 144); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
                      </polyline>
                    </svg>
                    <span class="galley_stat"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.download"),$_smarty_tpl ) );?>
 :<?php echo $_smarty_tpl->tpl_vars['totalDownloadGalley']->value;?>
 </span>
                  </div>
                <?php }?>
              </div>
            <?php }?>


            <div class="<?php if ($_smarty_tpl->tpl_vars['enableStatistic']->value) {?>col-md-4<?php } else { ?>col-md-12 <?php }?> col-xs-12 pl-0 text-right pr-0 pr-sm-1 pr-md-2">
              <?php if ($_smarty_tpl->tpl_vars['doi']->value) {?>
                <div class="doi_container">
                                    <a href="https://www.doi.org/<?php echo $_smarty_tpl->tpl_vars['doi']->value;?>
" class="doi_link"> <?php echo $_smarty_tpl->tpl_vars['doi']->value;?>
 </a>
                </div>
              <?php }?>
            </div>

          </div>
        <?php }?>


        <?php if (!$_smarty_tpl->tpl_vars['hideGalleys']->value && $_smarty_tpl->tpl_vars['article']->value->getGalleys()) {?>
          <div class="btn-group" role="group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getGalleys(), 'galley');
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
              <?php if ($_smarty_tpl->tpl_vars['primaryGenreIds']->value) {?>
                <?php $_smarty_tpl->_assignInScope('file', $_smarty_tpl->tpl_vars['galley']->value->getFile());?>
                <?php if (!$_smarty_tpl->tpl_vars['galley']->value->getRemoteUrl() && !($_smarty_tpl->tpl_vars['file']->value && in_array($_smarty_tpl->tpl_vars['file']->value->getGenreId(),$_smarty_tpl->tpl_vars['primaryGenreIds']->value))) {?>
                  <?php continue 1;?>
                <?php }?>
              <?php }?>
              <?php $_smarty_tpl->_assignInScope('hasArticleAccess', $_smarty_tpl->tpl_vars['hasAccess']->value);?>
              <?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getSetting('publishingMode') == (defined('PUBLISHING_MODE_OPEN') ? constant('PUBLISHING_MODE_OPEN') : null) || $_smarty_tpl->tpl_vars['publication']->value->getData('accessStatus') == (defined('ARTICLE_ACCESS_OPEN') ? constant('ARTICLE_ACCESS_OPEN') : null)) {?>
                <?php $_smarty_tpl->_assignInScope('hasArticleAccess', 1);?>
              <?php }?>
              <?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'hasAccess'=>$_smarty_tpl->tpl_vars['hasArticleAccess']->value), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        <?php }?>
      </div>



    </div>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Issue::Issue::Article"),$_smarty_tpl ) );?>

  </div><!-- .article-summary --><?php }
}
