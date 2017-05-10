<?php
/*
* Copyright 2007-2013 Charles du Jeu - Abstrium SAS <team (at) pyd.io>
* This file is part of Pydio.
*
* Pydio is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Pydio is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
*
* The latest code can be found at <https://pydio.com>.
*/

$mess = array(
"Admin access" => "Erster Administratorenzugang",
"Application Settings" => "Globale Einstellungen",
"Configuration storage" => "Konfigurationsspeicher",
"Add some users" => "Benutzer hinzufügen",
"Please set up a login and password for the administrator user. This step is necessary to let you login the first time. You can create more administrators later by going to the 'Settings' workspace." => "Bitte geben Sie Benutzername und Passwort für den Administrator ein. Dieser Schritt ist notwendig um sich anfangs Anzumelden. Sie könenn später über die Einstellungen mehr Benutzer mit Administratorrechten erstellen.",
"Admin Login" => "Benutzername",
"Alphanumeric login" => "Benutzernamen bestehen aus alphanumerischen Zeichen",
"Admin Display Name" => "Angezeigter Name",
"Name that users will see" => "Namen den die Benutzer sehen",
"Admin Password" => "Passwort wählen",
"Use a strong password (more than 8 characters, complicated ones." => "Verwenden Sie ein komplexes Passwort (mehr als 8 Zeichen, keine Begriffe aus dem Wörterbuch, etc.).",
"Confirm" => "Passwort bestätigen",
"Confirm password" => "Passwort zur Kontrolle erneut eingeben",
"Test Mailer" => "E-Mail-Versand testen",
"Try sending an email with the configured data" => "E-Mail-Versand mit dieser Konfiguration testen",
"Test SQL Connection" => "SQL-Serververbindung testen",
"Try connecting to the database" => "Verbindung testen",
"Enable emails" => "E-Mails aktivieren",
"Set up system to send emails" => "System für den Versand von E-Mails einrichten",
"No (you can enable mails later)" => "Nein (Kann nachträglich aktiviert werden)",
"Yes (requires a correct PHP configuration)" => "Ja (Voraussetzung: Korrekte PHP-Konfiguration)",
"Php Mailer" => "PHP Mailer",
"Set up the correct value to send emails" => "Setzen Sie den korrekten Wert um Emails zu senden",
"Administrator Email" => "Administrator E-Mail",
"Default 'From' email used to send emails." => "Standard 'Absender' mit den E-Mails versendet werden.",
"How the application configuration data will be stored (users, plugins, etc. not how your actual documents are managed). To get started rapidly, select No Database. To enable more advanced features, configure a database connection." => "Legt fest, wo die Konfiguration der Anwengung gespeichert wird, <b>nicht</b> wo Dokumente abgelegt werden. (Benutzer, Erweiterungen, etc.). Sqlite kann für ein Testsystem verwendet werden und benötigt keinen zusätzlichen Dienst.",
"Storage Type" => "Speichertyp",
"Select how the configuration will be stored" => "Wählen Sie wie und wo die Konfigurationsdaten gespeichert werden sollen",
"No Database (Quick Start)" => "Keine Datenbank (Schnellstart, nicht für produktive Umgebungen)",
"Database system (production environments, requires a DBMS supported by APPLICATION_TITLE)" => "Datenbank (Produktive Umgebungen, von APPLICATION_TITLE unterstütztes DBMS vorausgesetzt)",
"Enable Notifications" => "Protokollierung aktivieren",
"Log all events and alerts" => "Alle Ereignisse und Warnungen protokollieren",
"Create users for your organization right now. You can do this later by going to the Settings workspace." => "Benutzer für ihre Firma erstellen. Dies kann auch später über die Arbeitsumgebung 'Einstellungen' nachgeholt werden.",
"Login" => "Benutzername",
"User Email" => "E-Mail-Adresse",
"Mail address of the user" => "E-Mail-Adresse des Benutzers",
"Display name" => "Angezeigter Name",
"Password" => "Passwort wählen",
"Main options" => "Grundeinstellungen",
"Set up application title and create a connexion identifier for the super-administrator user. Make sure to use a strong password, as this user will have full access to the server." => "Legen Sie den Titel der Anwendung und einen Zugang für den Administrator fest. Versenden Sie ein sicheres Passwort, da dieser Benutzer Vollzugriff auf den Server hat.",
"Application Title" => "Titel der Anwendung",
"Your system title" => "Titel dieser Installation von Pydio",
"Welcome Message" => "Willkommens-Mitteilung",
"An additional message displayed at startup, on the splash screen and the login screen." => "Eine zusätzliche Mitteilung für die Anmelde-Seite.",
"User-friendly name of the user" => "Namen den die Benutzer sehen",
"Welcome to Pydio" => "Willkommen bei Pydio",
"Database Connection" => "Datenbankverbindung",
"Database type (Sqlite3 is NOT recommended for production purpose.)" => "Art der Datenbankverbindung",
"Advanced Options" => "Erweiterte Einstellungen",
"Please review these technical parameters. Encoding and URI should be auto-detected, but please make sure they reflect your actual server configuration." => "Bitte überprüfen Sie diese technischen Parameter. Encoding und der Pfad sollten automatich erkannt werden. Bitte stellen Sie sicher, dass die Werte zur Konfiguration des Servers passen.",
"Detected Encoding" => "Server-Encoding",
"Please make sure to set the encoding corresponding to your server configuration, something like ln_LN.CHARSET, e.g en_US.UTF-8" => "Bitte stellen Sie sicher, dass das Encoding zur Serverkonfiguration passt. (Format: ln_LN.CHARSET - z.B. en_US.UTF-8)",
"Detected Server URL" => "Server-URL",
"Make sure this is correct, as it's used to rewrite the htaccess file" => "Bitte stellen Sie sicher, dass die URL zu Ihrer Pydio-Installation korrekt ist.",
"Select a language activated by default( users will still be able to switch)" => "Wählen Sie die Standard-Sprache der Installation aus. Alle Benutzer können ihre Sprache im Benutzerprofil ändern.",
"Enable cache (recommended)" => "Cache aktivieren (empfohlen)",
"Use key/value store to cache server data in-memory. If APC/APCu is detected, it will be enabled by default, you can change this setting later to use a dedicated server like Redis or Memcache." => "Server-Daten werden im Arbeitsspeicher zwischengespeichert. Diese Einstellung wird mit APC/APCu standardmäßig aktiviert. Es ist später möglich auf einen externen Server, wie z.B. Redis oder Memcache zu wechseln.",
"Login of the administrative user, typically an email address." => "Login of the administrative user, typically an email address.",
);
