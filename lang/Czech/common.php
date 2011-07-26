<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'			=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'			=>	'cs',

// Number formatting
'lang_decimal_point'	=>	'.',
'lang_thousands_sep'	=>	',',

// Notices
'Bad request'				=>	'Chybný požadavek. Požadovaný objekt není správný nebo je starý.',
'No view'					=>	'Nemáte oprávnění prohlížet toto fórum.',
'No permission'				=>	'Nemáte oprávnění přístupu na tuto stránku.',
'CSRF token mismatch'		=>	'Nelze potvrdit bezpečnostní kód. Pravděpodobně uplynula dlouhá doba mezi otevřením stránky a odesláním formuláře. Opakujte akci.',
'No cookie'					=>	'Pravděpodobně jste byl přihlášen, ovšem nemáte povoleny cookies. Změňte proto nastavení vašeho prohlížeče tak, že cookies pro tento web povolíte.',


// Miscellaneous
'Forum index'				=>	'Index fóra',
'Submit'					=>	'Odeslat',
'Cancel'					=>	'Storno',
'Preview'					=>	'Náhled',
'Delete'					=>	'Odstranit',
'Split'						=>	'Část',
'Ban message'				=>	'Pro toto fórum vám byl udělen ban.',
'Ban message 2'				=>	'Ban vyprší %s.',
'Ban message 3'				=>	'Administrátor nebo moderátor, který vás zabanoval, vám zanechal tento vzkaz:',
'Ban message 4'				=>	'Jakékoliv otázky směřujte administrátorům na e-mail %s',
'Never'						=>	'Nikdy',
'Today'						=>	'dnes',
'Yesterday'					=>	'včera',
'Forum message'				=>	'Zpráva pro vás',
'Maintenance warning'		=>	'<strong>UPOZORNĚNÍ! %s zapnuta.</strong> Během probíhající údržby se NEODHLAŠUJTE, jinak se znovu nebudete moci přihlásit.',
'Maintenance mode'			=>	'Údržba',
'Redirecting'				=>	' Přesměrování…',
'Forwarding info'			=>	'Na novou stránku budete přesměrován za: %s %s',
'second'					=>	'sekundu',
'seconds'					=>	'sekund',
'Click redirect'			=>	'Pokud vás prohlížeč automaticky nepřesměroval, klepněte na tento odkaz.',
'Invalid e-mail'			=>	'Zadaná e-mailová adresa je neplatná.',
'New posts'					=>	'Nové příspěvky',
'New posts title'			=>	'Seznam témat, ve kterých přibyl příspěvek od vaší poslední návštěvy',
'Active topics'				=>	'Aktivní témata',
'Active topics title'		=>	'Seznam témat, které obsahují nové příspěvky.',
'Unanswered topics'			=>	'Témata bez odpovědi',
'Unanswered topics title'	=>	'Seznam témat, ve kterých zatím nikdo nereagoval.',
'Username'					=>	'Uživatelské jméno',
'Registered'				=>	'Registrace',
'Write message'				=>	'Text příspěvku:',
'Forum'						=>	'Fórum',
'Posts'						=>	'Příspěvky',
'Pages'						=>	'Stránky',
'Page'						=>	'Stránka',
'BBCode'					=>	'BBCode',
'Smilies'					=>	'Smajlíky',
'Images'					=>	'Obrázky',
'You may use'				=>	'Můžete použít: %s',
'and'						=>	'a',
'Image link'				=>	'obrázek',
'wrote'						=>	'napsal',
'Code'						=>	'Kód',
'Forum mailer'				=>	'%s Mailer',
'Write message legend'		=>	'Napsat zprávu a odeslat',
'Required information'		=>	'Požadované informace',
'Required'					=>	'(Povinné)',
'Required warn'				=>	'Zvýrazněná pole musí být před odesláním formuláře vyplněna.',
'Crumb separator'			=>	' &rarr;&#160;',
'Title separator'			=>	' — ',
'Page separator'			=>	'&#160;',
'Spacer'					=>	'…',
'Paging separator'			=>	' ',
'Previous'					=>	'Předchozí',
'Next'						=>	'Další',
'Cancel redirect'			=>	'Operace byla stornována. Přesměrovávám…',
'No confirm redirect'		=>	'Požadované potvrzení nebylo provedeno. Operace zrušena. Přesměrovávám…',
'Please confirm'			=>	'Prosím potvrďte:',
'Help page'					=>	'Nápověda pro: %s',
'Re'						=>	'Re:',
'Page info'					=>	'(Stránka %1$s z %2$s)',
'Item info single'			=>	'%s: %s',
'Item info plural'			=>	'%s: %s - %s z %s', 
'Info separator'			=>	' ',
'Powered by'				=>	'Postaveno na %s', //PunBB.er.cz je víceméně mrtvý, radši ať jdou přímo na EN...
'Maintenance'				=>	'Údržba',

// CSRF confirmation form
'Confirm'					=>	'Potvrdit',
'Confirm action'			=>	'Potvrdit akci',
'Confirm action head'		=>	'Potvrďte nebo zrušte prosím poslední akci',

// Title
'Title'						=>	'Hodnost',
'Member'					=>	'Uživatel',
'Moderator'					=>	'Moderátor',
'Administrator'				=>	'Administrátor',
'Banned'					=>	'Zablokovaný',
'Guest'						=>	'Host',

// Stuff for include/parser.php
'BBCode error 1'			=>	'[/%1$s] byl nalezen bez [%1$s]',
'BBCode error 2'			=>	'[/%1$s] nalezen po [%2$s], ujistěte se [%2$s] o&nbsp;uzavření',
'BBCode error 3'			=>	'[%1$s] byl otevřen během [%2$s], to není povoleno',
'BBCode error 4'			=>	'[%1$s] byl otevřen uvnitř sebe, to není povoleno',
'BBCode error 5'			=>	'[%1$s] byl nalezen bez [/%1$s]',
'BBCode error 6'			=>	'[%s] značka měla prázdnou část s atributy',
'BBCode nested list'		=>	'[list] značky nemohly být vloženy',
'BBCode code problem'		=>	'Vyskytl se problém se značkami [code]',

// Stuff for the navigator (top of every page)
'Index'						=>	'Obsah',
'User list'					=>	'Uživatelé',
'Rules'						=>	'Pravidla',
'Search'					=>	'Hledat',
'Register'					=>	'Registrace',
'register'					=>	'registrace',
'Login'						=>	'Přihlásit',
'login'						=>	'přihlásit',
'Not logged in'				=>	'Nejste přihlášen.',
'Profile'					=>	'Profil',
'Logout'					=>	'Odhlásit',
'Logged in as'				=>	'Přihlášen jste jako: %s&nbsp;',
'Admin'						=>	'Administrace',
'Last visit'				=>	'Poslední návštěva: %s',
'Mark all as read'			=>	'Označit všechna témata za přečtená',
'Login nag'					=>	'Přihlaste se, nebo se zaregistrujte.',
'New reports'				=>	'Nová hlášení',

// Alerts
'New alerts'				=>	'Nová upozornění',
'Maintenance alert'			=>	'<strong>VAROVÁNÍ!</strong> Fórum je ve stavu údržby. <em>NEODHLAŠUJTE SE</em>, jinak se nebudete moci znovu přihlásit.',
'Updates'					=>	'Aktualizace PunBB',
'Updates failed'			=>	'Poslední pokus o&nbsp;zjištění aktualizací pro PunBB selhal. Služba je v&nbsp;tuto chvíli nedostupná nebo je přetížená. Pokud tento problém přetrvává navštivte stánky <a href="http://punbb.er.cz/">české</a> nebo <a href="http://punbb.informer.com/">mezinárodní</a> podpory a aktualizaci na novou verzi zajistěte sami.',
'Updates version n hf'		=>	'Nová verze PunBB, verze %s, je k&nbsp;dispozici ke stažení na <a href="http://punbb.er.cz/">PunBB.er.cz</a> nebo <a href="http://punbb.informer.com/">PunBB.informer.com</a>. Mimoto je dostupné také jeden či více nových verzí některého doplňku.',
'Updates version'			=>	'Nová verze PunBB, verze %s, je k&nbsp;dispozici ke stažení na <a href="http://punbb.er.cz/">PunBB.er.cz</a> nebo <a href="http://punbb.informer.com/">PunBB.informer.com</a>.',
'Updates hf'				=>	'Jeden či více doplňků (modifikací) je k&nbsp;dispozici v&nbsp;nové verzi.',
'Database mismatch'			=>	'Změna verze databáze',
'Database mismatch alert'	=>	'Vaše PunBB databáze je určena pro spolupráci s&nbsp;novější verzí PunBB. Pokud zachováte současnou verzi, nemusí fórum pracovat správně. Doporučujeme provést aktualizaci na novější verzi PunBB fóra.',

// Stuff for Jump Menu
'Go'						=>	'Přejít',
'Jump to'					=>	'Přechod na fórum:',

// For extern.php RSS feed
'RSS description'			=>	'Nejnovější témata v %s.',
'RSS description topic'		=>	'Nejnovější příspěvky v %s.',
'RSS reply'					=>	'Re: ',

// Accessibility
'Skip to content'				=>	'Jít do obsahu fóra',

// Debug information
'Querytime'						=>	'Vygenerováno za %1$s s, vykonaných příkazů: %2$s.',
'Debug table'					=>	'Ladící informace',
'Debug summary'					=>	'Informace o&nbsp;vykonání databázového dotazu',
'Query times'					=>	'Čas (s)',
'Query'							=>	'Dotaz',
'Total query time'				=>	'Celkový čas dotazu',

// For official extensions
'Official extensions inst'	=>	'<span id="extensions-used" title="%1$s">Oficiální doplněk: %2$s je instalován.</span>',

);
