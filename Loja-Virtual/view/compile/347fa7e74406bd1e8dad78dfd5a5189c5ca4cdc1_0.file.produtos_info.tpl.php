<?php
/* Smarty version 3.1.31, created on 2022-11-03 04:58:04
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\view\produtos_info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_63633c4c5e5189_56462611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '347fa7e74406bd1e8dad78dfd5a5189c5ca4cdc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\view\\produtos_info.tpl',
      1 => 1667447872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63633c4c5e5189_56462611 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="mx-auto max-w-7xl sm:px-6 sm:pt-16 lg:px-8">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
    
    <div class="mx-auto max-w-2xl lg:max-w-none">
      <!-- Product -->
      <div class="mb-8 lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">
        <!-- Image gallery -->
        <div class="flex flex-col-reverse">
          <!-- Image selector -->
          <div class="aspect-w-1 aspect-h-1 w-full mt-5 mb-5 flex flex-row p-4">
            <!-- Tab panel, show/hide based on tab state. -->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
              <div id="tabs-2-panel-1" aria-labelledby="tabs-2-tab-1" role="tabpanel" tabindex="0" class="">
                <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" alt="Angled front view with bag zipped and handles upright." class="h-full w-full object-cover object-center sm:rounded-lg">
              </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <!-- More images... -->
          </div>

          <div class="aspect-w-1 aspect-h-1 w-full">
            <!-- Tab panel, show/hide based on tab state. -->
            <div id="tabs-2-panel-1" aria-labelledby="tabs-2-tab-1" role="tabpanel" tabindex="0">
              <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="Angled front view with bag zipped and handles upright." class="h-full w-full object-cover object-center sm:rounded-lg">
            </div>

            <!-- More images... -->
          </div>

       
        </div>

        <!-- Product info -->
        <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
          <h1 class="text-5xl font-bold tracking-tight text-white"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h1>

          <div class="mt-3">
            <h2 class="sr-only">Informação do Produto</h2>
            <p class="text-4xl tracking-tight text-orange-700">R$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</p>
            <p class="text-4xl tracking-tight text-orange-700">Referência: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</p>
          </div>

          <!-- Reviews -->
          <div class="mt-3">
            <h3 class="sr-only">Avaliação</h3>
            <div class="flex items-center">
              <div class="flex items-center">
                <!--
                  Heroicon name: mini/star

                  Active: "text-indigo-500", Inactive: "text-gray-300"
                -->
                <svg class="h-8 w-8 flex-shrink-0 text-orange-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>

                <!-- Heroicon name: mini/star -->
                <svg class="h-8 w-8 flex-shrink-0 text-orange-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>

                <!-- Heroicon name: mini/star -->
                <svg class="h-8 w-8 flex-shrink-0 text-orange-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>

                <!-- Heroicon name: mini/star -->
                <svg class="h-8 w-8 flex-shrink-0 text-orange-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>

                <!-- Heroicon name: mini/star -->
                <svg class="h-8 w-8 flex-shrink-0 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>
              </div>
              <p class="sr-only">4 out of 5 stars</p>
            </div>
          </div>

          <div class="mt-6">
            <h3 class="sr-only">Description</h3>

            <div class="text-3xl space-y-6 text-base text-white">
              <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</p>
            </div>
          </div>

          <div class="mt-10 flex border-slate-100">
            <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png" class="border-0 p-2">
          </div>
          <form class="mt-6" name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
            <!-- Colors -->
            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
"/>
            <input type="hidden" name="acao" value="add"/>

            <div class="mt-10 flex">
              <button  class="text-2xl flex max-w-xl flex-1 items-center justify-center rounded-md border border-transparent bg-orange-600 py-3 px-8 text-base font-big text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:w-full">Comprar</button>

              
            </div>
          </form>

        </div>
      </div>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

      </main><?php }
}
