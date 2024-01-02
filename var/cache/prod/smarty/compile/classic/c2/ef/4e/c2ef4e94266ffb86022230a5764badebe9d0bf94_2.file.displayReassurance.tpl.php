<?php
/* Smarty version 3.1.48, created on 2024-01-02 16:38:34
  from '/var/www/html/prestashop/modules/customtextdisplay/views/templates/hook/displayReassurance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65942dfa365124_19964237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2ef4e94266ffb86022230a5764badebe9d0bf94' => 
    array (
      0 => '/var/www/html/prestashop/modules/customtextdisplay/views/templates/hook/displayReassurance.tpl',
      1 => 1704208670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65942dfa365124_19964237 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['textoParaMostrar']->value)) && $_smarty_tpl->tpl_vars['textoParaMostrar']->value) {?>
    <div class="custom-text-display">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['textoParaMostrar']->value, ENT_QUOTES, 'UTF-8');?>

    </div>
<?php }
}
}
