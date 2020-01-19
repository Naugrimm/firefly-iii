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
    'bank_name'                 => 'Название банка',
    'bank_balance'              => 'Бaлaнc',
    'savings_balance'           => 'Сберегательный баланс',
    'credit_card_limit'         => 'Лимит кредитной карты',
    'automatch'                 => 'Автоматическое сопоставление',
    'skip'                      => 'Пропустить',
    'enabled'                   => 'Включено',
    'name'                      => 'Название',
    'active'                    => 'Активный',
    'amount_min'                => 'Минимальная сумма',
    'amount_max'                => 'Максимальная сумма',
    'match'                     => 'Ключи для связи',
    'strict'                    => 'Строгий режим',
    'repeat_freq'               => 'Повторы',
    'location'                  => 'Location',
    'update_channel'            => 'Канал обновлений',
    'journal_currency_id'       => 'Валюта',
    'currency_id'               => 'Валюта',
    'transaction_currency_id'   => 'Валюта',
    'external_ip'               => 'Внешний IP-адрес вашего сервера',
    'attachments'               => 'Вложения',
    'journal_amount'            => 'Сумма',
    'journal_source_name'       => 'Доходный счет (источник)',
    'keep_bill_id'              => 'Счёт к оплате',
    'journal_source_id'         => 'Основной счёт (источник)',
    'BIC'                       => 'BIC',
    'verify_password'           => 'Проверка безопасности паролей',
    'source_account'            => 'Исходный счёт',
    'destination_account'       => 'Счёт назначения',
    'journal_destination_id'    => 'Основной счёт (назначение)',
    'asset_destination_account' => 'Счёт назначения',
    'include_net_worth'         => 'Включать в "Мои сбережения"',
    'asset_source_account'      => 'Исходный счёт',
    'journal_description'       => 'Описание',
    'note'                      => 'Заметки',
    'store_new_transaction'       => 'Сохранить новую транзакцию',
    'split_journal'               => 'Разделить эту транзакцию',
    'split_journal_explanation'   => 'Разделить эту транзакцию на несколько частей',
    'currency'                    => 'Валюта',
    'account_id'                  => 'Основной счёт',
    'budget_id'                   => 'Бюджет',
    'opening_balance'             => 'Начальный баланс',
    'tagMode'                     => 'Режим метки',
    'tag_position'                => 'Расположение метки',
    'virtual_balance'             => 'Виртуальный баланс',
    'targetamount'                => 'Целевая сумма',
    'account_role'                => 'Роль учётной записи',
    'opening_balance_date'        => 'Дата начального баланса',
    'cc_type'                     => 'План оплаты по кредитной карте',
    'cc_monthly_payment_date'     => 'Дата ежемесячного платежа по кредитной карте',
    'piggy_bank_id'               => 'Копилка',
    'returnHere'                  => 'Вернуться сюда',
    'returnHereExplanation'       => 'После сохранения вернуться сюда и создать ещё одну аналогичную запись.',
    'returnHereUpdateExplanation' => 'Вернуться на эту страницу после обновления.',
    'description'                 => 'Описание',
    'expense_account'             => 'Счет расходов',
    'revenue_account'             => 'Доходный счет',
    'decimal_places'              => 'Количество цифр после точки',
    'exchange_rate_instruction'   => 'Иностранные валюты',
    'source_amount'               => 'Сумма (источник)',
    'destination_amount'          => 'Сумма (назначение)',
    'native_amount'               => 'Собственная сумма',
    'new_email_address'           => 'Новый адрес электронной почты',
    'verification'                => 'Проверка',
    'api_key'                     => 'API-ключ',
    'remember_me'                 => 'Запомнить меня',
    'liability_type_id'           => 'Вид ответственности',
    'interest'                    => 'Процентная ставка',
    'interest_period'             => 'Период начисления процентов',

    'source_account_asset'        => 'Исходный счёт (основной счёт)',
    'destination_account_expense' => 'Счёт назначения (счёт расхода)',
    'destination_account_asset'   => 'Счёт назначения (основной счёт)',
    'source_account_revenue'      => 'Исходный счёт (счёт доходов)',
    'type'                        => 'Тип',
    'convert_Withdrawal'          => 'Конвертировать расход',
    'convert_Deposit'             => 'Конвертировать доход',
    'convert_Transfer'            => 'Конвертировать перевод',

    'amount'                      => 'Сумма',
    'foreign_amount'              => 'Сумма в иностранной валюте',
    'existing_attachments'        => 'Существующие вложения',
    'date'                        => 'Дата',
    'interest_date'               => 'Дата выплаты',
    'book_date'                   => 'Дата бронирования',
    'process_date'                => 'Дата обработки',
    'category'                    => 'Категория',
    'tags'                        => 'Метки',
    'deletePermanently'           => 'Удалить навсегда',
    'cancel'                      => 'Отмена',
    'targetdate'                  => 'Намеченная дата',
    'startdate'                   => 'Дата начала',
    'tag'                         => 'Тег',
    'under'                       => 'Под',
    'symbol'                      => 'Символ',
    'code'                        => 'Код',
    'iban'                        => 'IBAN',
    'account_number'              => 'Номер счёта',
    'creditCardNumber'            => 'Номер кредитной карты',
    'has_headers'                 => 'Заголовки',
    'date_format'                 => 'Формат даты',
    'specifix'                    => 'Исправления, специфичные для банка или файла',
    'attachments[]'               => 'Вложения',
    'store_new_withdrawal'        => 'Сохранить новый расход',
    'store_new_deposit'           => 'Сохранить новый доход',
    'store_new_transfer'          => 'Сохранить новый перевод',
    'add_new_withdrawal'          => 'Добавить новый расход',
    'add_new_deposit'             => 'Добавить новый доход',
    'add_new_transfer'            => 'Добавить новый перевод',
    'title'                       => 'Заголовок',
    'notes'                       => 'Заметки',
    'filename'                    => 'Имя файла',
    'mime'                        => 'Тип Mime',
    'size'                        => 'Размер',
    'trigger'                     => 'Триггер',
    'stop_processing'             => 'Остановить обработку',
    'start_date'                  => 'Начало диапазона',
    'end_date'                    => 'Конец диапазона',
    'include_attachments'         => 'Включить загруженные вложения',
    'include_old_uploads'         => 'Включить импортированные данные',
    'delete_account'              => 'Удалить счёт ":name"',
    'delete_bill'                 => 'Удаление счёта к оплате ":name"',
    'delete_budget'               => 'Удалить бюджет ":name"',
    'delete_category'             => 'Удалить категорию ":name"',
    'delete_currency'             => 'Удалить валюту ":name"',
    'delete_journal'              => 'Удалить транзакцию с описанием ":description"',
    'delete_attachment'           => 'Удалить вложение ":name"',
    'delete_rule'                 => 'Удалить правило ":title"',
    'delete_rule_group'           => 'Удалить группу правил ":title"',
    'delete_link_type'            => 'Удалить тип ссылки ":name"',
    'delete_user'                 => 'Удалить пользователя ":email"',
    'delete_recurring'            => 'Удалить повторяющуюся транзакцию ":title"',
    'user_areYouSure'             => 'Если вы удалите пользователя ":email", все данные будут удалены. Это действие нельзя будет отменить. Если вы удалите себя, вы потеряете доступ к этому экземпляру Firefly III.',
    'attachment_areYouSure'       => 'Вы действительно хотите удалить вложение с именем ":name"?',
    'account_areYouSure'          => 'Вы действительно хотите удалить счёт с именем ":name"?',
    'bill_areYouSure'             => 'Вы действительно хотите удалить счёт на оплату с именем ":name"?',
    'rule_areYouSure'             => 'Вы действительно хотите удалить правило с названием ":title"?',
    'ruleGroup_areYouSure'        => 'Вы действительно хотите удалить группу правил с названием ":title"?',
    'budget_areYouSure'           => 'Вы действительно хотите удалить бюджет с именем ":name"?',
    'category_areYouSure'         => 'Вы действительно хотите удалить категорию с именем ":name"?',
    'recurring_areYouSure'        => 'Вы действительно хотите удалить повторяющуюся транзакцию с названием ":title"?',
    'currency_areYouSure'         => 'Вы уверены, что хотите удалить валюту ":name"?',
    'piggyBank_areYouSure'        => 'Вы уверены, что хотите удалить копилку с именем ":name"?',
    'journal_areYouSure'          => 'Вы действительно хотите удалить транзакцию с описанием ":description"?',
    'mass_journal_are_you_sure'   => 'Вы действительно хотите удалить эти транзакции?',
    'tag_areYouSure'              => 'Вы действительно хотите удалить метку ":tag"?',
    'journal_link_areYouSure'     => 'Вы действительно хотите удалить связь между <a href=":source_link">:source</a> и <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Вы уверены, что хотите удалить тип ссылки ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => 'Удаление информации из Firefly III является постоянным и не может быть отменено.',
    'mass_make_selection'         => 'Вы все же можете предотвратить удаление элементов, сняв флажок.',
    'delete_all_permanently'      => 'Удалить выбранное навсегда',
    'update_all_journals'         => 'Обновить эти транзакции',
    'also_delete_transactions'    => 'Будет удалена только транзакция, связанная с этим счётом.|Будут удалены все :count транзакций, связанные с этим счётом.',
    'also_delete_connections'     => 'Единственная транзакция, связанная с данным типом ссылки, потеряет это соединение. |Все :count транзакций, связанные с данным типом ссылки, потеряют свои соединения.',
    'also_delete_rules'           => 'Единственное правило, связанное с данной группой правил, будет удалено. |Все :count правила, связанные с данной группой правил, будут удалены.',
    'also_delete_piggyBanks'      => 'Единственная копилка, связанная с данным счётом, будет удалена.|Все :count копилки, связанные с данным счётом, будут удалены.',
    'bill_keep_transactions'      => 'Единственная транзакция, связанная с данным счётом, не будет удалена. |Все :count транзакции, связанные с данным счётом, будут сохранены.',
    'budget_keep_transactions'    => 'Единственная транзакция, связанная с данным бюджетом, не будет удалена.|Все :count транзакции, связанные с этим бюджетом, будут сохранены.',
    'category_keep_transactions'  => 'Единственная транзакция, связанная с данной категорией, не будет удалена.|Все :count транзакции, связанные с этой категорией, будут сохранены.',
    'recurring_keep_transactions' => 'Единственная транзакция, связанная с повторяющейся транзакцией, не будет удалена.|Все :count транзакции, связанные с этой категорией, будут сохранены.',
    'tag_keep_transactions'       => 'Только транзакция, связанная с этой меткой, будет удалена.|Все :count транзакций, связанные с этой меткой, будут сохранены.',
    'check_for_updates'           => 'Проверить обновления',

    'email'                 => 'Адрес электронной почты',
    'password'              => 'Пароль',
    'password_confirmation' => 'Пароль (ещё раз)',
    'blocked'               => 'Заблокирован?',
    'blocked_code'          => 'Причина блокировки',
    'login_name'            => 'Логин',

    // import
    'apply_rules'           => 'Применить правила',
    'artist'                => 'Исполнитель',
    'album'                 => 'Альбом',
    'song'                  => 'Композиция',


    // admin
    'domain'                => 'Домен',
    'single_user_mode'      => 'Отключить регистрацию пользователей',
    'is_demo_site'          => 'Это демо-сайт',

    // import
    'import_file'           => 'Файл импорта',
    'configuration_file'    => 'Файл конфигурации',
    'import_file_type'      => 'Тип файла для импорта',
    'csv_comma'             => 'Запятая (,)',
    'csv_semicolon'         => 'Точка с запятой (;)',
    'csv_tab'               => 'Табулятор (невидимый)',
    'csv_delimiter'         => 'Разделитель полей CSV',
    'csv_import_account'    => 'Профиль для импорта по умолчанию',
    'csv_config'            => 'Параметры импорта CSV',
    'client_id'             => 'ID клиента',
    'service_secret'        => 'Service secret',
    'app_secret'            => 'App secret',
    'app_id'                => 'ID приложения',
    'secret'                => 'Секретный ключ',
    'public_key'            => 'Открытый ключ',
    'country_code'          => 'Код страны',
    'provider_code'         => 'Банк или поставщик данных',
    'fints_url'             => 'FinTS API URL',

    'fints_bank_code'       => 'Код банка',
    'fints_username'        => 'Имя пользователя',
    'fints_password'        => 'PIN / Пароль',
    'fints_account'         => 'Счёт FinTS',
    'local_account'         => 'Счёт Firefly III',
    'from_date'             => 'От даты',
    'to_date'               => 'До даты',


    'due_date'                => 'Срок',
    'payment_date'            => 'Дата платежа',
    'invoice_date'            => 'Дата выставления счёта',
    'internal_reference'      => 'Внутренняя ссылка',
    'inward'                  => 'Внутреннее описание',
    'outward'                 => 'Внешнее описание',
    'rule_group_id'           => 'Группа правил',
    'transaction_description' => 'Описание транзакции',
    'first_date'              => 'Первая дата',
    'transaction_type'        => 'Тип транзакции',
    'repeat_until'            => 'Повторять до тех пор, пока',
    'recurring_description'   => 'Описание повторяющейся транзакции',
    'repetition_type'         => 'Тип повторения',
    'foreign_currency_id'     => 'Иностранная валюта',
    'repetition_end'          => 'Заканчивать повторение',
    'repetitions'             => 'Повторения',
    'calendar'                => 'Календарь',
    'weekend'                 => 'Выходные',
    'client_secret'           => 'Закрытый ключ клиента',

    'withdrawal_destination_id' => 'Счёт назначения',
    'deposit_source_id'         => 'Исходный счёт',
    'expected_on'               => 'Ожидаем',
    'paid'                      => 'Оплачено',

];
