<?php
/**
*
* BBCore [Brazilian Portuguese [pt_br]]
*
* @package sitesplat BBcore
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* Brazilian Portuguese translation by Leinad4Mind (c) 2016 https://www.patreon.com/leinad4mind  and update by eunaumtenhoid (c) 2017 [ver 3.2.5] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB')) {
	exit;
}
if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

// BBCore
$lang = array_merge($lang, array(

	'PM_NEW_MSG' => array(
		1 => 'Tem %d Nova Mensagem Privada',
		2 => 'Tem %d Novas Mensagens Privadas',
	),
	'PM_UNREAD_MSG' => array(
		1 => 'Tem %d Mensagem Privada Por Ler',
		2 => 'Tem %d Mensagens Privadas Por Ler',
	),
	'PM_NEW_MSG_BUBBLE' => array(
		1 => '%d',
		2 => '%d',
	),

	'UCP_MAIN'						 => 'Geral',
	'UCP_MAIN_FRONT'				 => 'Página Principal',
	'UCP_MAIN_SUBSCRIPTION'			 => 'Administrar Observações',
	'UCP_MAIN_BOOKMARKS'			 => 'Administrar Favoritos',
	'UCP_MAIN_DRAFTS'				 => 'Administrar Rascunhos',
	'UCP_MAIN_ATTACHMENTS'			 => 'Administrar Anexos',

	'USER_PANEL'					 => 'Painel de Controlo',
	'UCP_PROFILE'					 => 'Perfil',
	'UCP_PROFILE_PROFILE'			 => 'Editar Perfil',
	'UCP_PROFILE_SIGNITURE'			 => 'Editar Assinatura',
	'UCP_PROFILE_AVATAR'			 => 'Editar Avatar',
	'UCP_PROFILE_SETTINGS'			 => 'Detalhes da Conta',
	'UCP_AVATAR_SELECT_OPTIONS'		 => 'Opções do Avatar', 
	'UCP_AVATAR_SELECT_UPLOAD'		 => 'Envie o avatar a partir do seu dispositivo',
	'UCP_SUBMIT_TO_UPLOAD'			 => 'Clique em baixo para enviar',

	'UCP_PREFERENCE'				 => 'Preferências',
	'UCP_PREFERENCE_SETTINGS' 		 => 'Editar configurações pessoais',
	'UCP_PREFERENCE_DEFAULTS' 		 => 'Editar mensagens enviadas',
	'UCP_PREFERENCE_OPTIONS'		 => 'Editar exibição de mensagens',

	'UCP_MESSAGES'					 => 'Mensagens Privadas',
	'UCP_PM_COMPOSE'				 => 'Criar mensagem privada',
	'UCP_PM_DRAFTS'					 => 'Administrar rascunhos',
	'UCP_PM_INBOX'					 => 'Caixa de Entrada',
	'UCP_PM_OUTBOX'					 => 'Caixa de Saída',
	'UCP_PM_SENTBOX'				 => 'Mensagens Enviadas',
	'UCP_PM_OPTIONS'				 => 'Opções (Regras e Pastas)',
	'UCP_NO_USER_CHANGE_ALLOWED'	 => '**Não é permitido alterar o Nome de Utilizador**',
	'UCP_REGISTER_EMAIL_EXPLAIN'	 => 'Por favor, não utilize emails descartáveis',

	'WIDTH_SIZE'					 => 'largura',
	'PIXEL_SIZE'					 => 'px',
	'HEIGHT_SIZE'					 => 'altura',

	'UCP_GROUPS'					 => 'Grupos de Utilizadores',
	'UCP_GROUPS_MEMBERSHIP'			 => 'Editar Inscrições em Grupos',
	'UCP_GROUPS_MANAGE'				 => 'Administrar grupos',

	'UCP_ZEBRA'						 => 'Amigos e Inimigos',
	'UCP_ZEBRA_FRIENDS'				 => 'Administrar Amigos',
	'UCP_ZEBRA_FOES'				 => 'Administrar Inimigos',
	'UCP_APPLY'						 => 'Alterar',
	'UCP_PM_DEFAULT_RULE_TAG'		 => 'Ação Padrão',
	'UCP_PM_DEFAULT_RULE'			 => 'Não serão aceitas novas Mensagens',
	'UCP_PM_DEFAULT_RULE_EXPLAIN'	 => 'Esta ação será despoletada se se verificar a regra mencionada. As Mensagens novas serão mantidas até haver espaço disponível',
	'UCP_PM_NEW_MESSAGE'			 => 'Nova Mensagem',
	'BIO'							 => 'Informações Pessoais',
	'MANAGE'						 => 'SUCESSO',
	'JOINED_BOARD'					 => 'Entrou no Fórum', //Registou-se?
	'VISITED_BOARD'					 => 'Última visita',
	'SEE_MORE'						 => 'Mais',
	'ATTACH_SIGNATURE'				 => 'Anexar assinatura',
	'BBCODES'						 => 'BBcodes',

	'DELETE_POST_SOFT'				 => 'Enviar Mensagem para a Reciclagem',
	'DELETE_POST_PERMANENT'			 => 'Apagar Mensagem Permanentemente ',
	'DELETE_POST_SOFT_WARN'			 => 'Poderá ser recuperada',
	'DELETE_POST_PERMANENT_WARN'	 => 'NÃO poderá ser recuperada',

	'POLL_MAX_OPTIONS_EXPLAIN_ALT'	 => 'Introduza o número máx. de opções que o utilizador poderá selecionar',
	'POLL_VOTE_CHANGE_LABEL'		 => 'Permitir Alterar Voto',
	'NO_VOTES_NA'					 => 'N/A',
	'NOT_AVAILABLE'					 => 'Indisponível',
	'POST_TOPIC_NEW'				 => 'Novo Tópico',
	'QUICK_REPLY_SHOW_HIDE'			 => 'Mostrar/Ocultar Resposta Rápida',
	'CHARACTERS_COUNT'				 => 'Caractere',
	'CHARACTERS_COUNT_REM'			 => 'Restantes',
	'BOOKMARKED_TOPICS_UCP'			 => 'Tópicos favoritos',
	'ATTACH_EXPLANATION_SORTABLE'	 => 'Clique para ordenar',
	'ATTACH_FORUM'					 => 'Anexo(s)',
	'MCP_DETAILS_LOG'				 => 'Detalhes',
	'MCP_DETAIL_U_IP'				 => 'Utilizador &amp; IP',
	'MCP_MANAG_BAN'					 => 'Administrar Expulsões',
	'MCP_UNAPPROVED_POSTS_ZERO'		 => 'Não existem mensagens por aprovar',
	'MCP_REPORTS_ZERO'				 => 'Não existem denúncias de Mensagens para rever',
	'MCP_PM_REPORTS_ZERO'			 => 'Não existem denúncias de Mensagens Privadas para rever',

	
	'SUBFORUM_LINK'                  => 'Abrir link em uma nova aba',
	'FORUMLIST_UNAPPROVED'			 => 'Falta pelo menos um tópico neste fórum por aprovar',
	'FORUMLIST_UNAPPROVED_POST'		 => 'Falta pelo menos uma mensagem neste fórum por aprovar', 
	'FORUMLIST_LASTPOST'			 => 'Ver a última mensagem',
	'TOPICS_POSTS_STATISTICS'		 => 'Estatísticas',
	'TOPICS_ROW_REPORTED'			 => 'Este tópico foi reportado',
	'TOPICS_ROW_NOT_APPROVED'		 => 'Este tópico não foi aprovado',
	'TOPICS_ROW_DELETED'			 => 'Este tópico foi apagado',
	'MODERATOR_PANEL_GENERAL'		 => 'Painel de Moderação',
	'ADMIN_PANEL_GENERAL'			 => 'Painel de Administração',
	'RANK_IMAGE'					 => 'Imagem de Rank',

	'WELCOME_INDEX'					 => 'Bem-vindo!',
	'FAQ'							 => 'FAQ',
	'CAPTION_FAQ'					 => 'Questões Mais Freqüentes',
	'CAPTION_SEARCH'				 => 'Procura primeiro!',
	'CAPTION_MEMBERS'				 => 'À procura de alguém?',
	'MEMBERS_CAP'					 => 'Membros',
	'CAPTION_UCP'					 => 'Defina as suas preferências',
	'UCP_CAP'						 => 'Painel de Controlo do Utilizador',
	'INDEX_CAPTION'					 => 'Esta é a página índice do fórum',
	'VIEWTOPIC_CAP'					 => 'Título do Tópico',
	'CAPTION_VIEWTOPIC'				 => 'Descrição do Tópico',
	'CAPTION_VIEWFORUM'				 => 'Navegar por todas as categorias do fórum',
	'POSTINGS_CAP'					 => 'Editor de Mensagens',
	'CAPTION_POSTINGS'				 => 'A colocar conteúdo!',

	'MCP_CAPTION'					 => 'É aqui que podes usar os teus Super-Poderes ;-)',
	'BOOTSTRAP_ELEMENT'				 => 'Elementos Bootstrap',
	'BOOTSTRAP_ELEMENT_CAPTION'		 => 'Documentação do Fórum KickStart',
	'MAIN_FORUM'					 => 'Fórum',
	'MAIN_MAIN_STUFF'				 => 'As principais coisas',
	'MAIN_TRENDS'					 => 'Veja as tendências',

	'MAIN_SEARCH_IT_UP'				 => 'Procura primeiro',
	'SUB_NO_ICON'					 => 'Não foram encontrados ícones',
	'EXAMPLE_WITH_ICON'				 => 'Exemplo com Ícone',
	'EXAMPLE_LINK'					 => 'Exemplo com Endereço',
	'MAIN_SOCIAL'					 => 'Social',
	'SOCIAL_P'						 => 'Conversar ;-)',

	'MORE'							 => 'Mais',
	'EXPAND_CLOSE'					 => 'Fechar Vista',
	'MARK_TOPICS_READ'				 => 'Marcar tópicos como lidos',
	'CONTACT'						 => 'Contacto',
	'GET_IN_TOUCH'					 => 'Entra em contacto',
	'HANG_AROUND'					 => 'Participa',
	'JOIN_THE_CLUB'					 => 'Junta-te ao clube',
	'MENU'							 => 'MENU',
	'YOU_ARE_HERE'					 => 'Estás aqui',
	'IN_FOOTER'						 => 'Em:',
	'REPLY'							 => 'Resposta',

	'LOGIN_REMEMBER'				 => 'Continuar conectado',
	'LOGIN_HIDE_ME'					 => 'Ocultar sessão',
	'LOGIN_ME_IN'					 => 'Entrar',
	'SIGN_IN_ACCOUNT'				 => 'Entrar na conta',
	'CREATE_ACCOUNT'				 => 'Criar Conta',
	'GO_TO_SEARCH_ADV'				 => 'Regressar à pesquisa avançada',

	'CREATE_ACCOUNT_DISABLED'		 => 'Os registos estão encerrados',
	'REGISTRATION_DISABLED'			 => 'Parece que os registos estão de momento encerrados, pode ser temporário. Se acha que é um erro, entre em contacto com o Administrador e informe sobre a situação. Pedimos desculpa pelo inconveniente. A nossa Política de Privacidade e Termos de Uso estão disponíveis em baixo.',
	'CONTACT_WEBMASTER'				 => 'Contacta o Administrador',
	'CONFIRM_QA_EXPLAIN_ALT'		 => 'Prova que és humano e responde à seguinte questão',

	'PLUPLOAD_PLACE_INLINE'			 => 'Adicionar',
	'PLUPLOAD_DELETE_FILE'			 => 'Apagar',

	
	'REG_CREATING'					 => 'A Criar perfil...',
	'LOADING'						 => 'A Carregar...',
	'SAVING'						 => 'A Guardar...',
	'CANCELLING'					 => 'A Cancelar...',
	'SENDING'						 => 'A Enviar...',
	'SEARCHING'						 => 'A Pesquisar...',
	'LOADING_LOG_IN'				 => 'A Conectar-se...',
	'FILE_UPLOADING'				 => 'A Enviar Ficheiro...',
	'CASTING_VOTE'					 => 'A Enviar Voto...',
	'LOADING_FORM'					 => 'A Carregar Formulário...',


	'MEMBERLIST_P_JOINED'			 => 'Registou-se no fórum',
	'MEMBERLIST_P_EXPL'				 => 'Quando me registei no fórum',
	'MEMBERLIST_P_DATE_EXPL'		 => 'Última vez que visitei o fórum',
	'SPAMMER'                        => 'Spammer',
	'SPAMMER_PLACEHOLDER'			 => 'Não podes simplesmente fazer Spam e sair impune!',
	'MARK_PLACEHOLDER'				 => 'Coloque visto na sua escolha',
	'INFO_BOX'						 => 'Informações:',
	'USER_REMOVE_PLACEHOLDER'		 => 'Clique para remover o utilizador',
	'GROUP_REMOVE_PLACEHOLDER'		 => 'Clique para remover o grupo',
	'EDIT_LINK_PLACEHOLDER'			 => 'Esqueci-me de colocar código nos meus endereços',
	'POST_IT_UP_PLACEHOLDER'		 => 'Enviar!',
	
	'UCP_REG_USR_PLACEHOLDER'      => 'Por exemplo John Doe',
    'UCP_REG_EMAIL_PLACEHOLDER'    => 'Por exemplo john@mail.com',
    'UCP_REG_PSWD_PLACEHOLDER'     => 'Por exemplo ASDFasdf123',
    'UCP_REG_CTCHA_PLACEHOLDER'    => 'Por exemplo blue sky',
    'SEARCH_USR_PLACEHOLDER'       => 'Por exemplo SiteSplat',
	
	'MESSAGE_ENTER_PLACEHOLDER'		 => 'Introduza a sua mensagem...',
	'FILE_COMMENT_PLACEHOLDER'		 => 'Espaço reservado para comentários',
	'HEIGTH_PLACEHOLDER'			 => 'altura',
	'WIDTH_PLACEHOLDER'				 => 'largura',
	'UCP_OCCUPATION_PLACEHOLDER'	 => 'Descreve de forma breve a tua profissão...',
	'UCP_INTERESTS_PLACEHOLDER'		 => 'Descreve os teus interesses...',
	'SOFT_DELETE_PLACEHOLDER'		 => 'Adiciona os teus motivos, caso desejes...',
	'ADD_DESCRIPTION'				 => 'Adicionar descrição',

	'FILE_SELECT'					 => 'Selecione o arquivo',
	'FILE_CHANGE'					 => 'Alterar',
	'SELECT_IMAGE'					 => 'Selecione a imagem',
	'NOTE'							 => 'Observação',
	'EDIT_DRAFT'					 => 'Editar Rascunho',
	'PM_BALOON_NOTIFICATION'		 => 'Ativar notificação de MP (Mensagem Privada) via Pop-Up',
	'DAYS_AGO'						 => 'Dias atrás',
	'WORK_IN_PROGRESS'				 => 'Manutenção',
	'DISABLE_MESSAGE'				 => 'Fórum indisponível',
	'DISABLE_RETURN'				 => 'Voltar à página de índice',
	'BOARD_DISABLED_SHUFFLE'		 => 'Diverte-te e embaralha algumas letras :-)',
	'DISABLE_TEXT_TRY'				 => 'Testa tu mesmo!',
	'DISABLE_TEXT_TYPE'				 => 'Digite algo, e pressione retroceder...',

	'GRAVATAR_EXPLAIN'				 => 'Se um <a href="//en.gravatar.com/" target="_blank">GRAVATAR</a> estiver associado ao seu endereço de e-mail, será usado por defeito.',
	'GRAVATAR_EXPLAIN_CONFIRM'		 => 'Por favor, confirme o seu endereço de e-mail aqui',

	'DELETE_POLL'					 => 'Apagar Votação',
	'POLL_DELETE_HELPER'			 => '(Isto apenas apaga a votação) verificar e submeter',
	'JUMP_TO_POST'					 => 'Ir para a mensagem',
	'JUMP_SELECT_FORUM'				 => 'Seleciona o Fórum para onde ir',
	'JUMP_TO_PAGE_NUMBER'			 => 'Ir para #',
	'VIEW_FIRST_UNREAD'				 => 'Ver primeira mensagem não lida.',
	'BOOKMARK_TOPIC_REMOVE'			 => 'Deixar de observar tópico',

	'NEW_MESSAGES'					 => 'Novas mensagens',
	'YOU_HAVE'						 => 'Você tem',
	'AND'							 => 'e',
	'HELLO'							 => 'Olá',
	'DISMISS_PM'					 => 'Adiar 5 minutos',
	'READ_NOW'						 => 'Leia agora',
	'PRIVATE_MESSAGE_NEW'			 => 'nova mensagem privada',
	'PRIVATE_MESSAGE_UNREAD'		 => 'mensagem privada por ler',
	'NO_PMS_INFO'					 => 'Tudo em dia! Escrever nova MP?',

	'DATES'							 => 'DATA',
	'POWERED'						 => 'Criado por',
	'HANDCRAFTED'					 => 'Desenvolvido Com',
	'BY'							 => 'Por',

	'RECENT_TOPICS'					 => 'Tópicos recentes',
	'TWITTER'						 => 'Twitter',
	'FAVORITES'						 => 'Favoritos',

	'GALLERY'						 => 'Galeria',
	'CHAT'							 => 'Chat',
	'ABOUT'							 => 'Sobre Nós',
	'ABOUT_PART_ONE'				 => 'BBOOTS&#8482; É o primeiro e único Tema, HTML5/CSS3 não-oficial, totalmente Ágil de PhpBB&reg;. É limpo e nítido. Com um Design INCRÍVEL e compatível com todos os navegadores e dispositivos.',
	'ABOUT_PART_TWO'				 => 'Utiliza um layout com base no Bootstrap, há muito esperado, e que irá surpreender os fãs da plataforma phpBB.',
	'ABOUT_PART_THREE'				 => 'O Tema Ágil Não-Oficial',
	'BB'							 => 'B',
	'BOOTS'							 => 'BOOTS',
	'BBOOTS'						 => 'BBOOTS',

	'BBOOTS_VERSION'				 => '<a href="http://www.sitesplat.com/phpBB3/">BBOOTS</a>',
	'U_LOGOUT'						 => 'Sair',

	'SITESPLAT_STATISTICS'			 => 'Estatísticas',
	'SITESPLAT_SEE_DETAILS'			 => 'Ver detalhes',
	'SITESPLAT_SEARCH_LAST_DAY'		 => 'Mensagens das últimas 24h',
	'SITESPLAT_SEARCH_WEEK'			 => 'Mensagens dos últimos 7 dias',

	'SITESPLAT_TOTAL_POSTS'			 => 'Total de mensagens',
	'SITESPLAT_TOTAL_TOPICS'		 => 'Total de tópicos',
	'SITESPLAT_TOTAL_USERS'			 => 'Total de utilizadores',
	'SITESPLAT_NEWEST_MEMBER'		 => 'Novo utilizador',
	'SITESPLAT_USERS_ONLINE'		 => 'Utilizadores Online',
	'SITESPLAT_MOST_USERS_ONLINE'	 => 'Recorde de Utilizadores Online',
	'SITESPLAT_BIRTHDAYS'	         => 'Aniversários de hoje',

	'BOOTSTRAP_VERSION'				 => '3.3.6',
	'FLATBOOTS'						 => 'FLATBOOTS',
	'CHANGE_AVATAR'					 => 'Alterar Avatar',
	'CHANGE_PASSWORD'				 => 'Alterar Senha',

	'ADMIN_TIPS'					 => 'Truques e Dicas dos Administradores',
	'ADMIN_TIP_INTRO'				 => 'Sabias que podes tornar o teu fórum phpBB ainda mais seguro com apenas alguns passos simples?',
	'ADMIN_TIP_ONE'					 => 'Mantém o teu software actualizado.',
	'ADMIN_TIP_TWO'					 => 'Usa sempre boas senhas que contenham seqüências aleatórias de números, letras e caracteres especiais.',
	'ADMIN_TIP_THREE'				 => 'Restrinja o acesso à zona de administração...',
	'ADMIN_CHECK_IT_BTN'			 => 'Visita SiteSplat.com para mais informação',

	'USER_MINI_PROFILE'				 => 'Mini-perfil do utilizador',
	'USER_MINI_PROFILE_VIEW_FULL'	 => 'Ver o perfil completo',
	'OFF_LINE'						 => 'Desconectado',
	'USER_STATUS'					 => 'Estado',
	'USER'							 => 'Utilizador',
	'TITLE'							 => 'Título',
	'END_TIMELINE'					 => 'Cronograma final',
	'MEMBERS'						 => 'Utilizadores',
	'DRAFTS'						 => 'Rascunhos',
	'REPORTS'						 => 'Denúncias',
	'MODERATOR_LOGS'				 => 'Registos de Moderador',
	'QUEUE'							 => 'Moderação',
	'LINKS'							 => 'Endereços',
	'TOPIC_PERMISSIONS'				 => 'Permissões do tópico',
	'MODERATOR_OPTIONS'				 => 'Moderar',
	'PASSWORD_EXPLAIN_CONFIRM'		 => 'Certifique-se que corresponde',
	'FORUM_REDIRECTS'				 => 'Redirecionamentos:',

	'FANCY_TOPICS_TITLE'			 => 'Tópicos recentes do fórum',
	'POST_BY'						 => 'Criado por',
	'REPLY_BY'						 => 'Respondido por',
	'NO_REPLIES'					 => 'Sem resposta',
	'READ_MORE'						 => 'Ler mais',
	'RT_READ_MORE'					 => 'LER MAIS',
	'VIEW_MORE_TOPICS'				 => 'VER MAIS TÓPICOS',
	'BACK_TO_START'					 => 'VOLTAR AO INÍCIO',

	'TOGGLE_NAV'					 => 'Navegação toggle',

	'DEMO_LINK'						 => 'Apenas demonstração, não existe ícones',
	'DEMO_HEADER_MENU'				 => 'Exemplo de cabeçalho da introdução',

	'FLATBOOTS_INTRO'				 => 'Bootstrap Framework',
	'FLATBOOTS_EXPLAIN'				 => 'Mais de uma dúzia de componentes reutilizáveis, criado para fornecer iconografia, menus suspensos, grupos de entrada, sistema de navegação, notificações e muito mais...',
	'CALL_TO_ACTION_FOOTER'			 => 'Ative e desative addons, use apenas o que realmente precisa!',
	'PURCHASE_NOW_BTN'				 => 'Compre agora',
	'FLATBOOTS_ABOUT_PART_ONE'		 => 'Porque é que iria contentar-se com menos, quando pode ter mais? Não deixe que outros autores o enganem com jogadas de Marketing. O FLATBOOTS é aquilo que merece. Construído para durar, construído a partir do zero, nada mais, nada menos.',
	'FLATBOOTS_ABOUT_TITLE'			 => 'Construído para durar',
	'DMCA'							 => 'DMCA',
	'TERMS'							 => 'Termos e Condições',
	'ADVERTISE'						 => 'Divulgue',
	'SITESPLAT'						 => 'SiteSplat',
	'SITESPLAT_URL'					 => '<a href="http://sitesplat.com" class="btn btn-default" target="blank">SiteSplat.com</a>',
	'JOIN_US_TWITTER'				 => 'Junte-se a nós no Twitter',
	'TWEET_EXAMPLE'					 => 'O BBOOTS atingiu as 500 vendas! Obrigado a todos os que apóiam este projecto e que contribuem com o SiteSplat para construir a comunidade. O que o futuro reserva? Mantém-te a par e segue-me no Twitter. <a href="#">http://bit.ly/000fefs</a>',

));
	