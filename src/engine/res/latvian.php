<?php

/**
 * Localization
 *
 * This module contains prompts translated in Latvian.
 * All the prompts are in ISO-8859-13 encoding.
 *
 * @package Engine
 * @subpackage Localization
 * @author Janis Kruminsch
 */

//--------------------------------------------------------------------------------------------------
//
//  eTraxis - Records tracking web-based system.
//  Copyright (C) 2006-2009 by Artem Rodygin
//
//  This program is free software; you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation; either version 2 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License along
//  with this program; if not, write to the Free Software Foundation, Inc.,
//  51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
//
//--------------------------------------------------------------------------------------------------
//  Author                  Date            Description of modifications
//--------------------------------------------------------------------------------------------------
//  Janis Kruminsch         2006-05-16      new-258: Latvian localization.
//  Janis Kruminsch         2006-05-16      new-005: Oracle support.
//  Janis Kruminsch         2006-06-19      new-236: Single record subscription.
//  Janis Kruminsch         2006-06-25      new-222: Email reminders.
//  Janis Kruminsch         2006-06-28      new-272: When reminder is sent a notification should be displayed to user.
//  Janis Kruminsch         2006-06-28      new-274: "Crumbs" for creation and modification of filters or subscriptions are not clear.
//  Janis Kruminsch         2006-07-24      bug-201: 'Access Forbidden' error with cyrillic named attachments.
//  Janis Kruminsch         2006-08-07      bug-300: Cannot login with Active Directory credentials.
//  Janis Kruminsch         2006-08-13      new-305: Note with explanation of links to other records should be added where needed.
//  Artem Rodygin           2006-08-20      new-313: Implement HTTP authentication.
//  Janis Kruminsch         2006-10-14      new-137: Custom queries.
//  Janis Kruminsch         2006-10-17      new-361: Extended custom queries.
//  Janis Kruminsch         2006-11-04      new-364: Default fields values.
//  Janis Kruminsch         2006-11-05      new-365: Filters sharing.
//  Janis Kruminsch         2006-11-07      new-366: Export to CSV.
//  Janis Kruminsch         2006-11-12      new-368: User should be able to subscribe other persons.
//  Artem Rodygin           2006-11-15      bug-381: Attachments of some types are not opened in valid applications.
//  Janis Kruminsch         2006-11-15      new-374: Carbon copies in subscriptions.
//  Janis Kruminsch         2006-11-18      bug-388: "Configuration" page does not display path where binary attachments are stored.
//  Janis Kruminsch         2006-11-18      bug-389: Motorola LDAP server returns "Insufficient rights" error.
//  Janis Kruminsch         2006-11-20      new-377: Custom views.
//  Janis Kruminsch         2006-12-04      new-405: Default filter for new user.
//  Janis Kruminsch         2006-12-10      new-432: Maintenance notice banner.
//  Janis Kruminsch         2006-12-14      new-446: Add processing of new upload errors.
//  Janis Kruminsch         2006-12-17      new-457: Default filter for new user.
//  Janis Kruminsch         2006-12-20      new-459: 'Filters' and 'Subscriptions' pages should contain ability to clear current selection.
//  Artem Rodygin           2006-12-22      new-462: Postpone date should be displayed as separate field.
//  Janis Kruminsch         2006-12-23      new-463: Date field names should be extended with date format explanation.
//  Janis Kruminsch         2006-12-26      bug-467: Latvian prompts should be reviewed.
//  Artem Rodygin           2006-12-27      bug-470: State permissions must not be used when record is being created.
//  Artem Rodygin           2006-12-27      new-472: User must have ability to log out.
//  Janis Kruminsch         2006-12-28      new-474: Rename field permissions to make them more clear.
//  Artem Rodygin           2006-12-30      new-475: Turning subscriptions on and off is not clear.
//  Janis Kruminsch         2007-01-15      new-483: JavaScript ability notice.
//  Janis Kruminsch         2007-04-03      new-512: Banner about 'no reply on autogenerated message' for notifications.
//  Janis Kruminsch         2007-04-03      new-499: Records dump to text file.
//  Janis Kruminsch         2007-07-05      new-533: Links between records.
//  Janis Kruminsch         2007-07-16      new-545: Chart legend is required.
//  Janis Kruminsch         2007-07-16      new-546: Confidential comments.
//  Janis Kruminsch         2007-08-06      new-551: Rework dependencies into "parent-child" relations.
//  Artem Rodygin           2007-08-27      [rhonda] Hide author from 'Innovation' templates.
//  Janis Kruminsch         2007-09-09      new-563: Custom separators inside fields set.
//  Janis Kruminsch         2007-09-12      new-576: [SF1788286] Export to CSV
//  Janis Kruminsch         2007-09-13      new-566: Choose encoding for record dump and export of records list.
//  Janis Kruminsch         2007-10-02      new-513: Apply current filter set to search results.
//  Janis Kruminsch         2007-10-30      new-564: Filters set.
//  Artem Rodygin           2007-11-05      new-571: View should show all records of current filters set.
//  Janis Kruminsch         2007-11-06      new-562: Ability to show only last values of any state.
//  Janis Kruminsch         2007-11-11      bug-624: dbx_error(): Too many tables; MySQL can only use 61 tables in a join
//  Janis Kruminsch         2007-11-13      new-599: Separated "Age" in custom views.
//  Janis Kruminsch         2007-11-14      new-548: Custom links in text fields.
//  Yury Udovichenko        2007-11-19      new-623: Default state in states list.
//  Yury Udovichenko        2007-11-20      new-536: Ability to hide postpone records from the list.
//  Janis Kruminsch         2007-11-29      new-637: Subject of notifications should contain subject of records.
//  Janis Kruminsch         2007-11-29      new-617: Add 'no view' and 'no filter set' to related comboboxes.
//  Janis Kruminsch         2007-12-27      new-659: Set default language
//  Janis Kruminsch         2007-12-30      bug-660: [SF1860788] PHP4 html_entity_decode() is not working
//  Janis Kruminsch         2008-01-16      new-666: Buttons "Previous" & "Next" on record view page.
//  Janis Kruminsch         2008-01-28      new-531: LDAP Guest users
//  Janis Kruminsch         2008-01-31      new-601: [SF1814666] Export and Import Templates
//  Janis Kruminsch         2008-02-27      new-676: [SF1898731] Delete Issues from Workflow
//  Artem Rodygin           2008-02-28      new-294: PostgreSQL support.
//  Janis Kruminsch         2008-03-02      bug-681: Update configuration page with new options.
//  Janis Kruminsch         2008-04-30      bug-699: Views // Names of custom columns are duplicated in the list of available columns, when there are two fields of different types with the same name.
//  Janis Kruminsch         2008-05-01      new-715: Show creation time in the list of records.
//  Janis Kruminsch         2008-07-02      new-729: [SF2008579] Mark all records as read
//  Janis Kruminsch         2008-11-11      new-749: Guest access for unauthorized users.
//  Artem Rodygin           2009-01-08      new-774: 'Anyone' system role permissions.
//  Artem Rodygin           2009-04-12      bug-806: German translation causes two ambiguous "zuruck" buttons.
//  Artem Rodygin           2009-04-26      new-817: Field permissions dialog refactoring.
//  Artem Rodygin           2009-04-26      new-818: Change buttons layout on viewing record page.
//  Artem Rodygin           2009-10-12      new-848: LDAP TLS support.
//  Artem Rodygin           2009-10-12      new-837: Replace "Groups" with "Global groups" in main menu.
//--------------------------------------------------------------------------------------------------

$resource_latvian = array
(
    RES_SECTION_ALERTS =>
    /* 200 */
    'J�aizpilda visi lauci�i, kas atz�m�ti k� oblig�tie.',
    'Noklus�juma noz�mei j�b�t no %1 l�dz %2 apgabal�.',
    'Lietot�ja konts ir atsl�gts.',
    'Lietot�ja konts ir blo��ts.',
    'Nezin�ms lietot�ja v�rds.',
    'Lietot�ja konts ar t�du lietot�ja v�rdu jau eksist�.',
    'Nepareiza e-pasta adrese.',
    'Paroles nesakr�t.',
    'Parolei j�satur vismaz %1 simbolu.',
    'Projekts ar t�du nosaukumu jau eksist�.',
    /* 210 */
    'Grupa ar t�du nosaukumu jau eksist�.',
    'Lek�ls ar t�du nosaukumu vai pried�kli jau eksist�.',
    'St�voklis ar t�du nosaukumu vai sa�sin�jumu jau eksist�.',
    'Atrib�ts ar t�du nosaukumu jau eksist�.',
    'Nekorekts veselais skaitlis.',
    'Veselajam skaitlim j�b�t no %1 l�dz %2 apgabal�.',
    '"%1" lauci�a lielumam j�b�t no %2 l�dz %3 apgabal�.',
    'Maksim�lajam lielumam j�b�t liel�kam par minim�lo.',
    'Aug�upiel�d�jam� faila izm�rs ir liel�ks nek� "upload_max_filesize" direkt�v� nor�d�tais "php.ini" fail�.',
    'Aug�upiel�d�jam� faila izm�rs nevar b�t liel�ks par %1 Kbaitiem.',
    /* 220 */
    'Aug�upiel�d�jamais fails tika aug�upiel�d�ts tikai da��ji.',
    'Fails netika aug�upiel�d�ts.',
    'Nav atrasta laic�g� mape.',
    'Pielikums ar t�du v�rdu jau eksist�.',
    'Ieraksts nav atrasts.',
    'Filtrs ar ievad�to nosaukumu jau eksist�.',
    'Nepareizs datums.',
    'Datuma noz�mei j�b�t %1 l�dz %2 apgabal�.',
    'Nepareizs laiks.',
    'Laika noz�mei j�b�t %1 l�dz %2 apgabal�.',
    /* 230 */
    'Parakst��an�s ar ievad�to nosaukumu jau eksist�.',
    'Atg�din�jums ar t�du v�rdu jau eksist�.',
    'Atg�din�jums tika veiksm�gi nos�t�ts.',
    'Skats ar t�du nosaukumu jau eksist�.',
    'Stabi�� ar t�du nosaukumu jau eksist�.',
    'Diska ieraksta k��da',
    'Papla�in�jums apst�din�ja faila iel�di',
    'JavaScript j�b�t iesl�gtam.',
    '�� ir autom�tisk� zi�a, l�dzu, neatbildiet uz to, j�su atbilde netiks sa�emta.',
    'Nor�d�tais b�rnieraksts jau eksist�.',
    /* 240 */
    'Filtru kopa ar t�du nosaukumu jau eksist�.',
    'Skat�jumam nevar b�t vair�k nek� %1 stabi�u.',
    '"%1" v�rt�bas form�ta p�rbaudes k��me.',
    'Lietot�js nav autoriz�ts.',
    'Nezin�ms lietot�ja v�rds vai parole.',
    'Nezin�ms autoriz�cijas tips.',
    'Nezin�ma k��da.',
    'XML-pars�t�ja k��da.',
    'Datub�zes savienojuma k��da.',

    RES_SECTION_CONFIRMS =>
    /* 300 */
    'Vai tie��m dz�st visus skat�jumus?',
    'Vai tie��m v�laties dz�st �o kontu?',
    'Vai tie��m v�laties dz�st �o projektu?',
    'Vai tie��m v�laties dz�st �o grupu?',
    'Vai tie��m v�laties dz�st �o lek�lu?',
    'Vai tie��m v�laties dz�st �o st�vokli?',
    'Vai tie��m v�laties dz�st �o atrib�tu?',
    'Vai tie��m v�laties atlikt �o ierakstu?',
    'Vai tie��m v�laties ats�kt �o ierakstu?',
    'Vai tie��m v�laties atz�m�t �o ierakstu?',
    /* 310 */
    'Vai tie��m v�laties dz�st visus atz�m�tos filtrus?',
    'Vai tie��m v�laties dz�st visas atz�m�t�s parakst��an�s?',
    'Vai tie��m nos�t�t �o atg�din�jumu?',
    'Vai tie��m dz�st �o atg�din�jumu?',
    'Vai tie��m v�laties dz�st �o stabi�u?',
    'Vai tie��m v�laties iziet?',
    'Vai esat p�rliecin�ti, ka v�laties dz�st visas filtru kopas?',
    'Tie��m v�laties dz�st �o ierakstu?',

    RES_SECTION_PROMPTS =>
    /* 1000 */
    'Latvie�u',
    'Ieiet',
    'Labi',
    'Atcelt',
    'Saglab�t',
    'Atpaka�',
    'T�l�k',
    'Izveidot',
    'Main�t',
    'Dz�st',
    /* 1010 */
    'Ieraksti',
    'Lietot�ji',
    'Projekti',
    'Main�t paroli',
    '"%1" st�vok�a atrib�ti',
    'nav',
    'Kop�:',
    'saglab�t paroli',
    'Konta inform�cija',
    'Lietot�ja v�rds',
    /* 1020 */
    'Pilns v�rds',
    'E-pasts',
    'Ties�bas',
    'administrators',
    'lietot�js',
    'Apraksts',
    'Parole',
    'Apstiprin�jums',
    'atsl�gts',
    'blo��ts',
    /* 1030 */
    'Jauns lietot�js',
    'Konts "%1"',
    'Projekta inform�cija',
    'Projekta nosaukums',
    'S�kuma laiks',
    'atlikts',
    'Jauns projekts',
    'Projekts "%1"',
    'Grupas',
    'Grupas inform�cija',
    /* 1040 */
    'Grupas nosaukums',
    'Jauna grupa',
    'Grupa "%1"',
    'Dal�ba',
    'P�r�jie',
    'Dal�bnieki',
    'Lek�li',
    'Lek�la inform�cija',
    'Lek�la nosaukums',
    'Pried�klis',
    /* 1050 */
    'Jauns lek�ls',
    'Lek�ls "%1"',
    'St�vok�i',
    'St�vok�a inform�cija',
    'St�vok�a nosaukums',
    'Sa�sin�jums',
    'St�vok�a tips',
    's�kotn�js',
    'vidus',
    'beigu',
    /* 1060 */
    'Atbild�gais',
    'atst�t neizmain�tu',
    'adres�t',
    'no�emt',
    'Jauns st�voklis',
    'St�voklis "%1"',
    'Izveidot vidus',
    'Izveidot gala',
    'P�rejas',
    'Ties�bas',
    /* 1070 */
    'Padar�t par s�kotn�ju',
    'At�auti',
    'Atrib�ti',
    'Atrib�ta inform�cija',
    'K�rt�ba',
    'Atrib�ta nosaukums',
    'Atrib�ta tips',
    'skaitlis',
    'rinda',
    'daudzrindu teksts',
    /* 1080 */
    'Oblig�ts',
    'J�',
    'N�',
    'Min.lielums',
    'Max.lielums',
    'Max.garums',
    'oblig�ts',
    'Jauns atrib�ts (solis %1/%2)',
    'Atrib�ts "%1"',
    'tikai nolas��anai',
    /* 1090 */
    'las�t un rakst�t',
    'Pamatinform�cija',
    'ID',
    'Projekts',
    'Lek�ls',
    'St�voklis',
    'Vecums',
    'Jauns ieraksts (solis %1/%2)',
    'Ieraksts "%1"',
    'P�riet',
    /* 1100 */
    'V�sture',
    'Atlikt',
    'Ats�kt',
    'Adres�t',
    'Main�t st�vokli',
    'Laiks',
    'Izveidot�js',
    'Ieraksts ir izveidots "%1" st�vokl�',
    'Ieraksts adres�ts uz %1.',
    'Ieraksts ir main�ts',
    /* 1110 */
    'St�voklis ir main�ts uz "%1"',
    'Ieraksts ir atlikts l�dz "%1"',
    'Ieraksts ir ats�kts',
    'Fails "%1" tika pievienots',
    'Fails "%1" tika dz�sts',
    'ties�bas izveidot ierakstus',
    'ties�bas main�t ierakstus',
    'ties�bas atlikt ierakstus',
    'ties�bas ats�kt ierakstus',
    'ties�bas p�radres�t adres�tos ierakstus',
    /* 1120 */
    'ties�bas main�t adres�to ierakstu st�vokli',
    'ties�bas pievienot failus',
    'ties�bas dz�st failus',
    'Valoda',
    'Pievienot koment�ru',
    'Koment�rs tika pievienots.',
    'ties�bas pievienot koment�rus',
    'Koment�rs',
    'Pievienot failu',
    'Dz�st failu',
    /* 1130 */
    'Pielikums',
    'Pielikuma nosaukums',
    'Pielikuma fails',
    'Pielikumi',
    'Nav atrib�tu.',
    'Kritisks vecums',
    'Atlik�anas laiks',
    'Izmai�as',
    'Vec� noz�me',
    'Jaun� noz�me',
    /* 1140 */
    'atlases ��na',
    'ieraksts',
    'saraksts',
    'Saraksta elementi',
    '%1 Kb',
    'Filtri',
    'Filtra nosaukums',
    'Visi projekti',
    'Visi lek�li',
    'Visi st�vok�i',
    /* 1150 */
    'Skat�ties ierakstu',
    'R�d�t tikai tos, kurus izveidoja ...',
    'R�d�t tikai tos, kuri adres�ti ...',
    'r�d�t tikai neaizv�rtos',
    'Temats',
    'Mekl��ana',
    'Mekl��anas parametri',
    'Mekl��anas rezult�ti (filtr�ti)',
    'Mekl�jamais teksts',
    'mekl�t atrib�tos',
    /* 1160 */
    'mekl�t koment�ros',
    'Statuss',
    'akt�vs',
    'Parakst��an�s',
    'zi�ot par ieraksta izveido�anu',
    'zi�ot par ieraksta adres��anu',
    'zi�ot par ieraksta izmain��anos',
    'zi�ot par ieraksta st�vok�a izmain��anos',
    'zi�ot par ieraksta atlk�anu',
    'zi�ot par ieraksta ats�k�anu',
    /* 1170 */
    'zi�ot par koment�ra pievieno�anu',
    'zi�ot par faila pievieno�anu',
    'zi�ot par faila dz��anu',
    'oblig�ts',
    'Atlikts',
    'L�dz datumam',
    'Noklus�juma noz�me',
    'iesl.',
    'izsl.',
    'M�r�jumi',
    /* 1180 */
    'Atv�rtie ieraksti',
    'Izveido�ana un aizv�r�ana',
    'ned��a',
    'daudzums',
    'Klon�t',
    'Ieraksts klon�ts no "%1".',
    'Iziet',
    'zi�ot par ieraksta klon��anu',
    'Iestat�jumi',
    'Ierakstu lap�',
    /* 1190 */
    'Gr�matz�mju lap�',
    'Blo��t',
    'Atblo��t',
    'Grupas tips',
    'glob�l�',
    'lok�l�',
    'Konfigur�cija',
    'Lok�lais pamatce��',
    'PamatURL',
    'Dro��ba',
    /* 1200 */
    'Minim�lais paroles garums',
    'Maksim�lais ielogo�an�s m��in�jumu skaits',
    'Blo���anas taimauts (min)',
    'Datub�ze',
    'Datub�zes tips',
    'Oracle',
    'MySQL',
    'Microsoft SQL Server',
    'Servera v�rds',
    'Datub�zes nosaukums',
    /* 1210 */
    'Datub�zes lietot�js',
    'Active Directory',
    'LDAP serveris',
    'Porta numurs',
    'Mekl��anas konts',
    'B�zes mape',
    'Administratori',
    'E-pasta zi�ojumi',
    'Maksim�lais izm�rs',
    'K��du mekl��ana',
    /* 1220 */
    'K��du mekl��anas re��ms',
    'iesl�gts (pez priv�tdatiem)',
    'iezl�gts (visi dati)',
    'K��du mekl��anas �urn�li',
    'Iesl�gts',
    'Izsl�gts',
    '%1 min',
    'ties�bas tikai skat�ties ierakstus',
    'Atlas�t visu',
    'Autors',
    /* 1230 */
    'datums',
    'ilgums',
    'r�d�t tikai atliktos',
    'Parakst��an�s nosaukums',
    'Notikumi',
    'Versija %1',
    'loma',
    'Parakst�ties',
    'Atrakst�ties',
    'Atg�din�jumi',
    /* 1240 */
    'Atg�din�juma v�rds',
    'Atg�din�juma temats',
    'Atg�din�juma sa��m�ji',
    'Jauns atg�din�jums (solis %1 no %2) ',
    'Atg�din�jums "%1"',
    'ties�bas s�t�t atg�din�jumus',
    'Nos�t�t',
    'Jauns filtrs',
    'Filtrs "%1"',
    'Jauna parakst��an�s',
    /* 1250 */
    'Parakst��an�s "%1"',
    'J�su LDAP parole',
    'J�s varat ievietot saiti uz citu ierakstu, nor�dot "rec#" un t� numuru (piem. "rec#305").',
    'R�d�t tikai tos, kas p�rvietoti st�vok�os ...',
    'Koplieto�ana ar ...',
    'Eksport��ana',
    'Parakst�t citus...',
    'Parakst�tie',
    '%1 parakst�ja J�s uz ierakstu.',
    '%1 atrakst�j�s.',
    /* 1260 */
    'Kopija',
    'Kr�tuve',
    'LDAP-atrib�ts',
    'Skati',
    'Skata inform�cija',
    'Skata nosaukums',
    'Jauns skats (solis %1/%2)',
    'Skats "%1"',
    'Bez skata',
    'Noteikt',
    /* 1270 */
    'Stabi�i',
    'Stabi�u inform�cija',
    'Stabi�a virsraksts',
    'Jauns stabi��',
    'Stabi�� "%1"',
    'Izl�dzin�t',
    'pa kreisi',
    'centr�',
    'pa labi',
    'Pakalpojums neb�s pieejams no %1 l�dz %2 (%3)',
    /* 1280 */
    'Visi, kas adres�ti uz mani',
    'Manis izveidotie',
    'Nov�kt atlasi',
    'gggg.mm.dd.',
    'Izmete',
    'P�cte�i',
    'Izveidot p�cteci',
    'Pievienot p�cteci',
    'Nov�kt p�cteci',
    'P�cte�a ID',
    /* 1290 */
    'Pievienots "%1" p�ctecis.',
    'Nov�kts �%1� p�ctecis.',
    'ties�bas pievienot p�cte�us',
    'ties�bas nov�kt p�cte�us',
    'zi�ot kad tiek pievienots p�ctecis',
    'zi�ot kad tiek nov�kts p�ctecis',
    'izveidotie ieraksti',
    'sl�gtie ieraksti',
    'Konfidenci�ls',
    'Pievienot konfidenci�lu koment�ru',
    /* 1300 */
    'ties�bas pievienot/las�t konfidenci�los koment�rus',
    'Tika pievienots konfidenci�ls koment�rs.',
    'Pirmste�a ID',
    'atkar�ba',
    'sl�pts',
    'Pievienot atdal�t�ju',
    'CSV Norobe�ot�js',
    'CSV kod��ana',
    'CSV rindu nobeigumi',
    'Mekl��anas rezult�ti (nefiltr�ti)',
    /* 1310 */
    'Iesl�gt filtrus',
    'Izsl�gt filtrus',
    'Aktu�l� filtru kopa',
    'Saglab�t filtru kopu',
    'Filtru kopas',
    'Filtru kopas nosaukums',
    '"%1" filtru kopa',
    'Aktu�lais skat�jums',
    'Saglab�t skat�jumu',
    'Izv�rst visu',
    /* 1320 */
    'Sav�rst visu',
    'Atiestat�t uz noklus�jumu',
    'P/N',
    'PCRE lauku v�rt�bu p�rbaudei',
    'Mekl�t PCRE lauku v�rt�bu main��anai',
    'P�rvietot PCRE lauku v�rt�bu main��ana',
    'N�ko�ais st�voklis p�c noklus�juma',
    'Atlik�anas statuss',
    'r�d�t visu',
    'r�d�t tikai akt�vos',
    /* 1330 */
    'Notikums',
    'Nav filtru kopas',
    'Viesu piek�uve',
    'Nav.',
    'Glob�l� grupas',
    'Viesis',
    'Imports',
    'ties�bas dz�st ierakstus',
    'Autoriz�cias tips',
    'Noklus�juma valoda',
    /* 1340 */
    'Paroles der�guma termi�� (d.)',
    'Sesijas der�guma termi�� (min.)',
    'LDAP p�rskait�jums',
    'PostgreSQL',
    'indeksu saraksts',
    'v�rt�bu saraksts',
    'Izveidots',
    'Atz�m�t k� izlas�tos',
    'Registered',  // TBT
    'TLS',
);

?>
