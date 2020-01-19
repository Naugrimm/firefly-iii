<?php

/**
 * form.php
 * Copyright (c) 2019 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // new user:
    'bank_name'                 => 'Name der Bank',
    'bank_balance'              => 'Kontostand',
    'savings_balance'           => 'Sparguthaben',
    'credit_card_limit'         => 'Kreditkartenlimit',
    'automatch'                 => 'Automatisch reagieren',
    'skip'                      => 'Überspringen',
    'enabled'                   => 'Aktiviert',
    'name'                      => 'Name',
    'active'                    => 'Aktiv',
    'amount_min'                => 'Mindestbetrag',
    'amount_max'                => 'Höchstbetrag',
    'match'                     => 'Reagiert auf',
    'strict'                    => 'Strenger Modus',
    'repeat_freq'               => 'Wiederholungen',
    'location'                  => 'Herkunft',
    'update_channel'            => 'Aktualisierungskanal',
    'journal_currency_id'       => 'Währung',
    'currency_id'               => 'Währung',
    'transaction_currency_id'   => 'Währung',
    'external_ip'               => 'Die externe IP-Adresse Ihres Servers',
    'attachments'               => 'Anhänge',
    'journal_amount'            => 'Betrag',
    'journal_source_name'       => 'Erlöskonto (Herkunft)',
    'keep_bill_id'              => 'Rechnung',
    'journal_source_id'         => 'Anlagenkonto (Herkunft)',
    'BIC'                       => 'BIC',
    'verify_password'           => 'Passwortsicherheit überprüfen',
    'source_account'            => 'Quellkonto',
    'destination_account'       => 'Zielkonto',
    'journal_destination_id'    => 'Anlagenkonto (Ziel)',
    'asset_destination_account' => 'Zielkonto',
    'include_net_worth'         => 'Im Eigenkapital enthalten',
    'asset_source_account'      => 'Quellkonto',
    'journal_description'       => 'Beschreibung',
    'note'                      => 'Notizen',
    'store_new_transaction'       => 'Neue Buchung speichern',
    'split_journal'               => 'Diese Überweisung aufteilen',
    'split_journal_explanation'   => 'Diese Überweisung in mehrere Teile aufteilen',
    'currency'                    => 'Währung',
    'account_id'                  => 'Bestandskonto',
    'budget_id'                   => 'Budget',
    'opening_balance'             => 'Eröffnungsbilanz',
    'tagMode'                     => 'Schlagwort-Modus',
    'tag_position'                => 'Schlagwort-Speicherort',
    'virtual_balance'             => 'Virtueller Kontostand',
    'targetamount'                => 'Zielbetrag',
    'account_role'                => 'Kontenfunktion',
    'opening_balance_date'        => 'Eröffnungsbilanzdatum',
    'cc_type'                     => 'Kreditkartenzahlungsplan',
    'cc_monthly_payment_date'     => 'Monatlicher Kreditkartenzahlungsplan',
    'piggy_bank_id'               => 'Sparschwein',
    'returnHere'                  => 'Hierhin zurückkehren',
    'returnHereExplanation'       => 'Nach dem Speichern hierher zurückkehren, um ein weiteres Element zu erstellen.',
    'returnHereUpdateExplanation' => 'Nach dem Update, hierher zurückkehren.',
    'description'                 => 'Beschreibung',
    'expense_account'             => 'Debitor (Ausgabe)',
    'revenue_account'             => 'Kreditor (Einnahme)',
    'decimal_places'              => 'Nachkommastellen',
    'exchange_rate_instruction'   => 'Fremdwährungen',
    'source_amount'               => 'Betrag (Quelle)',
    'destination_amount'          => 'Betrag (Ziel)',
    'native_amount'               => 'Nativer Betrag',
    'new_email_address'           => 'Neue E-Mail-Adresse',
    'verification'                => 'Bestätigung',
    'api_key'                     => 'API-Schlüssel',
    'remember_me'                 => 'Angemeldet bleiben',
    'liability_type_id'           => 'Haftungsart',
    'interest'                    => 'Zinsen',
    'interest_period'             => 'Verzinsungszeitraum',

    'source_account_asset'        => 'Quellkonto (Bestandskonto)',
    'destination_account_expense' => 'Zielkonto (Unkostenkonto)',
    'destination_account_asset'   => 'Zielkonto (Bestandskonto)',
    'source_account_revenue'      => 'Quellkonto (Ertragskonto)',
    'type'                        => 'Typ',
    'convert_Withdrawal'          => 'Ändere zu Abhebung',
    'convert_Deposit'             => 'Ändere zu Einzahlung',
    'convert_Transfer'            => 'In Umbuchung umwandeln',

    'amount'                      => 'Betrag',
    'foreign_amount'              => 'Ausländischer Betrag',
    'existing_attachments'        => 'Bestehende Anhänge',
    'date'                        => 'Datum',
    'interest_date'               => 'Zinstermin',
    'book_date'                   => 'Buchungsdatum',
    'process_date'                => 'Bearbeitungsdatum',
    'category'                    => 'Kategorie',
    'tags'                        => 'Schlagwörter',
    'deletePermanently'           => 'Dauerhaft löschen',
    'cancel'                      => 'Abbrechen',
    'targetdate'                  => 'Zieldatum',
    'startdate'                   => 'Startdatum',
    'tag'                         => 'Schlagwort',
    'under'                       => 'Unter',
    'symbol'                      => 'Zeichen',
    'code'                        => 'Schlüssel',
    'iban'                        => 'IBAN',
    'account_number'              => 'Kontonummer',
    'creditCardNumber'            => 'Kreditkartennummer',
    'has_headers'                 => 'Kopfzeilen',
    'date_format'                 => 'Datumsformat',
    'specifix'                    => 'Bank- oder Dateispezifischer Korrekturen',
    'attachments[]'               => 'Anhänge',
    'store_new_withdrawal'        => 'Speichere neue Ausgabe',
    'store_new_deposit'           => 'Speichere neue Einnahme',
    'store_new_transfer'          => 'Neue Umbuchung speichern',
    'add_new_withdrawal'          => 'Fügen Sie eine neue Ausgabe hinzu',
    'add_new_deposit'             => 'Fügen Sie eine neue Einnahme hinzu',
    'add_new_transfer'            => 'Neue Umbuchung anlegen',
    'title'                       => 'Titel',
    'notes'                       => 'Notizen',
    'filename'                    => 'Dateiname',
    'mime'                        => 'MIME-Typ',
    'size'                        => 'Größe',
    'trigger'                     => 'Auslöser',
    'stop_processing'             => 'Verarbeitung beenden',
    'start_date'                  => 'Anfang des Bereichs',
    'end_date'                    => 'Ende des Bereichs',
    'include_attachments'         => 'Hochgeladene Anhänge hinzufügen',
    'include_old_uploads'         => 'Importierte Daten hinzufügen',
    'delete_account'              => 'Konto „:name” löschen',
    'delete_bill'                 => 'Rechnung „:name” löschen',
    'delete_budget'               => 'Budget „:name” löschen',
    'delete_category'             => 'Kategorie „:name” löschen',
    'delete_currency'             => 'Währung „:name” löschen',
    'delete_journal'              => 'Lösche Überweisung mit Beschreibung ":description"',
    'delete_attachment'           => 'Anhang „:name” löschen',
    'delete_rule'                 => 'Lösche Regel ":title"',
    'delete_rule_group'           => 'Lösche Regelgruppe ":title"',
    'delete_link_type'            => 'Verknüpfungstyp „:name” löschen',
    'delete_user'                 => 'Benutzer ":email" löschen',
    'delete_recurring'            => 'Dauerauftrag „:title” löschen',
    'user_areYouSure'             => 'Wenn Sie den Benutzer ":email" löschen, ist alles weg. Es gibt keine Sicherung, Wiederherstellung oder ähnliches. Wenn Sie sich selbst löschen, verlieren Sie den Zugriff auf diese Instanz von Firefly III.',
    'attachment_areYouSure'       => 'Möchten Sie den Anhang „:name” wirklich löschen?',
    'account_areYouSure'          => 'Möchten Sie das Konto „:name” wirklich löschen?',
    'bill_areYouSure'             => 'Möchten Sie die Rechnung „:name” wirklich löschen?',
    'rule_areYouSure'             => 'Sind Sie sicher, dass Sie die Regel mit dem Titel ":title" löschen möchten?',
    'ruleGroup_areYouSure'        => 'Sind Sie sicher, dass sie die Regelgruppe ":title" löschen möchten?',
    'budget_areYouSure'           => 'Möchten Sie das Budget „:name” wirklich löschen?',
    'category_areYouSure'         => 'Möchten Sie die Kategorie „:name” wirklich löschen?',
    'recurring_areYouSure'        => 'Möchten Sie den Dauerauftrag „:title” wirklich löschen?',
    'currency_areYouSure'         => 'Möchten Sie die Währung „:name” wirklich löschen?',
    'piggyBank_areYouSure'        => 'Möchten Sie das Sparschwein „:name” wirklich löschen?',
    'journal_areYouSure'          => 'Sind Sie sicher, dass Sie die Überweisung mit dem Namen ":description" löschen möchten?',
    'mass_journal_are_you_sure'   => 'Sind Sie sicher, dass Sie diese Überweisung löschen möchten?',
    'tag_areYouSure'              => 'Möchten Sie das Schlagwort „:tag” wirklich löschen?',
    'journal_link_areYouSure'     => 'Sind Sie sicher, dass Sie die Verknüpfung zwischen <a href=":source_link">:source</a> und <a href=":destination_link">:destination</a> löschen möchten?',
    'linkType_areYouSure'         => 'Möchten Sie den Verknüpfungstyp „:name” („:inward”/„:outward”) wirklich löschen?',
    'permDeleteWarning'           => 'Das Löschen von Dingen in Firefly III ist dauerhaft und kann nicht rückgängig gemacht werden.',
    'mass_make_selection'         => 'Sie können das Löschen von Elementen verhindern, indem Sie die Checkbox entfernen.',
    'delete_all_permanently'      => 'Ausgewähltes dauerhaft löschen',
    'update_all_journals'         => 'Diese Transaktionen aktualisieren',
    'also_delete_transactions'    => 'Die einzige Überweisung, die mit diesem Konto verknüpft ist, wird ebenfalls gelöscht. | Alle :count Überweisungen, die mit diesem Konto verknüpft sind, werden ebenfalls gelöscht.',
    'also_delete_connections'     => 'Die einzige Transaktion, die mit diesem Verknüpfungstyp verknüpft ist, verliert diese Verbindung. • Alle :count Buchungen, die mit diesem Verknüpfungstyp verknüpft sind, verlieren ihre Verbindung.',
    'also_delete_rules'           => 'Die einzige Regel, die mit diesem Konto verknüpft ist, wird ebenfalls gelöscht. | Alle :count Regeln, die mit diesem Konto verknüpft sind, werden ebenfalls gelöscht.',
    'also_delete_piggyBanks'      => 'Das einzige Sparschwein, das mit diesem Konto verknüpft ist, wird ebenfalls gelöscht. | Alle :count Sparschweine, die mit diesem Konto verknüpft sind, werden ebenfalls gelöscht.',
    'bill_keep_transactions'      => 'Die einzige mit dieser Rechnung verbundene Buchung wird nicht gelöscht. | Alle :count Buchungen, die mit dieser Rechnung verbunden sind, werden nicht gelöscht.',
    'budget_keep_transactions'    => 'Die einzige diesem Budget zugeordnete Buchung wird nicht gelöscht. | Alle :count Buchungen, die diesem Budget zugeordnet sind, werden nicht gelöscht.',
    'category_keep_transactions'  => 'Die einzige Buchung, die mit dieser Kategorie verbunden ist, wird nicht gelöscht. | Alle :count Buchungen, die mit dieser Kategorie verbunden sind, werden nicht gelöscht.',
    'recurring_keep_transactions' => 'Die einzige Buchung, die durch diesen Dauerauftrag erstellt wurde, wird nicht gelöscht. | Alle :count Buchungen, die durch diesen Dauerauftrag erstellt wurden, werden nicht gelöscht.',
    'tag_keep_transactions'       => 'Das einzige mit dieser Rechnung verbundene Schlagwort wird nicht gelöscht. | Alle :count Schlagwörter, die mit dieser Rechnung verbunden sind, werden nicht gelöscht.',
    'check_for_updates'           => 'Nach Updates suchen',

    'email'                 => 'E-Mail Adresse',
    'password'              => 'Passwort',
    'password_confirmation' => 'Passwort (wiederholen)',
    'blocked'               => 'Ist blockiert?',
    'blocked_code'          => 'Grund für Block',
    'login_name'            => 'Login',

    // import
    'apply_rules'           => 'Regeln anwenden',
    'artist'                => 'Interpret',
    'album'                 => 'Album',
    'song'                  => 'Titel',


    // admin
    'domain'                => 'Domain',
    'single_user_mode'      => 'Registrierung deaktivieren',
    'is_demo_site'          => 'Ist eine Demonstrationsseite',

    // import
    'import_file'           => 'Datei importieren',
    'configuration_file'    => 'Konfigurationsdatei',
    'import_file_type'      => 'Import-Dateityp',
    'csv_comma'             => 'Ein Komma (,)',
    'csv_semicolon'         => 'Ein Semikolon (;)',
    'csv_tab'               => 'Ein Tab (unsichtbar)',
    'csv_delimiter'         => 'CSV-Trennzeichen',
    'csv_import_account'    => 'Standard Import-Konto',
    'csv_config'            => 'CSV-Import Einstellungen',
    'client_id'             => 'Client-ID',
    'service_secret'        => 'Dienst-Geheimnis',
    'app_secret'            => 'App-Secret',
    'app_id'                => 'App-ID',
    'secret'                => 'Geheimnis',
    'public_key'            => 'Öffentlicher Schlüssel',
    'country_code'          => 'Ländercode',
    'provider_code'         => 'Bank oder Datenanbieter',
    'fints_url'             => 'FinTS-API-URL',

    'fints_bank_code'       => 'Bankleitzahl',
    'fints_username'        => 'Benutzername',
    'fints_password'        => 'PIN/Passwort',
    'fints_tan_device'      => 'TAN-Gerät',
    'fints_account'         => 'FinTS-Konto',
    'local_account'         => 'Firefly-III-Konto',
    'from_date'             => 'Datum ab',
    'to_date'               => 'Datum bis',


    'due_date'                => 'Fälligkeitstermin',
    'payment_date'            => 'Zahlungsdatum',
    'invoice_date'            => 'Rechnungsdatum',
    'internal_reference'      => 'Interner Verweis',
    'inward'                  => 'Beschreibung der Eingänge',
    'outward'                 => 'Beschreibung der Ausgänge',
    'rule_group_id'           => 'Regelgruppe',
    'transaction_description' => 'Beschreibung der Buchung',
    'first_date'              => 'Erstes Datum',
    'transaction_type'        => 'Art der Buchung',
    'repeat_until'            => 'Wiederholen bis',
    'recurring_description'   => 'Beschreibung des Dauerauftrags',
    'repetition_type'         => 'Art der Wiederholung',
    'foreign_currency_id'     => 'Fremdwährung',
    'repetition_end'          => 'Wiederholung endet',
    'repetitions'             => 'Wiederholungen',
    'calendar'                => 'Kalender',
    'weekend'                 => 'Wochenende',
    'client_secret'           => 'Kundengeheimnis',

    'withdrawal_destination_id' => 'Zielkonto',
    'deposit_source_id'         => 'Quellkonto',
    'expected_on'               => 'Erwartet am',
    'paid'                      => 'Bezahlt',

];
