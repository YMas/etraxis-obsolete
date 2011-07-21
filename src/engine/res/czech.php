<?php

//------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system
//  Copyright (C) 2010  Artem Rodygin
//
//  This program is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//------------------------------------------------------------------------------

/**
 * Localization
 *
 * This module contains prompts translated in Czech.
 *
 * @package Engine
 * @subpackage Localization
 * @author Vit Popelka
 */

$resource_czech = array
(
    RES_SECTION_ALERTS =>
    /* 200 */
    'Všechna pole označená jako povinná musí být vyplněna.',
    'Výchozí hodnota musí být v rozmezí %1 až %2.',
    'Účet je zablokován.',
    'Účet je uzamčen.',
    'Neplatné uživatelské jméno.',
    'Účet se zadaným uživatelským jménem již existuje.',
    'Neplatný e-mail.',
    'Hesla se neshodují.',
    'Heslo musí být dlouhé alespoň %1 znaků.',
    'Projekt se zadaným názvem již existuje.',
    /* 210 */
    'Skupina se zadaným jménem již existuje.',
    'Šablona se zadaným jménem nebo předponou již existuje.',
    'Stav se zadaným jménem nebo zkratkou již existuje.',
    'Pole se zadaným jménem již existuje.',
    'Neplatné číslo.',
    'Číslo musí být v rozmezí %1 až %2.',
    'Hodnota "%1" musí být v rozmezí %2 až %3.',
    'Maximální hodnota musí být větší než minimální.',
    'Velikost souboru je větší než velikost povolená parametrem "upload_max_filesize" v souboru "php.ini".',
    'Velikost souboru nesmí být větší než %1 kB.',
    /* 220 */
    'Soubor byl nahrán jen částečně.',
    'Žádný soubor nebyl nahrán.',
    'Chybí dočasná složka.',
    'Příloha se zadaným jménem již existuje.',
    'Záznam nenalezen.',
    'Filtr se zadaným jménem již existuje.',
    'Neplatné datum.',
    'Datum musí být v rozmezí %1 až %2.',
    'Neplatný čas.',
    'Čas musí být v rozmezí %1 až %2.',
    /* 230 */
    'Upozorňování se zadaným jménem již existuje.',
    'Upomínka se zadaným jménem již existuje.',
    'Připomenutí úspěšně odesláno.',
    'Pohled se zadaným jménem již existuje.',
    NULL,
    'Nepodařilo se zapsat soubor na disk.',
    'Nahrání souboru zastaveno rozšířením.',
    'Musí být povolena podpora JavaScriptu.',
    'To je automaticky generovaná zpráva, prosím, neodpovídejte na ni.',
    NULL,
    /* 240 */
    NULL,
    'Pohled nemůže mít více než %1 sloupců.',
    'Hodnota "%1" neodpovídá definovanému formátu.',
    'Uživatel není přihlášen.',
    'Neznámé uživatelské jméno nebo chybné heslo.',
    'Neznámá chyba.',
    'Chyba XML parseru.',

    RES_SECTION_CONFIRMS =>
    /* 300 */
    'Jste si jisti, že chcete odstranit všechny vybrané pohledy?',
    'Jste si jisti, že chcete smazat tento účet?',
    'Jste si jisti, že chcete smazat tento projekt?',
    'Jste si jisti, že chcete vymazat tuto skupinu?',
    'Jste si jisti, že chcete smazat tuto šablonu?',
    'Jste si jisti, že chcete smazat tento stav?',
    'Jste si jisti, že chcete smazat toto pole?',
    NULL,
    'Jste si jisti, že chcete obnovit tento záznam?',
    'Jste si jisti, že chcete přiřadit tento záznam?',
    /* 310 */
    'Jste si jisti, že chcete odstranit všechny vybrané filtry?',
    'Jste si jisti, že chcete smazat všechny vybrané upozorňování?',
    'Jste si jisti, že chcete poslat připomínku?',
    'Jste si jisti, že chcete smazat tuto připomínku?',
    'Jste si jisti, že se chcete odhlásit?',
    'Jste si jisti, že chcete smazat tento záznam?',

    RES_SECTION_PROMPTS =>
    /* 1000 */
    'Čeština',
    'Přihlásit se',
    'OK',
    'Zrušit',
    'Uložit',
    'Zpět',
    'Další',
    'Vytvořit',
    'Změnit',
    'Smazat',
    /* 1010 */
    'Záznamy',
    'Účty',
    'Projekty',
    'Změnit heslo',
    'Pole stavu "%1"',
    'žádný/é',
    'Celkem:',
    'Vzhled',
    'Informace o účtu',
    'Uživatelské jméno',
    /* 1020 */
    'Celé jméno',
    'E-mail',
    'Výchozí',
    'administrátor',
    'uživatel',
    'Popis',
    'Heslo',
    'Potvrzení',
    'zakázán',
    'uzamčen',
    /* 1030 */
    'Nový účet',
    'Účet "%1"',
    'Informace o projektu',
    'Název projektu',
    'Datum a čas zahájení',
    'pozastaven',
    'Nový projekt',
    'Projekt "%1"',
    'Skupiny',
    'Informace o skupině',
    /* 1040 */
    'Název skupiny',
    'Nová skupina',
    'Skupina "%1"',
    'Členství',
    'Ostatní',
    'Členové',
    'Šablony',
    'Informace o šabloně',
    'Název šablony',
    'Prefix',
    /* 1050 */
    'Nová šablona',
    'Šablona "%1"',
    'Stavy',
    'Informace o stavu',
    'Název stavu',
    'Zkratka',
    'Typ stavu',
    'počáteční',
    'standardní',
    'koncový',
    /* 1060 */
    'Odpovědnost',
    'zachovat',
    'přiřadit',
    'odstranit',
    'Nový stav',
    'Stav "%1"',
    'Vytvořit standardní',
    'Vytvořit koncový',
    'Přechody',
    'Oprávnění',
    /* 1070 */
    'Vytvořit počáteční',
    'Povoleno',
    'Pole',
    'Informace o poli',
    'Pořadí',
    'Název pole',
    'Typ pole',
    'číslo',
    'text',
    'víceřádkový text',
    /* 1080 */
    'Povinný',
    'ano',
    'ne',
    'Min. hodnota',
    'Max. hodnota',
    'Max. délka',
    'povinný',
    'Nové pole (krok %1/%2)',
    'Pole "%1"',
    'pouze pro čtení',
    /* 1090 */
    'čtení i zápis',
    'Všeobecné informace',
    'ID',
    'Projekt',
    'Šablona',
    'Stav',
    'Stáří',
    'Nový záznam',
    'Záznam "%1"',
    'Moje záznamy',
    /* 1100 */
    'Historie',
    'Odložit',
    'Pokračovat',
    'Přiřadit',
    'Změnit stav',
    'Datum vzniku',
    'Původce',
    'Záznam je vytvořen ve stavu "%1".',
    'Záznam je přiřazen uživateli %1.',
    'Záznam je upraven.',
    /* 1110 */
    'Stav je změněn na "%1".',
    'Záznam je odložen do %1.',
    'Záznam je obnoven.',
    'Soubor "%1" je přiložen.',
    'Soubor "%1" je odstraněn.',
    'oprávnění vytvořit nový záznam',
    'oprávnění modifikovat záznam',
    'oprávnění odložit záznam',
    'oprávnění obnovit záznam',
    'oprávnění přidělit již přidělený záznam',
    /* 1120 */
    'oprávnění změnit stav přiděleného záznamu',
    'oprávnění připojit soubor',
    'oprávnění odstranit soubor',
    'Jazyk',
    'Přidat komentář',
    'Komentář je přidán.',
    'oprávnění přidat komentář',
    'Komentář',
    'Připojit soubor',
    'Odstranit soubor',
    /* 1130 */
    'Příloha',
    'Název přílohy',
    'Soubor',
    'Přílohy',
    'Žádná pole.',
    'Kritické stáří',
    'Čas zmrazení',
    'Změny',
    'Stará hodnota',
    'Nová hodnota',
    /* 1140 */
    'zaškrtávací pole',
    'záznam',
    'seznam',
    'Položky seznamu',
    '%1 Kb',
    'Filtry',
    'Název filtru',
    'Všechny projekty',
    'Všechny šablony',
    'Všechny stavy',
    /* 1150 */
    'Zobrazit záznam',
    'Zobrazit pouze vytvořené ...',
    'Zobrazit pouze přidělené ...',
    'zobrazit pouze neuzavřené',
    'Předmět',
    'Hledat',
    'Parametry vyhledávání',
    'Výsledky vyhledávání (filtrované)',
    'Hledaný text',
    'hledání v polích',
    /* 1160 */
    'hledání v komentářích',
    'Status',
    'aktivní',
    'Upozorňovat',
    'oznámení při vytvoření záznamu',
    'oznámení při přiřazení záznamu',
    'oznámení při modifikaci záznamu',
    'oznámení při změně stavu',
    'oznámení při odložení záznamu',
    'oznámení při obnovení záznamu',
    /* 1170 */
    'oznámení při přidání komentáře',
    'oznámení při připojení přílohy',
    'oznámení při odstranění přílohy',
    'povinný',
    'Odloženo',
    'Do dne',
    'Výchozí hodnota',
    'zapnuto',
    'vypnuto',
    'Metriky',
    /* 1180 */
    'Otevřené záznamy',
    'Vytvořené v. Uzavřené',
    'týden',
    'číslo',
    'Kopírovat',
    'Záznam je kopií "%1".',
    'Odhlásit',
    'oznámení při kopírování záznamu',
    'Nastavení',
    'Řádků na stránku',
    /* 1190 */
    'Záložek na stránku',
    'Uzamknout',
    'Odemknout',
    'Typ skupiny',
    'globální',
    'místní',
    'Konfigurace',
    NULL,
    'URL',
    'Zabezpečení',
    /* 1200 */
    'Minimální délka hesla',
    'Maximální počet pokusů o přihlášení',
    'Doba uzamčení (min)',
    'Databáze',
    'Typ databáze',
    'Oracle',
    'Mysql',
    'Microsoft SQL Server',
    'Databázový server',
    'Název databáze',
    /* 1210 */
    'Uživatel',
    'Active Directory',
    'LDAP server',
    'Číslo portu',
    'Účet pro vyhledávání',
    'Základní DN',
    'Administrátoři',
    'Upozornění e-mailem',
    'Maximální velikost',
    'Ladění',
    /* 1220 */
    'Režim ladění',
    'povoleno (bez soukromých data)',
    'povoleno (všechna data)',
    'Ladící soubory',
    'Povoleno',
    'Zakázáno',
    NULL,
    'oprávnění zobrazit záznamy',
    'Vybrat vše',
    'Autor',
    /* 1230 */
    'datum',
    'doba trvání',
    'Zobrazit pouze odložené',
    'Název upozorňování',
    'Události',
    'Verze %1',
    'role',
    'Upozorňovat',
    'Odhlásit se',
    'Upomínky',
    /* 1240 */
    'Název upomínky',
    'Předmět upomínky',
    'Seznam příjemců',
    'Nová připomínka',
    'Připomínka "%1"',
    'oprávnění zasílat připomínky',
    'Odeslat',
    'Nový filtr',
    'Filtr "%1"',
    'Nové upozorňování',
    /* 1250 */
    'Upozorňování "%1"',
    NULL,
    'Odkaz na jiný záznam lze vložit zadáním "rec#" a jeho číslo (např. "rec#305").',
    'Zobrazit pouze přesunuté do stavu ...',
    'Sdílet s ...',
    'Exportovat',
    'Upozorňovat ostatní ...',
    'Přihlášen',
    '%1 byl přihlášen k záznamu.',
    '%1 byl odhlášen.',
    /* 1260 */
    'Kopie',
    'Úložiště',
    'LDAP atribut',
    'Pohledy',
    NULL,
    'Název pohledu',
    'Nový pohled',
    'Pohled "%1"',
    'Výchozí pohled',
    'Nastavit',
    /* 1270 */
    'Sloupce',
    NULL,
    NULL,
    NULL,
    NULL,
    'Zarovnání',
    'doleva',
    'na střed',
    'doprava',
    'Služba bude nedostupná od %1 až %2 (%3)',
    /* 1280 */
    'Všechny přidělené mně',
    'Všechny vytvořené mnou',
    NULL,
    NULL,
    'Výpis',
    'Podřízené záznamy',
    'Vytvořit podřízený záznam',
    'Připojit podřízený záznam',
    'Odstranit podřízený záznam',
    'Čislo podřízeného záznamu',
    /* 1290 */
    'Podřízený záznam "%1" byl přidán.',
    'Podřízený záznam "%1" byl odstraněn.',
    'oprávnění přidat podřízený záznam',
    'oprávnění odstranit podřízený záznam',
    'oznámení při vytvožení podřízeného záznamu',
    'oznámení při zrušení podřízeného záznamu',
    'vytvořené záznamy',
    'uzavřené záznamy',
    'Důvěrné',
    'Přidat důvěrný komentář',
    /* 1300 */
    'oprávnění přidat / číst důvěrný komentář',
    'Důvěrný komentář byl přidán.',
    'Nadřízený záznam',
    'závislosti',
    NULL,
    'Přidat oddělovač',
    'Oddělovač CSV',
    'Kódování CSV',
    'Konce řádků CSV',
    NULL,
    /* 1310 */
    'Povolit filtry',
    'Zakázat filtry',
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    'Rozbalit vše',
    /* 1320 */
    'Sbalit vše',
    NULL,
    'L/E',
    'PCRE pro kontrolu hodnot',
    'Vyhledávací PCRE pro transformaci hodnoty',
    'Nahrazovací PCRE pro transformaci hodnoty',
    'Výchozí následující stav',
    'Stav odložení',
    'zobrazit vše',
    'zobrazit pouze aktivní',
    /* 1330 */
    'Událost',
    NULL,
    'Anonymní přístup',
    'Žádné.',
    'Globální skupiny',
    'Návštěvník',
    'Importovat',
    'oprávnění smazat záznam',
    NULL,
    'Výchozí jazyk',
    /* 1340 */
    'Platnost hesla (ve dnech)',
    'Platnost sezení (min)',
    'Výčet LDAP',
    'PostgreSQL',
    'seznam indexů',
    'seznam hodnot',
    'Vytvořený',
    'Označit jako přečtené',
    'Registrovaný',
    'TLS',
    /* 1350 */
    'Komprese',
    'L/S',
    'Komentáře',
    'Velikost',
    'Vzhled',
    'CSV',
    'Povolit',
    'Zakázat',
    'Náhled',
    'Vlastník',
    /* 1360 */
    'Kdokoliv.',
    'Označit jako nepřečtené',
    'Nadřízené záznamy',
);

?>
