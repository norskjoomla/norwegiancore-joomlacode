<?php
/**
* $Id: norwegian_nn.php 34 2006-09-03 22:59:48Z rued $
* @package Joomla
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

//no direct access
defined( '_VALID_MOS' ) or die( 'Begrensa tilgang' );

// Site page note found
define( '_404', 'Orsak, men sida du søkjer finnest ikkje.' );
define( '_404_RTS', 'Gå attende til nettstaden' ); 

define( '_SYSERR1', 'Adapter for databasen vart ikkje funne' );
define( '_SYSERR2', 'Fekk ikkje kontakt kontakt med databaseserveren' );
define( '_SYSERR3', 'Fekk ikkje kontakt med databasen' );

/** common */
DEFINE('_LANGUAGE','no');
DEFINE('_NOT_AUTH','Du har ikkje tilgangsrett til å sjå denne sida.');
DEFINE('_DO_LOGIN','Du må logge inn.');
DEFINE('_VALID_AZ09',"Skriv inn eit gyldig %s.  Ikkje bruk mellomrom. Bruk meir enn %d teikn og teikna 0-9,a-z,A-Z");
DEFINE('_VALID_AZ09_USER',"Skriv inn eit gyldig %s. Bruk meir enn %d teikn og teikna 0-9,a-z,A-Z");
DEFINE('_CMN_YES','Ja');
DEFINE('_CMN_NO','Nei');
DEFINE('_CMN_SHOW','Vis');
DEFINE('_CMN_HIDE','Skjul');

DEFINE('_CMN_NAME','Namn');
DEFINE('_CMN_DESCRIPTION','Presentasjon');
DEFINE('_CMN_SAVE','Lagre');
DEFINE('_CMN_APPLY','Utfør');
DEFINE('_CMN_CANCEL','Bryt av');
DEFINE('_CMN_PRINT','Skriv ut');
DEFINE('_CMN_PDF','PDF');
DEFINE('_CMN_EMAIL','E-post');
DEFINE('_ICON_SEP','|');
DEFINE('_CMN_PARENT','Eigar');
DEFINE('_CMN_ORDERING','Rekkefølgje');
DEFINE('_CMN_ACCESS','Tilgangsnivå');
DEFINE('_CMN_SELECT','Velj');

DEFINE('_CMN_NEXT','Neste');
DEFINE('_CMN_NEXT_ARROW'," &gt;&gt;");
DEFINE('_CMN_PREV','Forrige');
DEFINE('_CMN_PREV_ARROW',"&lt;&lt; ");

DEFINE('_CMN_SORT_NONE','Inga sortering');
DEFINE('_CMN_SORT_ASC','Stigande sortering');
DEFINE('_CMN_SORT_DESC','Synkande sortering');

DEFINE('_CMN_NEW','Ny');
DEFINE('_CMN_NONE','Ingen');
DEFINE('_CMN_LEFT','Venstre');
DEFINE('_CMN_RIGHT','Høgre');
DEFINE('_CMN_CENTER','Sentrert');
DEFINE('_CMN_ARCHIVE','Arkiver');
DEFINE('_CMN_UNARCHIVE','Gjer om "arkiver"');
DEFINE('_CMN_TOP','Start');
DEFINE('_CMN_BOTTOM','Slutt');

DEFINE('_CMN_PUBLISHED','Publisert');
DEFINE('_CMN_UNPUBLISHED','Ikkje publisert');

DEFINE('_CMN_EDIT_HTML','Rediger HTML');
DEFINE('_CMN_EDIT_CSS','Rediger CSS');

DEFINE('_CMN_DELETE','Slett');

DEFINE('_CMN_FOLDER','Mappe');
DEFINE('_CMN_SUBFOLDER','Undermappe');
DEFINE('_CMN_OPTIONAL','Valfritt');
DEFINE('_CMN_REQUIRED','Naudsynt');

DEFINE('_CMN_CONTINUE','Hald fram');

DEFINE('_STATIC_CONTENT','Statisk innhald'); 

DEFINE('_CMN_NEW_ITEM_LAST','Nye artiklar leggjas automatisk sist. Rekkefølgja kan endrast etter at du har lagra.');
DEFINE('_CMN_NEW_ITEM_FIRST','Nye artiklar leggjas automatisk først. Rekkefølgjen kan endrast etter lagring.');
DEFINE('_LOGIN_INCOMPLETE','Ver vennleg - fyll ut felt for brukarnamn og passord.');
DEFINE('_LOGIN_BLOCKED','Denne brukaren er blokkert for innlogging. Ver vennleg - kontakt administrator.');
DEFINE('_LOGIN_INCORRECT','Feil brukarnamn eller passord. Ver vennleg - prøv om att.');
DEFINE('_LOGIN_NOADMINS','Du kan ikkje logge inn. Det er ikkje satt opp nokon administrator.');
DEFINE('_CMN_JAVASCRIPT','åtvaring. Java script må aktiverast for rett visning av sidene.');

DEFINE('_NEW_MESSAGE','Ein ny privat melding er motteke');
DEFINE('_MESSAGE_FAILED','Brukaren har sperra postboksen. Meldinga blei ikkje levert.');

DEFINE('_CMN_IFRAMES', 'Dette valet vil diverre ikkje visast tilfredsstillande.  Nettlesaren din stør ikkje inline-rammer');

DEFINE('_INSTALL_3PD_WARN','Åtvaring: Installasjon av programvare frå ein tredjepart kan vere ein tryggleiksrisiko for serveren. Tredjepartprogramvare blir heller ikkje oppdatert om du oppgraderer Joomla!-installasjonen din.<br />Du finn meir informasjon om tryggleik i <a href="http://forum.joomla.org/index.php/board,267.0.html" target="_blank" style="color: blue; text-decoration: underline;">tryggleiksforumet til Joomla!</a>.');
DEFINE('_INSTALL_WARN','Av sikkjerhetsgrunnar må du slette heile innstallasjonsmappen med alle filer og undermapper. Etterpå kan du oppdatere denne sida på nytt i nettlesaren din.');
DEFINE('_TEMPLATE_WARN','<font color=\"red\"><b>Malfila blei ikkje funne!</b></font><br />Har du freista oppgradering nyleg?<br />Då må du og oppgradere databasen din.<br />');
DEFINE('_NO_PARAMS','Systemet finn ikkje parametre for dette objektet');
DEFINE('_HANDLER','Handsamar for denne typen er ikkje definert');

/** mambots */
DEFINE('_TOC_JUMPTO','Artikkeloversikt');

/**  content */
DEFINE('_READ_MORE','Les meir…');
DEFINE('_READ_MORE_REGISTER','Registrer deg for å lesa meir…');
DEFINE('_MORE','Mer…');
DEFINE('_ON_NEW_CONTENT', "Eit nytt bidrag erinnsendt av [ %s ] med tittel [ %s ] for seksjon [ %s ] og kategori [ %s ]" );
DEFINE('_SEL_CATEGORY','- Velj kategori -');
DEFINE('_SEL_SECTION','- Velj seksjon -');
DEFINE('_SEL_AUTHOR','- Velj forfattar -');
DEFINE('_SEL_POSITION','- Velj posisjon -');
DEFINE('_SEL_TYPE','- Velj type -');
DEFINE('_EMPTY_CATEGORY','Denne kategorien er for tida tom');
DEFINE('_EMPTY_BLOG','Det er ingen artiklar som kan visast');
DEFINE('_NOT_EXIST','Siden du freister å nå finns ikkje.<br />Ver vennleg velj ei side frå hovudmenyen.');
DEFINE('_SUBMIT_BUTTON','Send');

/** classes/html/modules.php */
DEFINE('_BUTTON_VOTE','Stem');
DEFINE('_BUTTON_RESULTS','Resultatar');
DEFINE('_USERNAME','Brukarnamn');
DEFINE('_LOST_PASSWORD','Gløymt passord?');
DEFINE('_PASSWORD','Passord');
DEFINE('_BUTTON_LOGIN','Logg inn');
DEFINE('_BUTTON_LOGOUT','Logg ut');
DEFINE('_NO_ACCOUNT','Ingen konto?');
DEFINE('_CREATE_ACCOUNT','Lag ein');
DEFINE('_VOTE_POOR','Dårleg');
DEFINE('_VOTE_BEST','Best');
DEFINE('_USER_RATING','Brukarrangering');
DEFINE('_RATE_BUTTON','Rangér');
DEFINE('_REMEMBER_ME','Husk meg');

/** contact.php */
DEFINE('_ENQUIRY','Tilbakemelding');
DEFINE('_ENQUIRY_TEXT','Dette er ei tilbakemelding via %s fra:');
DEFINE('_COPY_TEXT','Dette er ein kopi av meldinga du sendte til %s via %s');
DEFINE('_COPY_SUBJECT','Kopi av: ');
DEFINE('_THANK_MESSAGE','Takk for meldinga');
DEFINE('_CLOAKING','Denne e-postadressa er beskytta mot program som samlar e-postadressar. Du må aktivera javascript for å kunne sjå adressa.');
DEFINE('_CONTACT_HEADER_NAME','Namn');
DEFINE('_CONTACT_HEADER_POS','Stilling');
DEFINE('_CONTACT_HEADER_EMAIL','E-post');
DEFINE('_CONTACT_HEADER_PHONE','Telefon');
DEFINE('_CONTACT_HEADER_FAX','Faks');
DEFINE('_CONTACTS_DESC','Kontaktlista for denne nettstaden.');
DEFINE('_CONTACT_MORE_THAN','Du kan ikkje oppgje meir enn ein e-postadresse.'); 

/** classes/html/contact.php */
DEFINE('_CONTACT_TITLE','Kontakt');
DEFINE('_EMAIL_DESCRIPTION','Send ei melding til denne kontakten:');
DEFINE('_NAME_PROMPT',' Namnet ditt:');
DEFINE('_EMAIL_PROMPT',' E-postadressa di:');
DEFINE('_MESSAGE_PROMPT',' Melding:');
DEFINE('_SEND_BUTTON','Send');
DEFINE('_CONTACT_FORM_NC','Kontroller at skjemaet er komplett og korrekt fyld ut.');
DEFINE('_CONTACT_TELEPHONE','Telefon: ');
DEFINE('_CONTACT_MOBILE','Mobil: ');
DEFINE('_CONTACT_FAX','Faks: ');
DEFINE('_CONTACT_EMAIL','E-post: ');
DEFINE('_CONTACT_NAME','Namn: ');
DEFINE('_CONTACT_POSITION','Stilling: ');
DEFINE('_CONTACT_ADDRESS','Adresse: ');
DEFINE('_CONTACT_MISC','Informasjon: ');
DEFINE('_CONTACT_SEL','Velj kontakt:');
DEFINE('_CONTACT_NONE','Her er ingen kontaktdetaljer');
DEFINE('_CONTACT_ONE_EMAIL','Du kan ikkje oppgje meir enn ein e-postadresse.'); 
DEFINE('_EMAIL_A_COPY','Send ein kopi av denne meldinga til din eigen e-postadresse');
DEFINE('_CONTACT_DOWNLOAD_AS','Last ned informasjonen som');
DEFINE('_VCARD','VCard');

/** pageNavigation */
DEFINE('_PN_LT','&lt;');
DEFINE('_PN_RT','&gt;');
DEFINE('_PN_PAGE','Side');
DEFINE('_PN_OF','av');
DEFINE('_PN_START','Start');
DEFINE('_PN_PREVIOUS','Forrige');
DEFINE('_PN_NEXT','Neste');
DEFINE('_PN_END','Siste');
DEFINE('_PN_DISPLAY_NR','Vis nr.');
DEFINE('_PN_RESULTS','Resultat');

/** emailfriend */
DEFINE('_EMAIL_TITLE','Send e-post til ein venn');
DEFINE('_EMAIL_FRIEND','Send dette som e-post til ein ven.');
DEFINE('_EMAIL_FRIEND_ADDR','Mottakaren sin e-postadresse:');
DEFINE('_EMAIL_YOUR_NAME','Namnet ditt:');
DEFINE('_EMAIL_YOUR_MAIL','E-postadressa di:');
DEFINE('_SUBJECT_PROMPT',' Emne:');
DEFINE('_BUTTON_SUBMIT_MAIL','Send e-post');
DEFINE('_BUTTON_CANCEL','Bryt av');
DEFINE('_EMAIL_ERR_NOINFO','Dette krev at du har ei gyldig e-postadresse, samt ei gyldig e-postadresse til den du vil sende til.');
DEFINE('_EMAIL_MSG',' Den følgjande sida fra nettstaden "%s" blei sendt til deg av %s ( %s ).

Du kan nå den fra følgjande nettadresse:
%s');
DEFINE('_EMAIL_INFO','Sida er sendt av');
DEFINE('_EMAIL_SENT','Denne sida er sendt til');
DEFINE('_PROMPT_CLOSE','Lukk vindu');

/** classes/html/content.php */
DEFINE('_AUTHOR_BY', ' Bidrag fra');
DEFINE('_WRITTEN_BY', ' Skrive av');
DEFINE('_LAST_UPDATED', 'Sist oppdatert');
DEFINE('_BACK','[ Tilbake ]');
DEFINE('_LEGEND','Teiknforklåring');
DEFINE('_DATE','Dato');
DEFINE('_ORDER_DROPDOWN','Rekkefølgje');
DEFINE('_HEADER_TITLE','Tittel');
DEFINE('_HEADER_AUTHOR','Forfattar');
DEFINE('_HEADER_SUBMITTED','Innsendt');
DEFINE('_HEADER_HITS','Treff');
DEFINE('_E_EDIT','Rediger');
DEFINE('_E_ADD','Legg til');
DEFINE('_E_WARNUSER','Ver vennleg lagre endringene eller avbryt');
DEFINE('_E_WARNTITLE','Du må skriva ein tittel');
DEFINE('_E_WARNTEXT','Du må ha ein introduksjonstekst');
DEFINE('_E_WARNCAT','Velj ein kategori');
DEFINE('_E_CONTENT','Innhald');
DEFINE('_E_TITLE','Tittel:');
DEFINE('_E_CATEGORY','Kategori:');
DEFINE('_E_INTRO','Introduksjonstekst');
DEFINE('_E_MAIN','Hovudtekst');
DEFINE('_E_MOSIMAGE','Sett inn {mosimage}');
DEFINE('_E_IMAGES','Bilder');
DEFINE('_E_GALLERY_IMAGES','Galleribilder');
DEFINE('_E_CONTENT_IMAGES','Innhaldsbilder');
DEFINE('_E_EDIT_IMAGE','Rediger bilde');
DEFINE('_E_NO_IMAGE','Ingen bilete'); 
DEFINE('_E_INSERT','Sett inn');
DEFINE('_E_UP','Opp');
DEFINE('_E_DOWN','Ned');
DEFINE('_E_REMOVE','Fjern');
DEFINE('_E_SOURCE','Kilde:');
DEFINE('_E_ALIGN','Plassering:');
DEFINE('_E_ALT','Alternativ tekst:');
DEFINE('_E_BORDER','Ramme:');
DEFINE('_E_CAPTION','Bildetekst');
DEFINE('_E_CAPTION_POSITION','Posisjon for bileteteksten');
DEFINE('_E_CAPTION_ALIGN','Oppstilling av bileteteksten');
DEFINE('_E_CAPTION_WIDTH','Breidde for bileteteksten'); 
DEFINE('_E_APPLY','Bruk');
DEFINE('_E_PUBLISHING','Publisering');
DEFINE('_E_STATE','Status:');
DEFINE('_E_AUTHOR_ALIAS','Forfattar-alias:');
DEFINE('_E_ACCESS_LEVEL','Tilgangsnivå:');
DEFINE('_E_ORDERING','Rekkefølgje:');
DEFINE('_E_START_PUB','Start publisering:');
DEFINE('_E_FINISH_PUB','Avslutt publisering:');
DEFINE('_E_SHOW_FP','Vis på framsida:');
DEFINE('_E_HIDE_TITLE','Skjul tittel:');
DEFINE('_E_METADATA','Metadata');
DEFINE('_E_M_DESC','Framstilling:');
DEFINE('_E_M_KEY','Nykkelord:');
DEFINE('_E_SUBJECT','Emne:');
DEFINE('_E_EXPIRES','Utløpsdato:');
DEFINE('_E_VERSION','Versjon:');
DEFINE('_E_ABOUT','Om');
DEFINE('_E_CREATED','Oppretta:');
DEFINE('_E_LAST_MOD','Sist endra:');
DEFINE('_E_HITS','Treff:');
DEFINE('_E_SAVE','Lagre');
DEFINE('_E_CANCEL','Bryt av');
DEFINE('_E_REGISTERED','Berre for registrerte brukarar');
DEFINE('_E_ITEM_INFO','Informasjon');
DEFINE('_E_ITEM_SAVED','Lagringa var vellukka.');
DEFINE('_ITEM_PREVIOUS','&lt; Forrige');
DEFINE('_ITEM_NEXT','Neste &gt;');
DEFINE('_KEY_NOT_FOUND','Kunne ikkje finne nykkelreferanse');


/** content.php */
DEFINE('_SECTION_ARCHIVE_EMPTY','Det er for tida ingen arkiverte artiklar i denne seksjonen, kom tilbake seinere');
DEFINE('_CATEGORY_ARCHIVE_EMPTY','Det er for tida ingen arkiverte artiklar i denne kategorien, kom tilbake seinere');
DEFINE('_HEADER_SECTION_ARCHIVE','Seksjonsarkiv');
DEFINE('_HEADER_CATEGORY_ARCHIVE','Kategoriarkiv');
DEFINE('_ARCHIVE_SEARCH_FAILURE','Det er ingen arkiverte artiklar for %s %s');	// values are month then year
DEFINE('_ARCHIVE_SEARCH_SUCCESS','Her er dei arkiverte artiklane for %s %s');	// values are month then year
DEFINE('_FILTER','Filter');
DEFINE('_ORDER_DROPDOWN_DA','Dato stigande');
DEFINE('_ORDER_DROPDOWN_DD','Dato synkande');
DEFINE('_ORDER_DROPDOWN_TA','Tittel stigande');
DEFINE('_ORDER_DROPDOWN_TD','Tittel synkande');
DEFINE('_ORDER_DROPDOWN_HA','Treff stigande');
DEFINE('_ORDER_DROPDOWN_HD','Treff synkande');
DEFINE('_ORDER_DROPDOWN_AUA','Forfatter stigande');
DEFINE('_ORDER_DROPDOWN_AUD','Forfatter synkande');
DEFINE('_ORDER_DROPDOWN_O','Rekkefølgje');

/** poll.php */
DEFINE('_ALERT_ENABLED','Informasjonskapslar må vera aktivert.');
DEFINE('_ALREADY_VOTE','Du har allereide stemt på denne spørreundersøkinga i dag.');
DEFINE('_NO_SELECTION','Du har ikkje valt eit alternativ. Ver vennleg prøv igjen');
DEFINE('_THANKS','Takk for din stemme.');
DEFINE('_SELECT_POLL','Velj spørreundersøking frå lista');

/** classes/html/poll.php */
DEFINE('_JAN','januar');
DEFINE('_FEB','februar');
DEFINE('_MAR','mars');
DEFINE('_APR','april');
DEFINE('_MAY','mai');
DEFINE('_JUN','juni');
DEFINE('_JUL','juli');
DEFINE('_AUG','august');
DEFINE('_SEP','september');
DEFINE('_OCT','oktober');
DEFINE('_NOV','november');
DEFINE('_DEC','desember');
DEFINE('_POLL_TITLE','Spørreundersøking – Resultatar');
DEFINE('_SURVEY_TITLE','Tittel på spørreundersøkinga:');
DEFINE('_NUM_VOTERS','Antall stemmer');
DEFINE('_FIRST_VOTE','Første stemme');
DEFINE('_LAST_VOTE','Siste stemme');
DEFINE('_SEL_POLL','Velj spørreundersøking:');
DEFINE('_NO_RESULTS','Ingen resultatar for denne spørreundersøkinga.');

/** registration.php */
DEFINE('_ERROR_PASS','årsak, ingen tilsvarande brukar blei funne');
DEFINE('_NEWPASS_MSG','Brukarkontoen $checkusername er tilknytta denne e-postadressa.\n'
.'En brukar ved $mosConfig_live_site har bede om å få tilsendt nytt passord.\n\n'
.' Det nye passordet ditt er: $newpass\n\nIkkje bli bekymra om du ikkje har spurt om dette.'
.' Du ser denne meldinga, andre gjer ikkje. Om dette var en feil, logg inn med det nye'
.' passordet ditt og endre det tlbake.');
DEFINE('_NEWPASS_SUB','$_sitename :: Nytt passord for - $checkusername');
DEFINE('_NEWPASS_SENT','Nytt passord oppretta og sendt.');
DEFINE('_REGWARN_NAME','Ver vennleg, skriv inn namnet ditt.');
DEFINE('_REGWARN_UNAME','Ver vennleg, skriv inn eit brukarnavn.');
DEFINE('_REGWARN_MAIL','Ver vennleg, skriv inn ei gyldig e-postadresse.');
DEFINE('_REGWARN_PASS','Ver vennleg, skriv eit gyldig passord. Ingen mellomrom, meir enn 6 teikn og kun teikna 0-9,a-z,A-Z');
DEFINE('_REGWARN_VPASS1','Ver vennleg, gjenta passordet.');
DEFINE('_REGWARN_VPASS2','Passordet og gjentakinga er ikkje like. Ver vennleg, prøv igjen.');
DEFINE('_REGWARN_INUSE','Dette brukarnamnet/passordet er allereide i bruk. Ver vennleg, velj eit anna.');
DEFINE('_REGWARN_EMAIL_INUSE', 'Denne e-posten er allereide registrert. Om du har gløymt passordet, klikk på "Gløymt passord?" og eit nytt passord vil bli sendt til deg.');
DEFINE('_SEND_SUB','Kontodetaljar for %s ved %s');
DEFINE('_USEND_MSG_ACTIVATE', 'Hei %s,

Takk for at du registrerte deg ved %s. Ein konto er blitt oppretta for deg, men må aktiverast før du kan bruke den.
Klikk følgjande lenkje for å aktivera kontoen, eller kopiér adressa og lim den inn i adressefeltet i nettlesaren din:
%s

Etter aktivering kan du logge inn ved %s med følgjande brukarnamn og passord:

Brukernamn - %s
Passord - %s');
DEFINE('_USEND_MSG', "Hei %s,

Takk for at du registrerte deg ved %s.

Du kan nå logge inn ved %s med brukarnamnet og passordet du er registrert med.");
DEFINE('_USEND_MSG_NOPASS','Hei $name,\n\nDu har blitt lagt til som brukar ved $mosConfig_live_site.\n'
.'Du kan logge inn ved $mosConfig_live_site med brukernamnet og passordet du er registrert med.\n\n'
.'ikkje svar på denne e-posten. Den er automatisk oppretta og berre til informasjon\n');
DEFINE('_ASEND_MSG','Hei %s,

En ny brukar er registrert ved %s.
Denne e-posten inneheld detaljane:

Namn - %s
E-post - %s
Brukarnamn - %s

ikkje svar på denne e-posten. Den er automatisk oppretta og berre til informasjon');
DEFINE('_REG_COMPLETE_NOPASS','<div class="componentheading">Registreringa er gjennomført.</div><br />&nbsp;&nbsp;'
.'Du kan nå logge inn.<br />&nbsp;&nbsp;');
DEFINE('_REG_COMPLETE', '<div class="componentheading">Registreringa er gjennomført.</div><br />Du kan nå logge inn.');
DEFINE('_REG_COMPLETE_ACTIVATE', '<div class="componentheading">Registreringa er gjennomført.</div><br />Din brukarkonto er oppretta og aktiviseringslenkje er sendt til e-postadressa du oppga. Husk at du må aktivera kontoen ved å klikke på lenkja i e-posten du mottar, før du kan logge inn.');
DEFINE('_REG_ACTIVATE_COMPLETE', '<div class="componentheading">Kontoen er aktivert.</div><br />Din konto har blitt aktivert. Du kan nå logge inn med brukernamnet og passordet du valde ved registreringa.');
DEFINE('_REG_ACTIVATE_NOT_FOUND', '<div class="componentheading">Ugyldig aktiveringslenkje.</div><br />Denne kontoen finnest ikkje i vår database, eller kontoen har allerede blitt aktivert.');
DEFINE('_REG_ACTIVATE_FAILURE', '<div class="componentheading">Feil i aktiviseringa!</div><br />Kontoen din er ikkje aktivert. Kontakt administrator.');

/** classes/html/registration.php */
DEFINE('_PROMPT_PASSWORD','Glemt passordet?');
DEFINE('_NEW_PASS_DESC','Vennligst oppgi brukernamn og e-postadresse og klikk "Send passord".<br />'
.'Du vil snart motta eit nytt passord. Bruk det nye passordet for å logge inn.');
DEFINE('_PROMPT_UNAME','Brukernamn:');
DEFINE('_PROMPT_EMAIL','E-postadresse:');
DEFINE('_BUTTON_SEND_PASS','Send passord');
DEFINE('_REGISTER_TITLE','Registrering');
DEFINE('_REGISTER_NAME','Namn:');
DEFINE('_REGISTER_UNAME','Brukernamn:');
DEFINE('_REGISTER_EMAIL','E-post:');
DEFINE('_REGISTER_PASS','Passord:');
DEFINE('_REGISTER_VPASS','Gjenta passord:');
DEFINE('_REGISTER_REQUIRED','Felt markert med stjerne (*) er obligatorisk.');
DEFINE('_BUTTON_SEND_REG','Send registrering');
DEFINE('_SENDING_PASSWORD','Ditt passord vil bli sendt til e-postadressa over.<br />Når du har mottatt ditt'
.' nye passord kan du logge inn og endre det.');

/** classes/html/search.php */
DEFINE('_SEARCH_TITLE','Søk');
DEFINE('_PROMPT_KEYWORD','Søkeord');
DEFINE('_SEARCH_MATCHES','returnerte %d treff');
DEFINE('_CONCLUSION','Totalt $totalRows resultat funne.  Søk etter <b>$searchword</b> med');
DEFINE('_NOKEYWORD','Ingen resultat blei funne');
DEFINE('_IGNOREKEYWORD','Eit eller fleire ord blei utelate i søket');
DEFINE('_SEARCH_ANYWORDS','Med nokon av orda');
DEFINE('_SEARCH_ALLWORDS','Alle orda');
DEFINE('_SEARCH_PHRASE','Eksakt frase');
DEFINE('_SEARCH_NEWEST','Nyaste først');
DEFINE('_SEARCH_OLDEST','Eldste først');
DEFINE('_SEARCH_POPULAR','Mest populær');
DEFINE('_SEARCH_ALPHABETICAL','Alfabetisk');
DEFINE('_SEARCH_CATEGORY','Seksjon/Kategori');
DEFINE('_SEARCH_MESSAGE','Søkestrengen må vera mellom 3 og 20 teikn');
DEFINE('_SEARCH_ARCHIVED','Arkivert');
DEFINE('_SEARCH_CATBLOG','Kategoriblogg');
DEFINE('_SEARCH_CATLIST','Kategoriliste');
DEFINE('_SEARCH_NEWSFEEDS','Nyheitsmating');
DEFINE('_SEARCH_SECLIST','Seksjonliste');
DEFINE('_SEARCH_SECBLOG','Seksjonblogg');

/** templates/*.php */
DEFINE('_ISO','charset=iso-8859-1');
DEFINE('_DATE_FORMAT','l d F Y');  //Uses PHP's DATE Command Format - Depreciated
/**
* Modify this line to reflect how you want the date to appear in your site
*
*e.g. DEFINE("_DATE_FORMAT_LC","%A, %d %B %Y %H:%M"); //Uses PHP's strftime Command Format
*/
DEFINE('_DATE_FORMAT_LC',"%A %d. %B %Y"); //Uses PHP's strftime Command Format
DEFINE('_DATE_FORMAT_LC2',"%A %d. %B %Y %H:%M");
DEFINE('_SEARCH_BOX','søk…');
DEFINE('_NEWSFLASH_BOX','Siste nytt');
DEFINE('_MAINMENU_BOX','Hovudmeny');

/** classes/html/usermenu.php */
DEFINE('_UMENU_TITLE','Brukarmeny');
DEFINE('_HI','Hei, ');

/** user.php */
DEFINE('_SAVE_ERR','Ver vennleg fyll ut alle feltene.');
DEFINE('_THANK_SUB','Takk for bidraget ditt. Det vil nå sendes til godkjenning før publisering.');
DEFINE('_THANK_SUB_PUB','Takk for bidraget ditt.'); 
DEFINE('_UP_SIZE','Du kan ikkje laste opp filer større enn 15kb.');
DEFINE('_UP_EXISTS','Et bilde med namnet $userfile_name finnes allereide. Gje fila eit nytt namn og prøv igjen.');
DEFINE('_UP_COPY_FAIL','Kopiering feila');
DEFINE('_UP_TYPE_WARN','Du kan berre laste opp gif- eller jpg-bilder.');
DEFINE('_MAIL_SUB','Sendt av brukar');
DEFINE('_MAIL_MSG','Hei $adminName,\n\n\nEn $type:\n [ $title ]\n har nettopp blitt sendt av:\n [ $author ]\n'
.' for $mosConfig_live_site.\n\n\n\n'
.'Ver vennleg gå til $mosConfig_live_site/administrator for å sjå og godkjenne denne $type.\n\n'
.'Ikkje svar på denne eposten. Den er automatisk oppretta og berre til informasjon\n');
DEFINE('_PASS_VERR1','Om du endrar passordet, gjenta passordet for å stadfeste det.');
DEFINE('_PASS_VERR2','Om du endrar passordet, pass på at passordet og gjentakinga av passordet blir like.');
DEFINE('_UNAME_INUSE','Dette brukarnamnet er allereide i bruk.');
DEFINE('_UPDATE','Oppdater');
DEFINE('_USER_DETAILS_SAVE','Innstillingane dine er lagra.');
DEFINE('_USER_LOGIN','Brukarinnlogging');

/** components/com_user */
DEFINE('_EDIT_TITLE','Rediger dine personlege opplysningar');
DEFINE('_YOUR_NAME','Ditt namn:');
DEFINE('_EMAIL','E-post:');
DEFINE('_UNAME','Brukernamn:');
DEFINE('_PASS','Passord:');
DEFINE('_VPASS','Gjenta passord:');
DEFINE('_SUBMIT_SUCCESS','Innsendt!');
DEFINE('_SUBMIT_SUCCESS_DESC','Bidraget ditt er sendt til våre administratorar. Det vil bli vurdert før publisering.');
DEFINE('_WELCOME','Velkommen!');
DEFINE('_WELCOME_DESC','Velkommen til brukarseksjonen');
DEFINE('_CONF_CHECKED_IN','Alle dine utsjekka bidrag har blitt sjekka inn');
DEFINE('_CHECK_TABLE','Kontrollerer tabell');
DEFINE('_CHECKED_IN','Innsjekka ');
DEFINE('_CHECKED_IN_ITEMS',' Bidrag');
DEFINE('_PASS_MATCH','Passorda er ikkje samstemde');

/** components/com_banners */
DEFINE('_BNR_CLIENT_NAME','Du må velja et namn for klienten.');
DEFINE('_BNR_CONTACT','Du må velja ein kontakt for klienten.');
DEFINE('_BNR_VALID_EMAIL','Du må velja ein gyldig e-postadresse for klienten.');
DEFINE('_BNR_CLIENT','Du må velja ein klient,');
DEFINE('_BNR_NAME','Du må velja eit namn for banneret.');
DEFINE('_BNR_IMAGE','Du må velja eit bilde for banneret.');
DEFINE('_BNR_URL','Du må velja ein nettadresse/eigen kode for banneret.');

/** components/com_login */
DEFINE('_ALREADY_LOGIN','Du er allereide innlogga.');
DEFINE('_LOGOUT','Klikk her for å logge ut');
DEFINE('_LOGIN_TEXT','Bruk brukernamn- og passordfelta på sida for full tilgang');
DEFINE('_LOGIN_SUCCESS','Du har blitt logga inn');
DEFINE('_LOGOUT_SUCCESS','Du har blitt logga ut');
DEFINE('_LOGIN_DESCRIPTION','Ver vennleg logg inn for tilgang til den private delen av nettstaden');
DEFINE('_LOGOUT_DESCRIPTION','Du er innlogga i den private delen av nettstaden');


/** components/com_weblinks */
DEFINE('_WEBLINKS_TITLE','Nettlenker');
DEFINE('_WEBLINKS_DESC','Vi er ofte på nettet. Når vi finner et godt nettsted vil vi liste det'
.' her for at du kan ha glede av det. <br />Velg et av emnene under, deretter velg en adresse du vil besøke.');
DEFINE('_HEADER_TITLE_WEBLINKS','Nettlenker');
DEFINE('_SECTION','Seksjon:');
DEFINE('_SUBMIT_LINK','Bidra med en nettlenke');
DEFINE('_URL','Nettadresse:');
DEFINE('_URL_DESC','Beskrivelse:');
DEFINE('_NAME','Navn:');
DEFINE('_WEBLINK_EXIST','Det finnes allerede en lenke med det navnet. Vennligst prøv igjen.');
DEFINE('_WEBLINK_TITLE','Nettlenken må ha en tittel.');

/** components/com_newfeeds */
DEFINE('_FEED_NAME','Syndikasjonsnamn');
DEFINE('_FEED_ARTICLES','Antall artiklar');
DEFINE('_FEED_LINK','Syndikasjonslenkje');

/** whos_online.php */
DEFINE('_WE_HAVE', 'Vi har ');
DEFINE('_AND', ' og ');
DEFINE('_GUEST_COUNT','%s gjestar');
DEFINE('_GUESTS_COUNT','%s gjestar');
DEFINE('_MEMBER_COUNT','%s brukarar');
DEFINE('_MEMBERS_COUNT','%s brukarar');
DEFINE('_ONLINE',' her no');
DEFINE('_NONE','Ingen brukarar her no');

/** modules/mod_banners */
DEFINE('_BANNER_ALT','Annonse');

/** modules/mod_random_image */
DEFINE('_NO_IMAGES','Ingen bilete'); 

/** modules/mod_stats.php */
DEFINE('_TIME_STAT','Tid');
DEFINE('_MEMBERS_STAT','Brukarar');
DEFINE('_HITS_STAT','Treff');
DEFINE('_NEWS_STAT','Nyheitar');
DEFINE('_LINKS_STAT','Nettlenkjer');
DEFINE('_VISITORS','Vitjingar');

/** /adminstrator/components/com_menus/admin.menus.html.php */
DEFINE('_MAINMENU_HOME','* Den første publiserte artikkelen i denna menyen [mainmenu] er standard `åpningsside` for nettstaden *');
DEFINE('_MAINMENU_DEL','* Du kan ikkje `slette` denne menyen, den er ein naudsynt del av Joomla! *');
DEFINE('_MENU_GROUP','* Somme `menytyper` er synlege i meir enn ei gruppe *');


/** administrators/components/com_users */
DEFINE('_NEW_USER_MESSAGE_SUBJECT', 'Detaljar for ny bruker' );
DEFINE('_NEW_USER_MESSAGE', 'Hei %s,


Du er lagt til som brukar ved %s av ein administrator.

Denne eposten inneheld brukarnamn og passord for innlogging ved %s

Brukernavn - %s
Passord - %s


ikkje svar på denne e-posten. Den er automatisk oppretta og meint berre til informasjon');

/** administrators/components/com_massmail */
DEFINE('_MASSMAIL_MESSAGE', 'Dette er ein e-post frå %s

Melding:
' );

/** includes/pdf.php */
DEFINE('_PDF_GENERATED','Produsert:');
DEFINE('_PDF_POWERED','Drifta med Joomla!');
?>