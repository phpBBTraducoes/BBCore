<?php
/**
*
* common [Brazilian Portuguese [pt_br]]
*
* @package language
* @package sitesplat BBcore
* @version $Id$
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* Brazilian Portuguese translation by Leinad4Mind (c) 2016 https://www.patreon.com/leinad4mind  and update by eunaumtenhoid (c) 2017 [ver 3.2.5] (https://github.com/phpBBTraducoes)
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

$lang = array_merge($lang, array(

	'ACP_SITESPLAT_UPDATE_MANAGER'	=> 'Administrar Atualizações de SiteSplat',
	'VERSION_INSTALLED'  			=> 'Versão Instalada',
	'NEW_BOOTS_VERSION'				=> 'Nova versão disponível: %s',
	'VERSIONNUMBERS'				=> 'Versão instalada: %s, baixe a nova versão que se encontra no servidor: <a style="color:#fff;" href="%s" title="Baixar" target="_blank">%s</a>',
	'SS_RAPID_DISABLE'				=> 'Desativar Rápido SS',
	'SS_RAPID_DISABLE_TLT'		    => 'Desativa (todas) as extensões SiteSplat de uma só vez. Faça um Backup primeiro!!!',

	'DOWNLOAD_MSG'					=> 'A versão atual <span class="label label-success">%s</span> pode ser baixada pelo Themeforest: <a href="%s" title="Baixar" target="_blank">%s - phpBB3</a>',
	'CHANGE_LOG_MSG'				=> 'O Changelog encontra-se aqui: <a href="%s" target="_blank">%s (phpBB3.1) Changelog</a>',
	'SUPPORT_FORUM_MSG'				=> 'O Fórum de Suporte encontra-se na página oficial da comunidade: <a href="%s" title="Baixar" target="_blank">http://www.sitesplat.com</a>',
	'COLORIZE_MSG'					=> 'O serviço Colorize encontra-se aqui: <a href="http://www.sitesplat.com/phpBB3/themer.php" target="_blank">Colorize</a> (Certifique-se de entrar na sua conta primeiro)',
	'NO_VERSIONINFO'				=> 'Informação da versão não se encontra disponível de momento, tente mais tarde!',

	'LOG_FILES_CHANGED'				 => '<strong>O BBcore alterou o(s) seguinte(s) %s arquivo(s) por si:</strong><br />» %s',
	'LOG_THEME_INSTALLED'			 => '<strong>O BBcore foi instalado com sucesso</strong>',
	'LOG_FILES_CHANGED_FAILED'		 => '<strong>O BBcore não foi instalado com sucesso</strong><br />» Algumas funcionalidades podem não funcionar!',
	'LOG_THEME_UNINSTALLED'			 => '<strong>O BBcore foi desinstalado com sucesso</strong>',

	'LOG_FILE_NOT_REPLACED'			 => '<strong>O BBcore não conseguiu substituir o arquivo original por si:</strong><br />» %s',
	'LOG_FILE_NOT_UPDATED'			 => '<strong>O BBcore não conseguiu actualizar o(s) seguinte(s) %s arquivo(s) por si:</strong><br />» %s',

	'LOG_BBCORE_INSTALLED'			 => '<strong>O Sitesplat BBCore foi instalado com sucesso</strong>',
	'LOG_BBCORE_DEINSTALLED'		 => '<strong>O Sitesplat BBCore foi desinstalado com sucesso</strong>',

	'LOG_BBCORE_NOT_REPLACED'		 => '<strong>O Sitesplat BBCore não foi desinstalado com sucesso</strong><br />Não foi possível substituir o(s) seguinte(s) arquivo(s)<br />» %s',
	'LOG_BBCORE_NOT_UPDATED'		 => '<strong>O Sitesplat BBCore não foi instalado com sucesso</strong><br />Não conseguiu actualizar o(s) seguinte(s) arquivo(s)<br />» %s',

	'ACP_BBCORE_MSG_FILES_FAIL'		 => 'Nem TODOS os arquivos foram editados! Por favor, substitui manualmente o(s) arquivo(s) mencionado(s) no Log Administrativo situado na ABA MANUTENÇÃO.',
	'ACP_BBCORE_MSG_SETTINGS'		 => 'Não existem configurações para esta extensão.<br />No entanto, nem todas as atualizações foram implementadas corretamente devido a problemas nas permissões de arquivos no servidor ou à falta de arquivos nele.<br />Vê o Log Administrativo para mais informações.<br /><br />Por favor, actualiza os arquivos manualmente para desfrutar de todas as funcionalidades.',
	'BBCORE_ERROR_DISABLE'			 => 'Não pode desativar o SiteSplat BBCore devido a outras extensões SiteSplat\'s que se encontram ainda ativas.<br />Desative primeiro as extensões SiteSplat\'s. (Pode usar o "Desativar Rápido SS" para desativar todas as extensões SiteSplat\'s de uma só vez.)<br /><br /><div style="margin: 0px auto; width: 50%%;"><strong>» %s</strong></div>'
));

?>