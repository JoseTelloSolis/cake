<?php /* Smarty version 3.1.27, created on 2021-08-09 19:33:56
         compiled from "C:\xampp\htdocs\cake\styles\templates\web\overall\sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:274885528611167047b4b85_22843384%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfd750a20afc0d21f08f58edf4267ba1321f9540' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\web\\overall\\sidebar.tpl',
      1 => 1611541605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274885528611167047b4b85_22843384',
  'variables' => 
  array (
    'masVistos' => 0,
    'buscar' => 0,
    'reemplazar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_611167047f0aa1_72102609',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_611167047f0aa1_72102609')) {
function content_611167047f0aa1_72102609 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\cake\\core\\libs\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\xampp\\htdocs\\cake\\core\\libs\\smarty\\plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '274885528611167047b4b85_22843384';
?>
        <div class="col-md-4 sidebar">

          <div class="celeste">
            <h2><span>Los más visto</span></h2>

            <div class="celeste-inner">
              <div class="row">

                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['masVistos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                  <div class="col-md-12 noticia noticia-sidebar">
                    <div class="imagen" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['masVistos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imagen'];?>
')">
                      <a href="noticias/<?php echo $_smarty_tpl->tpl_vars['masVistos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
"><img src="img/noticia_768x432.png" class="img-fluid"></a>
                    </div> 
                    <div class="texto">
                      <a href="categorias/<?php echo $_smarty_tpl->tpl_vars['masVistos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categoria_url'];?>
" class="tag" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['masVistos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categoria_color'];?>
"><?php echo $_smarty_tpl->tpl_vars['masVistos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categoria'];?>
</a>
                      <a href="noticias/<?php echo $_smarty_tpl->tpl_vars['masVistos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
" class="titulo"><?php echo $_smarty_tpl->tpl_vars['masVistos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo'];?>
</a>
                      <span class="fecha-autor">
                        <?php echo smarty_modifier_replace(smarty_modifier_date_format($_smarty_tpl->tpl_vars['masVistos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fecha'],"%e %B %Y"),$_smarty_tpl->tpl_vars['buscar']->value,$_smarty_tpl->tpl_vars['reemplazar']->value);?>

                        | Autor: DataPlayers
                      </span>
                    </div>
                  </div>
                <?php endfor; endif; ?>
                
              </div>
            </div>

          </div>

          <div class="banner mt-5">
            <img src="http://ximg.es/300x250/9b9b9b/fff" class="full-width">
          </div>

          <div class="banner mt-5">
            <img src="http://ximg.es/300x600/9b9b9b/fff" class="full-width">
          </div>

        </div><?php }
}
?>