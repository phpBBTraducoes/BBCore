<?php
/**
*
* @package language
* @package sitesplat BBcore addon
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 3.2.5] (https://github.com/phpBBTraducoes)
*/

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge(
	$lang, array(
		'UCP_IR'				    => 'Redimensionador de imagem',
		'IMAGE_RESIZE'			    => 'Redimensionar a imagem',
		'IMAGE_RESIZE_EXPLAIN'	    => 'Cortar seu %1$s da imagem e confirme.',
		// Your avatar will be saved with a height of %1$s pixels and a width of %2$s pixels.',

		'IMAGE_RESIZE_ERROR'	    => 'Nenhum aplicativo ou arquivo para enviar!',
		'IMAGERESIZE_NOTICE'	    => '<div class="phpinfo"><p>Não existe uma configuração específica para esta extensão. Depois que o usuário enviou o avatar via UCP Avatar upload, a opção de corte estará disponível.<br /> Verifique o ACP &#62; configurações do avatar: "Tamanho máximo do arquivo do avatar" para ser 0 ou 2mb ou mais para uma experiência de usuário suave.</p></div>',
		'ERROR_IMAGERESIZE_DISABLE'	=> 'Você não pode desativar o BBAvatarResize devido a outras extensões do SiteSplat ativo<br /><div>» %s</div>',
	    'SS_HELPER_NOTY'	    	=> 'SiteSplat BBcore não existe!<br />Baixe o <a href="http://sitesplat.com" target="_blank">BBcore</a> e copie a pasta BBcore em sua pasta de extensão do sitesplat.',
	)
);
