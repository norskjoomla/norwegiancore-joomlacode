# $Id: localise.sql 1375 2010-11-02 19:30:24Z rued $

# If merged with joomla.sql/joomla_backward.sql or sample_data.sql,
# put at the bottom of joomla.sql/joomla_backwards.sql, and on top of the sample_data.sql

# --------------------------------------------------------

#
# Localisation for table `#__plugins`
#

UPDATE `#__plugins` SET `name` = 'Autentisering - Joomla' WHERE `element` = 'joomla' AND `folder` = 'authentication';
UPDATE `#__plugins` SET `name` = 'Autentisering - LDAP' WHERE `element` = 'ldap' AND `folder` = 'authentication';
UPDATE `#__plugins` SET `name` = 'Autentisering - GMail' WHERE `element` = 'gmail' AND `folder` = 'authentication';
UPDATE `#__plugins` SET `name` = 'Autentisering - OpenID' WHERE `element` = 'openid' AND `folder` = 'authentication';
UPDATE `#__plugins` SET `name` = 'Bruker - Joomla!' WHERE `element` = 'joomla' AND `folder` = 'user';
UPDATE `#__plugins` SET `name` = 'Søk - Innhold' WHERE `element` = 'content' AND `folder` = 'search';
UPDATE `#__plugins` SET `name` = 'Søk - Kontakter' WHERE `element` = 'contacts' AND `folder` = 'search';
UPDATE `#__plugins` SET `name` = 'Søk - Kategorier' WHERE `element` = 'categories' AND `folder` = 'search';
UPDATE `#__plugins` SET `name` = 'Søk - Seksjoner' WHERE `element` = 'sections' AND `folder` = 'search';
UPDATE `#__plugins` SET `name` = 'Søk - Nyhetsmatinger' WHERE `element` = 'newsfeeds' AND `folder` = 'search';
UPDATE `#__plugins` SET `name` = 'Søk - Nettlenker' WHERE `element` = 'weblinks' AND `folder` = 'search';
UPDATE `#__plugins` SET `name` = 'Innhold - Sideskift' WHERE `element` = 'pagebreak' AND `folder` = 'content';
UPDATE `#__plugins` SET `name` = 'Innhold - Vurdering' WHERE `element` = 'vote' AND `folder` = 'content';
UPDATE `#__plugins` SET `name` = 'Innhold - E-postmaskering' WHERE `element` = 'emailcloak' AND `folder` = 'content';
UPDATE `#__plugins` SET `name` = 'Innhold - Code Hightlighter (GeSHi)' WHERE `element` = 'geshi' AND `folder` = 'content';
UPDATE `#__plugins` SET `name` = 'Innhold - Last modul' WHERE `element` = 'loadmodule' AND `folder` = 'content';
UPDATE `#__plugins` SET `name` = 'Innhold - Sidenavigering' WHERE `element` = 'pagenavigation' AND `folder` = 'content';
UPDATE `#__plugins` SET `name` = 'Tekstbehandler - Ingen tekstbehandler' WHERE `element` = 'none' AND `folder` = 'editors';
UPDATE `#__plugins` SET `name` = 'Tekstbehandler - TinyMCE', `params` = REPLACE(`params`, 'lang_mode=0\nlang_code=en', 'lang_mode=1\nlang_code=nb') WHERE `element` = 'tinymce' AND `folder` = 'editors';
UPDATE `#__plugins` SET `params` = REPLACE(`params`, 'format_date=%Y-%m-%d', 'format_date=%d-%m-%Y') WHERE `element` = 'tinymce' AND `folder` = 'editors';
UPDATE `#__plugins` SET `params` = REPLACE(`params`, 'mode=advanced', 'mode=extended') WHERE `element` = 'tinymce' AND `folder` = 'editors';
UPDATE `#__plugins` SET `name` = 'Tekstbehandler - XStandard Lite' WHERE `element` = 'xstandard' AND `folder` = 'editors';
UPDATE `#__plugins` SET `name` = 'Tekstbehandlerknapp - Bilde' WHERE `element` = 'image' AND `folder` = 'editors-xtd';
UPDATE `#__plugins` SET `name` = ' Tekstbehandlerknapp - Sideskift' WHERE `element` = 'pagebreak' AND `folder` = 'editors-xtd';
UPDATE `#__plugins` SET `name` = ' Tekstbehandlerknapp - Les mer' WHERE `element` = 'readmore' AND `folder` = 'editors-xtd';
UPDATE `#__plugins` SET `name` = 'XML-RPC - Joomla' WHERE `element` = 'joomla' AND `folder` = 'xmlrpc';
UPDATE `#__plugins` SET `name` = 'XML-RPC - Blogger API' WHERE `element` = 'blogger' AND `folder` = 'xmlrpc';
#UPDATE `#__plugins` SET `name` = 'XML-RPC - MetaWeblog API' WHERE `element` = 'metaweblog' AND `folder` = 'xmlrpc';
UPDATE `#__plugins` SET `name` = 'System - SEF' WHERE `element` = 'sef' AND `folder` = 'system';
UPDATE `#__plugins` SET `name` = 'System - Feilsøk' WHERE `element` = 'debug' AND `folder` = 'system';
UPDATE `#__plugins` SET `name` = 'System - Kompatibilitet' WHERE `element` = 'legacy' AND `folder` = 'system';
UPDATE `#__plugins` SET `name` = 'System - Mellomlager' WHERE `element` = 'cache' AND `folder` = 'system';
UPDATE `#__plugins` SET `name` = 'System - Logg' WHERE `element` = 'log' AND `folder` = 'system';
UPDATE `#__plugins` SET `name` = 'System - Husk meg' WHERE `element` = 'remember' AND `folder` = 'system';
UPDATE `#__plugins` SET `name` = 'System - Backlink' WHERE `element` = 'backlink' AND `folder` = 'system';


# --------------------------------------------------------

#
# Localisation for table `#__menu`
#

UPDATE `#__menu` SET `name` =  'Hjem', `alias` = 'hjem', `params` = REPLACE(`params`, 'Welcome to the Frontpage', 'Velkommen til forsiden') WHERE `id` = 1;


# --------------------------------------------------------

#
# Localisation for table `#__menu_types`
#

UPDATE `#__menu_types` SET `title` = 'Hovedmeny', `description` = 'Hovedmenyen for siden' WHERE `id` = 1;


# --------------------------------------------------------

#
# Localisation for table `#__modules`
#

UPDATE `#__modules` SET `title` = 'Hovedmeny' WHERE `module` = 'mod_mainmenu';
UPDATE `#__modules` SET `title` = 'Innlogging' WHERE `module` = 'mod_login';
UPDATE `#__modules` SET `title` = 'Mest lest' WHERE `module` = 'mod_popular';
UPDATE `#__modules` SET `title` = 'Nyeste artikler' WHERE `module` = 'mod_latest';
UPDATE `#__modules` SET `title` = 'Menystatistikker' WHERE `module` = 'mod_stats';
UPDATE `#__modules` SET `title` = 'Uleste meldinger' WHERE `module` = 'mod_unread';
UPDATE `#__modules` SET `title` = 'Besøkende' WHERE `module` = 'mod_online';
UPDATE `#__modules` SET `title` = 'Verktøylinje' WHERE `module` = 'mod_toolbar';
UPDATE `#__modules` SET `title` = 'Hurtigikoner' WHERE `module` = 'mod_quickicon';
UPDATE `#__modules` SET `title` = 'Påloggede brukere' WHERE `module` = 'mod_logged';
UPDATE `#__modules` SET `title` = 'Bunntekst' WHERE `module` = 'mod_footer';
UPDATE `#__modules` SET `title` = 'Admin-meny' WHERE `module` = 'mod_menu';
UPDATE `#__modules` SET `title` = 'Admin-undermeny' WHERE `module` = 'mod_submenu';
UPDATE `#__modules` SET `title` = 'Brukerstatus' WHERE `module` = 'mod_status';
UPDATE `#__modules` SET `title` = 'Tittel' WHERE `module` = 'mod_title';
