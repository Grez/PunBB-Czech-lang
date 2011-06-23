<?php

// Language definitions used in all admin files
$lang_admin_reindex = array(

'Reindex heading'			=>	'Znovu vytvoření vyhledávacího indexu pro obnovení vyhledávacího výkonu',
'Rebuild index legend'		=>	'Rebuild vyhledávacího indexu',
'Reindex info'				=>	'Pokud jste upravovali databázi manuálně místo administračního rozhraní, mohla být narušena kompatibilita. Pokud je databáze rozsáhlá, může Rebuild indexu výrazně zvýšit rychlost. Pro bezpečnější provedení operace by mělo být fórum ve stavu údržby zatržením "Zapnout režim údržby fóra." na stránce Režim údržby. Pokud by se operace nezdařila, mohlo by dojít k&nbsp;nenávratnému porušení struktury databáze fóra. Po dokončení procesu vás cyklus přesměruje zpět na tuto stránku (pokud máte zapnutý JavaScript). Před touto operací vám doporučujeme JavaScript zapnout.',
'Reindex warning'			=>	'<strong>DŮLEŽITÉ!</strong> Přebudování (Rebuild) vyhledávacího indexu může trvat i&nbsp;několik minut a server bude během procesu více zatížen. Pro ochranu, pokud by něco v&nbsp;procesu selhalo, vám doporučujeme zapamatovat si "ID úvodního tématu" a při opakování procesu do "ID úvodního tématu" zadat ID+1.',
'Empty index warning'		=>	'<strong>UPOZORNĚNÍ!</strong> V&nbsp;tomto případě nesmí být zatržen "Prázdný index".',
'Posts per cycle'			=>	'Příspěvků na cyklus',
'Posts per cycle info'		=>	'Počet příspěvků zobrazených a zpracovaných na jedné stránce. Pokud například zadáte 100, zpracuje se 100 příspěvků (je-li jich tolik), stránka bude obnovena a znovu dojde ke zpracování dalších 100 příspěvků. Tato funkce zabezpečuje možné přerušení procesu, jak ze strany uživatele, tak ze strany serveru a minimalizuje počet případných chyb při přerušení a opětovném vytvoření.',
'Starting post'				=>	'ID úvodního tématu',
'Starting post info'		=>	'ID příspěvku, od kterého začne Rebuild indexu. Výchozí nastavení načítá nejnižší hodnotu ID tématu v&nbsp;databázi. Jedná-li se o&nbsp;standardní postup, doporučujeme neměnit.',
'Empty index'				=>	'Prázdný index',
'Empty index info'			=>	'Prázdný vyhledávací index před rebuildem indexu (viz níže).',
'Rebuilding index title'	=>	'Rebuilding vyhledávacího index…',
'Rebuilding index'			=>	'Rebuil indexu… Právě probíhá operace znovu vytvoření vyhledávacího indexu, tato operace může trvat i&nbsp;několik minut.',
'Processing post'			=>	'Zpracování příspěvku <strong>%s</strong> v&nbsp;tématu <strong>%s</strong>.',
'Javascript redirect'		=>	'Přesměrování pomocí JavaScriptu se nezdařilo.',
'Click to continue'			=>	'Pro pokračování klepněte zde.',
'Rebuild index'				=>	'Rebuild indexu',

);
