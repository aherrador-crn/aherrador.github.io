<?php /* Smarty version Smarty-3.1.19, created on 2017-03-10 17:22:35
         compiled from "/Users/aherrador/Google Drive/AGS2/M08/m08herrador/prestashop/admin360dekd4w/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75711231158c2d2cbd376a0-05911220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28ed585d051f4e03bdb88510fc05f85f889f7c11' => 
    array (
      0 => '/Users/aherrador/Google Drive/AGS2/M08/m08herrador/prestashop/admin360dekd4w/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1482157020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75711231158c2d2cbd376a0-05911220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c2d2cbd428b4_57154222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c2d2cbd428b4_57154222')) {function content_58c2d2cbd428b4_57154222($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
