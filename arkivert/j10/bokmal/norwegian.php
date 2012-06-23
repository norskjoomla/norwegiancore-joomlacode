<?php
/**
* @version $Id: norwegian.php 158 2007-01-27 23:59:57Z rued $
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
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

// Site page note found
define( '_404', 'Vi beklager, men siden du søker finnes ikke.' );
define( '_404_RTS', 'Returner til nettstedet' );

define( '_SYSERR1', 'Adapter for databasen kunne ikke finnes' );
define( '_SYSERR2', 'Kunne ikke opprette kontakt med databaseserveren' );
define( '_SYSERR3', 'Kunne ikke opprette kontakt med databasen' );

/** common */
DEFINE('_LANGUAGE','no');
DEFINE('_NOT_AUTH','Du er ikke autorisert til å se denne ressursen.');
DEFINE('_DO_LOGIN','Du må logge inn.');
DEFINE('_VALID_AZ09',"Skriv inn et gyldig %s.  Ingen mellomrom, mer enn %d tegn og bare tegnene 0-9,a-z,A-Z");
DEFINE('_VALID_AZ09_USER',"Skriv inn et gyldig %s.  Mer enn %d tegn og bare tegnene 0-9,a-z,A-Z");
DEFINE('_CMN_YES','Ja');
DEFINE('_CMN_NO','Nei');
DEFINE('_CMN_SHOW','Vis');
DEFINE('_CMN_HIDE','Skjul');

DEFINE('_CMN_NAME','Navn');
DEFINE('_CMN_DESCRIPTION','Beskrivelse');
DEFINE('_CMN_SAVE','Lagre');
DEFINE('_CMN_APPLY','Utfør');
DEFINE('_CMN_CANCEL','Avbryt');
DEFINE('_CMN_PRINT','Utskrift');
DEFINE('_CMN_PDF','PDF');
DEFINE('_CMN_EMAIL','E-post');
DEFINE('_ICON_SEP','|');
DEFINE('_CMN_PARENT','Eier');
DEFINE('_CMN_ORDERING','Rekkefølge');
DEFINE('_CMN_ACCESS','Adgangsnivå');
DEFINE('_CMN_SELECT','Velg');

DEFINE('_CMN_NEXT','Neste');
DEFINE('_CMN_NEXT_ARROW'," &gt;&gt;");
DEFINE('_CMN_PREV','Forrige');
DEFINE('_CMN_PREV_ARROW',"&lt;&lt; ");

DEFINE('_CMN_SORT_NONE','Ingen sortering');
DEFINE('_CMN_SORT_ASC','Sorter stigende');
DEFINE('_CMN_SORT_DESC','Sorter synkende');

DEFINE('_CMN_NEW','Ny');
DEFINE('_CMN_NONE','Ingen');
DEFINE('_CMN_LEFT','Venstre');
DEFINE('_CMN_RIGHT','Høyre');
DEFINE('_CMN_CENTER','Sentrer');
DEFINE('_CMN_ARCHIVE','Arkiver');
DEFINE('_CMN_UNARCHIVE','Avarkiver');
DEFINE('_CMN_TOP','Start');
DEFINE('_CMN_BOTTOM','Slutt');

DEFINE('_CMN_PUBLISHED','Publisert');
DEFINE('_CMN_UNPUBLISHED','Upublisert');

DEFINE('_CMN_EDIT_HTML','Rediger HTML');
DEFINE('_CMN_EDIT_CSS','Rediger CSS');

DEFINE('_CMN_DELETE','Slett');

DEFINE('_CMN_FOLDER','Mappe');
DEFINE('_CMN_SUBFOLDER','Undermappe');
DEFINE('_CMN_OPTIONAL','Valgfri');
DEFINE('_CMN_REQUIRED','Påkrevd');

DEFINE('_CMN_CONTINUE','Fortsett');

DEFINE('_STATIC_CONTENT','Statisk innhold');

DEFINE('_CMN_NEW_ITEM_LAST','Nye bidrag vises som standard sist');
DEFINE('_CMN_NEW_ITEM_FIRST','Nye bidrag vises som standard først');
DEFINE('_LOGIN_INCOMPLETE','Fyll ut brukernavn og passordfeltene.');
DEFINE('_LOGIN_BLOCKED','Du har blitt blokkert fra å logge inn. Kontakt administratoren.');
DEFINE('_LOGIN_INCORRECT','Ugyldig brukernavn eller passord. Prøv igjen.');
DEFINE('_LOGIN_NOADMINS','Du kan ikke logge inn, siden ingen administratorer har blitt opprettet.');
DEFINE('_CMN_JAVASCRIPT','!Advarsel! Javascript må være slått på for komplett funksjonalitet.');

DEFINE('_NEW_MESSAGE','En ny privat melding er ankommet');
DEFINE('_MESSAGE_FAILED','Brukeren har låst sin postkasse. Meldingen kom ikke fram.');

DEFINE('_CMN_IFRAMES', 'Denne funksjonen vil ikke fungere skikkelig. Din nettleser støtter ikke integrerte rammer');

DEFINE('_INSTALL_3PD_WARN','Advarsel: Installasjon av 3parts-tillegg kan gjøre serveren mindre sikker. Oppdatering av Joomla! vil ikke oppdatere installerte 3parts-tillegg.<br />For mer informasjon om hvordan holde siden din sikker, besøk <a href="http://forum.joomla.org/index.php/board,267.0.html" target="_blank" style="color: blue; text-decoration: underline;">Joomla!-sikkerhetsforum</a>.');
DEFINE('_INSTALL_WARN','Av sikkerhetsårsaker må du slette hele installasjonsmappen med alle filer og undermapper, deretter kan du oppdatere denne siden i nettleser.');
DEFINE('_TEMPLATE_WARN','<font color=\"red\"><b>Malfilen ble ikke funnet! Leter etter malen </b></font>');
DEFINE('_NO_PARAMS','Ingen parametere for denne modulen');
DEFINE('_HANDLER','Behandler for denne typen er ikke definert');

/** mambots */
DEFINE('_TOC_JUMPTO','Artikkeloversikt');

/**  content */
DEFINE('_READ_MORE','Les mer...');
DEFINE('_READ_MORE_REGISTER','Registrer deg for å lese mer...');
DEFINE('_MORE','Mer...');
DEFINE('_ON_NEW_CONTENT', "Et nytt bidrag har blitt innsendt av [ %s ] med tittelen [ %s ] fra seksjon [ %s ] og kategori [ %s ]" );
DEFINE('_SEL_CATEGORY','Velg kategori');
DEFINE('_SEL_SECTION','Velg seksjon');
DEFINE('_SEL_AUTHOR','- Velg forfatter -');
DEFINE('_SEL_POSITION','- Velg posisjon -');
DEFINE('_SEL_TYPE','- Velg type -');
DEFINE('_EMPTY_CATEGORY','Denne kategorien er for øyeblikket tom');
DEFINE('_EMPTY_BLOG','Det er ingen artikler som kan vises');
DEFINE('_NOT_EXIST','Siden du forsøker å nå eksisterer ikke.<br />Velg en side fra hovedmenyen.');
DEFINE('_SUBMIT_BUTTON','Send');

/** classes/html/modules.php */
DEFINE('_BUTTON_VOTE','Stem');
DEFINE('_BUTTON_RESULTS','Resultater');
DEFINE('_USERNAME','Brukernavn');
DEFINE('_LOST_PASSWORD','Glemt passordet?');
DEFINE('_PASSWORD','Passord');
DEFINE('_BUTTON_LOGIN','Logg inn');
DEFINE('_BUTTON_LOGOUT','Logg ut');
DEFINE('_NO_ACCOUNT','Ingen konto ennå?');
DEFINE('_CREATE_ACCOUNT','Registrer deg!');
DEFINE('_VOTE_POOR','Dårlig');
DEFINE('_VOTE_BEST','Best');
DEFINE('_USER_RATING','Brukerrangering');
DEFINE('_RATE_BUTTON','Rangering');
DEFINE('_REMEMBER_ME','Husk meg');

/** contact.php */
DEFINE('_ENQUIRY','Tilbakemelding');
DEFINE('_ENQUIRY_TEXT','Dette er en tilbakemelding via %s fra');
DEFINE('_COPY_TEXT','Dette er en kopi av følgende melding du sendte til Administratoren ved %s');
DEFINE('_COPY_SUBJECT','Kopi av: ');
DEFINE('_THANK_MESSAGE','Takk for din e-post');
DEFINE('_CLOAKING','Denne e-postadressen er beskyttet mot programmer som samler e-postadresser, du må slå på Javascript for å kunne se den.');
DEFINE('_CONTACT_HEADER_NAME','Navn');
DEFINE('_CONTACT_HEADER_POS','Stilling');
DEFINE('_CONTACT_HEADER_EMAIL','E-post');
DEFINE('_CONTACT_HEADER_PHONE','Telefon');
DEFINE('_CONTACT_HEADER_FAX','Faks');
DEFINE('_CONTACTS_DESC','Kontaktlisten for dette nettstedet.');
DEFINE('_CONTACT_MORE_THAN','Du kan ikke oppgi mer enn en e-postadresse.');

/** classes/html/contact.php */
DEFINE('_CONTACT_TITLE','Kontakt');
DEFINE('_EMAIL_DESCRIPTION','Send en e-post til denne kontakten:');
DEFINE('_NAME_PROMPT',' Ditt navn:');
DEFINE('_EMAIL_PROMPT',' Din e-postadresse:');
DEFINE('_MESSAGE_PROMPT',' Din beskjed:');
DEFINE('_SEND_BUTTON','Send');
DEFINE('_CONTACT_FORM_NC','Kontroller at skjemaet er komplett og korrekt utfylt.');
DEFINE('_CONTACT_TELEPHONE','Telefon: ');
DEFINE('_CONTACT_MOBILE','Mobil: ');
DEFINE('_CONTACT_FAX','Faks: ');
DEFINE('_CONTACT_EMAIL','E-post: ');
DEFINE('_CONTACT_NAME','Navn: ');
DEFINE('_CONTACT_POSITION','Posisjon: ');
DEFINE('_CONTACT_ADDRESS','Adresse: ');
DEFINE('_CONTACT_MISC','Informasjon: ');
DEFINE('_CONTACT_SEL','Velg kontakt:');
DEFINE('_CONTACT_NONE','Det er ingen kontaktdetaljer oppført.');
DEFINE('_CONTACT_ONE_EMAIL','Du kan ikke oppgi mer enn en e-postadresse.');
DEFINE('_EMAIL_A_COPY','Send en kopi av denne meldingen til din egen e-postadresse');
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
DEFINE('_PN_END','Slutt');
DEFINE('_PN_DISPLAY_NR','Vis nr.');
DEFINE('_PN_RESULTS','Resultat');

/** emailfriend */
DEFINE('_EMAIL_TITLE','Send e-post til en venn');
DEFINE('_EMAIL_FRIEND','Send dette per e-post til en venn.');
DEFINE('_EMAIL_FRIEND_ADDR','Din venns e-post:');
DEFINE('_EMAIL_YOUR_NAME','Ditt navn:');
DEFINE('_EMAIL_YOUR_MAIL','Din e-postadresse:');
DEFINE('_SUBJECT_PROMPT',' Meldingsemne:');
DEFINE('_BUTTON_SUBMIT_MAIL','Send e-post');
DEFINE('_BUTTON_CANCEL','Avbryt');
DEFINE('_EMAIL_ERR_NOINFO','Du må oppgi din gyldige e-postadresse samt gyldig e-postadresse til den du skal sende til.');
DEFINE('_EMAIL_MSG',' Den følgende siden fra "%s" nettstedet har blitt sendt til deg av %s ( %s ).

Du kan sjekke den ut på følgende adresse:
%s');
DEFINE('_EMAIL_INFO','Siden sendt av');
DEFINE('_EMAIL_SENT','Denne siden er sendt til');
DEFINE('_PROMPT_CLOSE','Lukk vindu');

/** classes/html/content.php */
DEFINE('_AUTHOR_BY', ' Bidrag fra');
DEFINE('_WRITTEN_BY', ' Skrevet av');
DEFINE('_LAST_UPDATED', 'Sist oppdatert');
DEFINE('_BACK','[ Tilbake ]');
DEFINE('_LEGEND','Tegnforklaring');
DEFINE('_DATE','Dato');
DEFINE('_ORDER_DROPDOWN','Rekkefølge');
DEFINE('_HEADER_TITLE','Tittel');
DEFINE('_HEADER_AUTHOR','Forfatter');
DEFINE('_HEADER_SUBMITTED','Sendt');
DEFINE('_HEADER_HITS','Treff');
DEFINE('_E_EDIT','Rediger');
DEFINE('_E_ADD','Legg til');
DEFINE('_E_WARNUSER','Avbryt eller lagre endringer');
DEFINE('_E_WARNTITLE','Du må oppgi en tittel');
DEFINE('_E_WARNTEXT','Du må ha ha en introduksjonstekst');
DEFINE('_E_WARNCAT','Velg en kategori');
DEFINE('_E_CONTENT','Innhold');
DEFINE('_E_TITLE','Tittel:');
DEFINE('_E_CATEGORY','Kategori:');
DEFINE('_E_INTRO','Introduksjonstekst');
DEFINE('_E_MAIN','Hovedtekst');
DEFINE('_E_MOSIMAGE','Sett inn {mosimage}');
DEFINE('_E_IMAGES','Bilder');
DEFINE('_E_GALLERY_IMAGES','Galleribilder');
DEFINE('_E_CONTENT_IMAGES','Innholdsbilder');
DEFINE('_E_EDIT_IMAGE','Rediger bilde');
DEFINE('_E_NO_IMAGE','Ingen bilde');
DEFINE('_E_INSERT','Sett inn');
DEFINE('_E_UP','Opp');
DEFINE('_E_DOWN','Ned');
DEFINE('_E_REMOVE','Fjern');
DEFINE('_E_SOURCE','Kilde:');
DEFINE('_E_ALIGN','Oppstilling:');
DEFINE('_E_ALT','Alternativ tekst:');
DEFINE('_E_BORDER','Ramme:');
DEFINE('_E_CAPTION','Bildetekst');
DEFINE('_E_CAPTION_POSITION','Posisjon for bildeteksten');
DEFINE('_E_CAPTION_ALIGN','Oppstilling av bildeteksten');
DEFINE('_E_CAPTION_WIDTH','Bredde på bildeteksten');
DEFINE('_E_APPLY','Bruk');
DEFINE('_E_PUBLISHING','Publiserer');
DEFINE('_E_STATE','Status:');
DEFINE('_E_AUTHOR_ALIAS','Forfatteralias:');
DEFINE('_E_ACCESS_LEVEL','Adgangsnivå:');
DEFINE('_E_ORDERING','Rekkefølge:');
DEFINE('_E_START_PUB','Start publisering:');
DEFINE('_E_FINISH_PUB','Avslutt publisering:');
DEFINE('_E_SHOW_FP','Vis på forsiden:');
DEFINE('_E_HIDE_TITLE','Skjul tittel:');
DEFINE('_E_METADATA','Metadata');
DEFINE('_E_M_DESC','Beskrivelse:');
DEFINE('_E_M_KEY','Nøkkelord:');
DEFINE('_E_SUBJECT','Emne:');
DEFINE('_E_EXPIRES','Utgår dato:');
DEFINE('_E_VERSION','Versjon:');
DEFINE('_E_ABOUT','Om');
DEFINE('_E_CREATED','Opprettet:');
DEFINE('_E_LAST_MOD','Sist oppdatert:');
DEFINE('_E_HITS','Treff:');
DEFINE('_E_SAVE','Lagre');
DEFINE('_E_CANCEL','Avbryt');
DEFINE('_E_REGISTERED','Kun for registrerte brukere');
DEFINE('_E_ITEM_INFO','Informasjon');
DEFINE('_E_ITEM_SAVED','Lagring vellykket.');
DEFINE('_ITEM_PREVIOUS','&lt; Forrige');
DEFINE('_ITEM_NEXT','Neste &gt;');
DEFINE('_KEY_NOT_FOUND','Kunne ikke finne nøkkelreferanse');


/** content.php */
DEFINE('_SECTION_ARCHIVE_EMPTY','Det er for tiden ingen arkiverte artikler for denne seksjonen, kom tilbake senere');
DEFINE('_CATEGORY_ARCHIVE_EMPTY','Det er for tiden ingen arkiverte artikler for denne kategorien, kom tilbake senere');
DEFINE('_HEADER_SECTION_ARCHIVE','Seksjonarkiv');
DEFINE('_HEADER_CATEGORY_ARCHIVE','Kategoriarkiv');
DEFINE('_ARCHIVE_SEARCH_FAILURE','Det er ingen arkiverte artikler for %s %s');	// values are month then year
DEFINE('_ARCHIVE_SEARCH_SUCCESS','Her er de arkiverte artiklene for %s %s');	// values are month then year
DEFINE('_FILTER','Filter');
DEFINE('_ORDER_DROPDOWN_DA','Dato stigende');
DEFINE('_ORDER_DROPDOWN_DD','Dato synkende');
DEFINE('_ORDER_DROPDOWN_TA','Tittel stigende');
DEFINE('_ORDER_DROPDOWN_TD','Tittel synkende');
DEFINE('_ORDER_DROPDOWN_HA','Treff stigende');
DEFINE('_ORDER_DROPDOWN_HD','Treff synkende');
DEFINE('_ORDER_DROPDOWN_AUA','Forfatter stigende');
DEFINE('_ORDER_DROPDOWN_AUD','Forfatter synkende');
DEFINE('_ORDER_DROPDOWN_O','Rekkefølge');

/** poll.php */
DEFINE('_ALERT_ENABLED','Informasjonskapsler (cookies) må være aktivert!');
DEFINE('_ALREADY_VOTE','Du har allerede stemt på denne spørreundersøkelsen i dag!');
DEFINE('_NO_SELECTION','Du har ikke valgt et alternativ, prøv igjen');
DEFINE('_THANKS','Takk for stemmen din!');
DEFINE('_SELECT_POLL','Velg spørreundersøkelse fra listen');

/** classes/html/poll.php */
DEFINE('_JAN','Januar');
DEFINE('_FEB','Februar');
DEFINE('_MAR','Mars');
DEFINE('_APR','April');
DEFINE('_MAY','Mai');
DEFINE('_JUN','Juni');
DEFINE('_JUL','Juli');
DEFINE('_AUG','August');
DEFINE('_SEP','September');
DEFINE('_OCT','Oktober');
DEFINE('_NOV','November');
DEFINE('_DEC','Desember');
DEFINE('_POLL_TITLE','Spørreundersøkelse - Resultater');
DEFINE('_SURVEY_TITLE','Tittel på spørreundersøkelse:');
DEFINE('_NUM_VOTERS','Antall stemmer');
DEFINE('_FIRST_VOTE','Første stemme');
DEFINE('_LAST_VOTE','Siste stemme');
DEFINE('_SEL_POLL','Velg spørreundersøkelse:');
DEFINE('_NO_RESULTS','Ingen resultater for denne spørreundersøkelsen.');

/** registration.php */
DEFINE('_ERROR_PASS','Beklager, ingen tilsvarende bruker ble funnet');
DEFINE('_NEWPASS_MSG','Brukerkontoen $checkusername er tilknyttet denne e-postadressen.\n'
.'En bruker fra $mosConfig_live_site har bedt om å få tilsendt et nytt passord.\n\n'
.' Ditt nye passord er: $newpass\n\nHvis du ikke ba om dette, så ikke bekymre deg.'
.' Du fikk denne e-posten, ikke noen andre. Hvis dette var en feil så kan du bare logge inn med ditt'
.' nye passord og så endre passordet til hva du vil det skal være.');
DEFINE('_NEWPASS_SUB','$_sitename :: Nytt passord for - $checkusername');
DEFINE('_NEWPASS_SENT','Nytt brukerpassord opprettet og sendt!');
DEFINE('_REGWARN_NAME','Navnet ditt.');
DEFINE('_REGWARN_UNAME','Brukernavn.');
DEFINE('_REGWARN_MAIL','Gyldig e-postadresse.');
DEFINE('_REGWARN_PASS','Oppgi et gyldig passord. Ingen mellomrom, mer enn 6 tegn og inneholder kun 0-9,a-z,A-Z');
DEFINE('_REGWARN_VPASS1','Gjenta passordet.');
DEFINE('_REGWARN_VPASS2','Passordet og gjentagelsen er ikke like, prøv igjen.');
DEFINE('_REGWARN_INUSE','Dette brukernavnet/passordet er allerede i bruk. Prøv et annet.');
DEFINE('_REGWARN_EMAIL_INUSE', 'Denne e-posten er allerede registrert. Hvis du har glemt passordet, klikk på "Glemt passordet?" og et nytt passord vil bli sendt til deg.');
DEFINE('_SEND_SUB','Kontodetaljer for %s ved %s');
DEFINE('_USEND_MSG_ACTIVATE', 'Hei %s,

Takk for at du registrerte deg ved %s. Din konto har blitt opprettet og må aktiveres før du kan bruke den.
For å aktivere kontoen må du klikke på den etterfølgende linken eller kopiere og lime den inn i din nettleser:
%s

Etter aktivering kan du logge deg inn på %s ved å bruke følgende brukernavn og passord:

Brukernavn - %s
Passord - %s');
DEFINE('_USEND_MSG', "Hei %s,

Takk for at du registrerte deg ved %s.

Du kan nå logge deg inn med brukernavnet og passordet du registrerte deg med.");
DEFINE('_USEND_MSG_NOPASS','Hei $name,\n\nDu har blitt lagt til som en bruker ved $mosConfig_live_site.\n'
.'Du kan logge inn på $mosConfig_live_site med brukernavnet og passordet du registrerte deg med.\n\n'
.'Ikke svar på denne e-posten da den er automatisk opprettet og er kun ment som en informasjon\n');
DEFINE('_ASEND_MSG','Hei %s,

En ny bruker har registrert seg ved %s.
Denne e-posten inneholder dennes detaljer:

Navn - %s
E-post - %s
Brukernavn - %s

Ikke svar på denne e-posten da den er automatisk opprettet og er kun ment som en informasjon');
DEFINE('_REG_COMPLETE_NOPASS','<div class="componentheading">Registrering fullført!</div><br />&nbsp;&nbsp;'
.'Du kan nå logge inn.<br />&nbsp;&nbsp;');
DEFINE('_REG_COMPLETE', '<div class="componentheading">Registrering fullført!</div><br />Du kan nå logge inn.');
DEFINE('_REG_COMPLETE_ACTIVATE', '<div class="componentheading">Registrering fullført!</div><br />Din konto har blitt opprettet og en aktiveringslink har blitt sent til den e-postadressen du oppga. Vær oppmerksom på at du må aktivere kontoen ved å klikke på aktiveringslinken når du mottar e-posten før du kan logge inn.');
DEFINE('_REG_ACTIVATE_COMPLETE', '<div class="componentheading">Aktivisering fullført!</div><br />Din konto har blitt aktivert. Du kan nå logge inn med brukernavnet og passordet du valgte under registreringen.');
DEFINE('_REG_ACTIVATE_NOT_FOUND', '<div class="componentheading">Ugyldig aktiveringslenke!</div><br />Det er ingen slik konto i vår database eller kontoen har allerede blitt aktivert.');
DEFINE('_REG_ACTIVATE_FAILURE', '<div class="componentheading">Aktivisering feilet!</div><br />Din konto kunne ikke aktiveres. Kontakt administratoren.');

/** classes/html/registration.php */
DEFINE('_PROMPT_PASSWORD','Glemt passordet?');
DEFINE('_NEW_PASS_DESC','Oppgi ditt brukernavn og e-postadresse og klikk på Send passord knappen.<br />'
.'Du vil snart motta ett nytt passord. Bruk dette passordet for å logge inn.');
DEFINE('_PROMPT_UNAME','Brukernavn:');
DEFINE('_PROMPT_EMAIL','E-postadresse:');
DEFINE('_BUTTON_SEND_PASS','Send passord');
DEFINE('_REGISTER_TITLE','Registrering');
DEFINE('_REGISTER_NAME','Navn:');
DEFINE('_REGISTER_UNAME','Brukernavn:');
DEFINE('_REGISTER_EMAIL','E-post:');
DEFINE('_REGISTER_PASS','Passord:');
DEFINE('_REGISTER_VPASS','Gjenta passord:');
DEFINE('_REGISTER_REQUIRED','Felter merket med en stjerne (*) er påkrevd.');
DEFINE('_BUTTON_SEND_REG','Send registrering');
DEFINE('_SENDING_PASSWORD','Ditt passord vil bli sendt til overstående e-postadresse.<br />Når du har mottatt ditt'
.' nye passord kan du logge inn og endre det.');

/** classes/html/search.php */
DEFINE('_SEARCH_TITLE','Søk');
DEFINE('_PROMPT_KEYWORD','Søkeord');
DEFINE('_SEARCH_MATCHES','returnerte %d treff');
DEFINE('_CONCLUSION','Totalt $totalRows resultater funnet.  Søk etter [ <b>$searchword</b> ] med');
DEFINE('_NOKEYWORD','Ingen resultater ble funnet');
DEFINE('_IGNOREKEYWORD','Ett eller flere vanlige ord ble ignorert i søket');
DEFINE('_SEARCH_ANYWORDS','Med noen av ordene');
DEFINE('_SEARCH_ALLWORDS','Med alle ordene');
DEFINE('_SEARCH_PHRASE','Med den nøyaktige frasen');
DEFINE('_SEARCH_NEWEST','Nyeste først');
DEFINE('_SEARCH_OLDEST','Eldste først');
DEFINE('_SEARCH_POPULAR','Mest populær');
DEFINE('_SEARCH_ALPHABETICAL','Alfabetisk');
DEFINE('_SEARCH_CATEGORY','Seksjon/Kategori');
DEFINE('_SEARCH_MESSAGE','Søkestrengen må være mellom 3 bokstaver 20 bokstaver');
DEFINE('_SEARCH_ARCHIVED','Arkivert');
DEFINE('_SEARCH_CATBLOG','Kategoriblogg');
DEFINE('_SEARCH_CATLIST','Kategoriliste');
DEFINE('_SEARCH_NEWSFEEDS','Nyhetsmating');
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
DEFINE('_SEARCH_BOX','søk...');
DEFINE('_NEWSFLASH_BOX','Siste nytt!');
DEFINE('_MAINMENU_BOX','Hovedmeny');

/** classes/html/usermenu.php */
DEFINE('_UMENU_TITLE','Brukermeny');
DEFINE('_HI','Hei, ');

/** user.php */
DEFINE('_SAVE_ERR','Fyll ut alle feltene.');
DEFINE('_THANK_SUB','Takk for ditt bidrag. Det vil bli godkjent før det vil bli publisert.');
DEFINE('_THANK_SUB_PUB','Takk for ditt bidrag.');
DEFINE('_UP_SIZE','Du kan ikke laste opp filer større enn 15kb.');
DEFINE('_UP_EXISTS','Et bilde med navnet $userfile_name eksisterer allerede. Endre navnet på fila og prøv igjen.');
DEFINE('_UP_COPY_FAIL','Kopiering feilet');
DEFINE('_UP_TYPE_WARN','Du kan bare laste opp gif eller jpg bilder.');
DEFINE('_MAIL_SUB','Ny bruker sendte');
DEFINE('_MAIL_MSG','Hei $adminName,\n\nEn ny bruker $type, $title, har blitt sendt av $author'
.' for the $mosConfig_live_site nettstedet.\n'
.'Gå til $mosConfig_live_site/administrator for å se og godkjenne $type.\n\n'
.'Ikke svar på denne e-posten da den er automatisk opprettet og er kun ment som en informasjon\n');
DEFINE('_PASS_VERR1','Hvis du endrer passordet så gjenta passordet for å bekrefte det.');
DEFINE('_PASS_VERR2','Hvis du endrer passordet så vær sikker på at passordet og bekreftelsen er like.');
DEFINE('_UNAME_INUSE','Dette brukernavnet er allerede i bruk.');
DEFINE('_UPDATE','Oppdater');
DEFINE('_USER_DETAILS_SAVE','Dine innstillinger har blitt lagret.');
DEFINE('_USER_LOGIN','Brukerinnlogging');

/** components/com_user */
DEFINE('_EDIT_TITLE','Rediger dine detaljer');
DEFINE('_YOUR_NAME','Ditt navn:');
DEFINE('_EMAIL','E-post:');
DEFINE('_UNAME','Brukernavn:');
DEFINE('_PASS','Passord:');
DEFINE('_VPASS','Gjenta passord:');
DEFINE('_SUBMIT_SUCCESS','Innsendt!');
DEFINE('_SUBMIT_SUCCESS_DESC','Ditt bidrag har blitt innsendt til redaksjonen. Det vil bli godkjent før det blir publisert.');
DEFINE('_WELCOME','Velkommen!');
DEFINE('_WELCOME_DESC','Velkommen til brukerseksjonen');
DEFINE('_CONF_CHECKED_IN','Alle dine utsjekkede bidrag har blitt sjekket inn');
DEFINE('_CHECK_TABLE','Kontrollerer tabell');
DEFINE('_CHECKED_IN','Innsjekket ');
DEFINE('_CHECKED_IN_ITEMS',' bidrag');
DEFINE('_PASS_MATCH','Passordene er ikke like');

/** components/com_banners */
DEFINE('_BNR_CLIENT_NAME','Du må velge et navn for klienten.');
DEFINE('_BNR_CONTACT','Du må velge en kontakt for klienten.');
DEFINE('_BNR_VALID_EMAIL','Du må velge en gyldig e-postadresse for klienten.');
DEFINE('_BNR_CLIENT','Du må velge en klient,');
DEFINE('_BNR_NAME','Du må velge et navn for banneret.');
DEFINE('_BNR_IMAGE','Du må velge et bilde for banneret.');
DEFINE('_BNR_URL','Du må velge en URL/egen kode for banneret.');

/** components/com_login */
DEFINE('_ALREADY_LOGIN','Du er allerede innlogget!');
DEFINE('_LOGOUT','Klikk her for å logge ut');
DEFINE('_LOGIN_TEXT','Bruk brukernavn og passordfeltene ved siden av for å få full adgang');
DEFINE('_LOGIN_SUCCESS','Du har blitt logget inn');
DEFINE('_LOGOUT_SUCCESS','Du har blitt logget ut');
DEFINE('_LOGIN_DESCRIPTION','For å få adgang til den private delen av dette nettstedet må du logge inn');
DEFINE('_LOGOUT_DESCRIPTION','Du er logget inn i den private delen av dette nettstedet');


/** components/com_weblinks */
DEFINE('_WEBLINKS_TITLE','Nettlinker');
DEFINE('_WEBLINKS_DESC','Vi er ofte ute på nettet. Når vi finner et godt nettsted vil vi liste det'
.' her for at du kan ha glede av det. <br />Velg et av emnene under, deretter velg en adresse du vil besøke.');
DEFINE('_HEADER_TITLE_WEBLINKS','Nettlink');
DEFINE('_SECTION','Seksjon:');
DEFINE('_SUBMIT_LINK','Send inn en link');
DEFINE('_URL','URL:');
DEFINE('_URL_DESC','Beskrivelse:');
DEFINE('_NAME','Navn:');
DEFINE('_WEBLINK_EXIST','Det finnes en link allerede med det navnet, endre og forsøk igjen.');
DEFINE('_WEBLINK_TITLE','Din link må ha en tittel.');

/** components/com_newfeeds */
DEFINE('_FEED_NAME','Syndikasjonsnavn');
DEFINE('_FEED_ARTICLES','# artikler');
DEFINE('_FEED_LINK','Syndikasjonslink');

/** whos_online.php */
DEFINE('_WE_HAVE', 'Vi har ');
DEFINE('_AND', ' og ');
DEFINE('_GUEST_COUNT','%s gjest');
DEFINE('_GUESTS_COUNT','%s gjester');
DEFINE('_MEMBER_COUNT','%s bruker');
DEFINE('_MEMBERS_COUNT','%s brukere');
DEFINE('_ONLINE',' her nå');
DEFINE('_NONE','Ingen brukere her nå');

/** modules/mod_banners */
DEFINE('_BANNER_ALT','Annonse');

/** modules/mod_random_image */
DEFINE('_NO_IMAGES','Ingen bilder');

/** modules/mod_stats.php */
DEFINE('_TIME_STAT','Tid');
DEFINE('_MEMBERS_STAT','Brukere');
DEFINE('_HITS_STAT','Treff');
DEFINE('_NEWS_STAT','Nyheter');
DEFINE('_LINKS_STAT','Nettlinker');
DEFINE('_VISITORS','Besøkende');

/** /adminstrator/components/com_menus/admin.menus.html.php */
DEFINE('_MAINMENU_HOME','* Den første publiserte siden i denne menyen [hovedmeny] er standard forside for nettstedet *');
DEFINE('_MAINMENU_DEL','* Du kan ikke `slette` denne menyen siden den tilhører Joomla systemfiler *');
DEFINE('_MENU_GROUP','* Noen `menytyper` er synlig i flere enn en gruppe *');


/** administrators/components/com_users */
DEFINE('_NEW_USER_MESSAGE_SUBJECT', 'Detaljer for ny bruker' );
DEFINE('_NEW_USER_MESSAGE', 'Hei %s,


Du har blitt lagt til som en bruker ved %s av en administrator.

Denne e-posten inneholder ditt brukernavn og passord som du må bruke for å logge inn til %s

Brukernavn - %s
Passord - %s


Ikke svar på denne e-posten da den er automatisk opprettet og er kun ment som informasjon');

/** administrators/components/com_massmail */
DEFINE('_MASSMAIL_MESSAGE', 'Dette er en e-post fra %s

Beskjed:
' );

/** includes/pdf.php */
DEFINE('_PDF_GENERATED','Produsert:');
DEFINE('_PDF_POWERED','Drevet av Joomla!');
?>
