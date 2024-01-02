<?php
/* Smarty version 3.1.48, created on 2024-01-02 16:38:25
  from '/var/www/html/prestashop/admin196kgymuc/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65942df10ed484_91135147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd117b219f9d63d54c950316537798eec44733bca' => 
    array (
      0 => '/var/www/html/prestashop/admin196kgymuc/themes/default/template/content.tpl',
      1 => 1704196978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65942df10ed484_91135147 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
