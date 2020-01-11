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
    'bank_name'                   => 'Banka adı',
    'bank_balance'                => 'Bakiye',
    'savings_balance'             => 'Tasarruf bakiyesi',
    'credit_card_limit'           => 'Kredi kartı limiti',
    'automatch'                   => 'Otomatik olarak eşleştir',
    'skip'                        => 'Atla',
    'enabled'                     => 'Enabled',
    'name'                        => 'İsim',
    'active'                      => 'Aktif',
    'amount_min'                  => 'Minimum tutar',
    'amount_max'                  => 'Minimum tutar',
    'match'                       => 'Eşleşti',
    'strict'                      => 'Sıkı mod',
    'repeat_freq'                 => 'Tekrarlar',
    'update_channel'              => 'Update channel',
    'journal_currency_id'         => 'Para birimi',
    'currency_id'                 => 'Para birimi',
    'transaction_currency_id'     => 'Para birimi',
    'external_ip'                 => 'Sunucunuzun dış IP adresi',
    'attachments'                 => 'Ekler',
    'journal_amount'              => 'Tutar',
    'journal_source_name'         => 'Gelir hesabı (kaynak)',
    'keep_bill_id'                => 'Bill',
    'journal_source_id'           => 'Varlık Hesabı (kaynak)',
    'BIC'                         => 'BIC',
    'verify_password'             => 'Parola güvenliğini doğrula',
    'source_account'              => 'Kaynak hesap',
    'destination_account'         => 'Hedef Hesap',
    'journal_destination_id'      => 'Asset account (destination)',
    'asset_destination_account'   => 'Destination account',
    'include_net_worth'           => 'Include in net worth',
    'asset_source_account'        => 'Source account',
    'journal_description'         => 'Tanımlama',
    'note'                        => 'Notlar',
    'store_new_transaction'       => 'Store new transaction',
    'split_journal'               => 'Bu işlemi böl / Taksitlendir',
    'split_journal_explanation'   => 'Bu işlemi taksitlendirin',
    'currency'                    => 'Para birimi',
    'account_id'                  => 'Varlık hesabı',
    'budget_id'                   => 'Bütçe',
    'opening_balance'             => 'Opening balance',
    'tagMode'                     => 'Etiket modu',
    'tag_position'                => 'Etiket konumu',
    'virtual_balance'             => 'Virtual balance',
    'targetamount'                => 'Hedef tutar',
    'account_role'                => 'Account role',
    'opening_balance_date'        => 'Opening balance date',
    'cc_type'                     => 'Credit card payment plan',
    'cc_monthly_payment_date'     => 'Credit card monthly payment date',
    'piggy_bank_id'               => 'Kumbara',
    'returnHere'                  => 'Dön buraya',
    'returnHereExplanation'       => 'Sakladıktan sonra, başka bir tane oluşturmak için buraya dön.',
    'returnHereUpdateExplanation' => 'Güncelledikten sonra buraya dönün.',
    'description'                 => 'Tanımlama',
    'expense_account'             => 'Gider Hesabı',
    'revenue_account'             => 'Gelir hesabı',
    'decimal_places'              => 'Ondalık basamak',
    'exchange_rate_instruction'   => 'Yabancı para birimleri',
    'source_amount'               => 'Miktar (kaynak)',
    'destination_amount'          => 'Miktar (Hedef)',
    'native_amount'               => 'Yerli Miktar',
    'new_email_address'           => 'Yeni e-posta adresi',
    'verification'                => 'Doğrulama',
    'api_key'                     => 'API anahtarı',
    'remember_me'                 => 'Remember me',
    'liability_type_id'           => 'Liability type',
    'interest'                    => 'Interest',
    'interest_period'             => 'Interest period',

    'source_account_asset'        => 'Kaynak Hesabı (varlık hesabı)',
    'destination_account_expense' => 'Hedef Hesap (gider hesabı)',
    'destination_account_asset'   => 'Hedef hesabı (gider hesabı)',
    'source_account_revenue'      => 'Kaynak hesap (gelir hesabı)',
    'type'                        => 'Tür',
    'convert_Withdrawal'          => 'Para çekmeyi değiştir',
    'convert_Deposit'             => 'Mevduata dönüştürün',
    'convert_Transfer'            => 'Aktarımı dönüştür',

    'amount'                      => 'Tutar',
    'foreign_amount'              => 'Foreign amount',
    'existing_attachments'        => 'Existing attachments',
    'date'                        => 'Tarih',
    'interest_date'               => 'Faiz tarihi',
    'book_date'                   => 'Kitap Tarihi',
    'process_date'                => 'İşlem tarihi',
    'category'                    => 'Kategori',
    'tags'                        => 'Etiketler',
    'deletePermanently'           => 'Kalıcı olarak sil',
    'cancel'                      => 'İptal',
    'targetdate'                  => 'Hedeflenen tarih',
    'startdate'                   => 'Başlangıç Tarihi',
    'tag'                         => 'Etiket',
    'under'                       => 'Altında',
    'symbol'                      => 'Sembol',
    'code'                        => 'Kod',
    'iban'                        => 'IBAN numarası',
    'account_number'              => 'Account number',
    'creditCardNumber'            => 'Kredi Kartı Numarası',
    'has_headers'                 => 'Başlıklar',
    'date_format'                 => 'Tarih formatı',
    'specifix'                    => 'Banka veya dosyalara özel düzeltmeler',
    'attachments[]'               => 'Ekler',
    'store_new_withdrawal'        => 'Yeni para çekme oluştur',
    'store_new_deposit'           => 'Yeni depozito oluştur',
    'store_new_transfer'          => 'Yeni transfer oluştur',
    'add_new_withdrawal'          => 'Yeni para çekme ekle',
    'add_new_deposit'             => 'Yeni depozito ekle',
    'add_new_transfer'            => 'Yeni bir transfer ekle',
    'title'                       => 'Başlık',
    'notes'                       => 'Notlar',
    'filename'                    => 'Dosya adı',
    'mime'                        => 'MIME türü',
    'size'                        => 'Boyut',
    'trigger'                     => 'Tetikleyici',
    'stop_processing'             => 'İşlemeyi durdur',
    'start_date'                  => 'Sayfa başlangıcı',
    'end_date'                    => 'Kapsama alanı dışında',
    'include_attachments'         => 'Yüklenen ekleri dahil et',
    'include_old_uploads'         => 'İçe aktarılan verileri dahil et',
    'delete_account'              => '":name" adlı hesabı sil',
    'delete_bill'                 => 'Faturayı sil ":name"',
    'delete_budget'               => '":name" bütçesini sil',
    'delete_category'             => '":name" kategorisini sil',
    'delete_currency'             => 'Para birimini sil ":name"',
    'delete_journal'              => '":description" açıklamalı işlemi sil',
    'delete_attachment'           => '":name" eklentisini sil',
    'delete_rule'                 => '\'":title" kuralını sil',
    'delete_rule_group'           => '":title" kural grubunu sil',
    'delete_link_type'            => '":name" bağlantı türünü sil',
    'delete_user'                 => '":email" kullanıcısını sil',
    'delete_recurring'            => 'Delete recurring transaction ":title"',
    'user_areYouSure'             => '":email" kullanıcısını silerseniz her şey gitmiş olacak. Geriye alma, silmeyi iptal etme veya başka bir şey yoktur. Eğer kendinizi silerseniz, bu Firefly III\'e erişiminizi kaybedersiniz.',
    'attachment_areYouSure'       => '":name" isimli eklentiyi silmek istediğinizden emin misiniz?',
    'account_areYouSure'          => '":name" isimli hesabı silmek istediğinizden emin misiniz?',
    'bill_areYouSure'             => '":name" isimli faturayı silmek istediğinizden emin misiniz?',
    'rule_areYouSure'             => '":title" başlıklı kuralı silmek istediğinizden emin misiniz?',
    'ruleGroup_areYouSure'        => '":title" başlıklı kural grubunu silmek istediğinizden emin misiniz?',
    'budget_areYouSure'           => '":name" isimli bütçeyi silmek istediğinizden emin misiniz?',
    'category_areYouSure'         => '":name" isimli kategoriyi silmek istediğinizden emin misiniz?',
    'recurring_areYouSure'        => 'Are you sure you want to delete the recurring transaction titled ":title"?',
    'currency_areYouSure'         => '":name" isimli para birimini silmek istediğinizden emin misiniz?',
    'piggyBank_areYouSure'        => '":name" isimli kumbarayı silmek istediğinizden emin misiniz?',
    'journal_areYouSure'          => ':description" açıklamalı işlemi silmek istediğinizden emin misiniz?',
    'mass_journal_are_you_sure'   => 'Bu işlemi silmek istediğinizden emin misiniz?',
    'tag_areYouSure'              => '":tag" etiketini silmek istediğinizden emin misiniz?',
    'journal_link_areYouSure'     => '<a href=":source_link">:source</a> and <a href=":destination_link">:destination</a> arasındaki bağlantıyı silmek istediğinizden emin misiniz?',
    'linkType_areYouSure'         => '":name" (":inward" / ":outward") bağlantı türünü silmek istediğinizden emin misiniz?',
    'permDeleteWarning'           => 'Deleting stuff from Firefly III is permanent and cannot be undone.',
    'mass_make_selection'         => 'Onay kutusunu kaldırarak öğelerin silinmesini engelleyebilirsiniz.',
    'delete_all_permanently'      => 'Seçilenleri kalıcı olarak sil',
    'update_all_journals'         => 'Bu işlemleri güncelleyin',
    'also_delete_transactions'    => 'Bu hesaba bağlı olan tek işlem de silinecektir. |Bu hesaba bağlı tüm :count işlemleri de silinecektir.',
    'also_delete_connections'     => 'Bu bağlantıya bağlı tek işlem bağlantısını kaybedecek.| Bu bağlantı türüne bağlı tüm :count işlemleri bağlantılarını kaybedecek.',
    'also_delete_rules'           => 'Bu hesaba bağlı olan tek kural grubu da silinecektir. |Bu hesaba bağlı tüm :count kuralları da silinecektir.',
    'also_delete_piggyBanks'      => 'Bu hesaba bağlı olan tek kumbara da silinecektir. |Bu hesaba bağlı olan tüm :count kumbaraları da silinecektir.',
    'bill_keep_transactions'      => 'The only transaction connected to this bill will not be deleted.|All :count transactions connected to this bill will be spared deletion.',
    'budget_keep_transactions'    => 'The only transaction connected to this budget will not be deleted.|All :count transactions connected to this budget will be spared deletion.',
    'category_keep_transactions'  => 'The only transaction connected to this category will not be deleted.|All :count transactions connected to this category will be spared deletion.',
    'recurring_keep_transactions' => 'The only transaction created by this recurring transaction will not be deleted.|All :count transactions created by this recurring transaction will be spared deletion.',
    'tag_keep_transactions'       => 'The only transaction connected to this tag will not be deleted.|All :count transactions connected to this tag will be spared deletion.',
    'check_for_updates'           => 'Check for updates',

    'email'                 => 'E-posta adresi',
    'password'              => 'Şifre',
    'password_confirmation' => 'Şifre (Tekrar)',
    'blocked'               => 'Engellendi mi?',
    'blocked_code'          => 'Blok nedeni',
    'login_name'            => 'Login',

    // import
    'apply_rules'           => 'Apply rules',
    'artist'                => 'Artist',
    'album'                 => 'Album',
    'song'                  => 'Song',


    // admin
    'domain'                => 'Alan adı',
    'single_user_mode'      => 'Kullanıcı kaydını devre dışı bırak',
    'is_demo_site'          => 'Demo sitesi var mı',

    // import
    'import_file'           => 'Önemli dosya',
    'configuration_file'    => 'Yapılandırma dosyası',
    'import_file_type'      => 'Dosya türünü içe aktar',
    'csv_comma'             => 'Bir virgül (,)',
    'csv_semicolon'         => 'Noktalı virgül (;)',
    'csv_tab'               => 'Bir sekme (görünmez)',
    'csv_delimiter'         => 'CSV alan ayırıcısı',
    'csv_import_account'    => 'Varsayılan ithalat hesabı',
    'csv_config'            => 'CSV içe aktarım yapılandırılması',
    'client_id'             => 'Müşteri Kimliği',
    'service_secret'        => 'Hizmet Sırrı',
    'app_secret'            => 'Uygulama Sırrı',
    'app_id'                => 'App ID',
    'secret'                => 'Secret',
    'public_key'            => 'Genel anahtar',
    'country_code'          => 'Ülke kodu',
    'provider_code'         => 'Banka ya da veri sağlayıcı',
    'fints_url'             => 'FinTS API URL',

    'fints_bank_code'       => 'Bank code',
    'fints_username'        => 'Username',
    'fints_password'        => 'PIN / Password',
    'fints_account'         => 'FinTS account',
    'local_account'         => 'Firefly III account',
    'from_date'             => 'Date from',
    'to_date'               => 'Date to',


    'due_date'                => 'Bitiş Tarihi',
    'payment_date'            => 'Ödeme Tarihi',
    'invoice_date'            => 'Fatura Tarihi',
    'internal_reference'      => 'Dahili referans',
    'inward'                  => 'Dahili açıklama',
    'outward'                 => 'Harici açıklama',
    'rule_group_id'           => 'Kural grubu',
    'transaction_description' => 'Transaction description',
    'first_date'              => 'First date',
    'transaction_type'        => 'Transaction type',
    'repeat_until'            => 'Repeat until',
    'recurring_description'   => 'Recurring transaction description',
    'repetition_type'         => 'Type of repetition',
    'foreign_currency_id'     => 'Foreign currency',
    'repetition_end'          => 'Repetition ends',
    'repetitions'             => 'Repetitions',
    'calendar'                => 'Calendar',
    'weekend'                 => 'Weekend',
    'client_secret'           => 'Client secret',

    'withdrawal_destination_id' => 'Destination account',
    'deposit_source_id'         => 'Source account',
    'expected_on'               => 'Expected on',
    'paid'                      => 'Paid',

];
