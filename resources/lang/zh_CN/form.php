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
    'bank_name'                   => '银行名称',
    'bank_balance'                => '余额',
    'savings_balance'             => '储蓄余额',
    'credit_card_limit'           => '信用卡额度',
    'automatch'                   => '自动配对',
    'skip'                        => '略过',
    'enabled'                     => '已启用',
    'name'                        => '名称',
    'active'                      => '启用',
    'amount_min'                  => '最小金额',
    'amount_max'                  => '最大金额',
    'match'                       => '配对于',
    'strict'                      => '精确模式',
    'repeat_freq'                 => '重复',
    'update_channel'              => 'Update channel',
    'journal_currency_id'         => '货币',
    'currency_id'                 => '货币',
    'transaction_currency_id'     => '货币',
    'external_ip'                 => '您的服务器外部IP',
    'attachments'                 => '附加档案',
    'journal_amount'              => '金额',
    'journal_source_name'         => '收入帐户 (来源)',
    'keep_bill_id'                => '帐单',
    'journal_source_id'           => '资产帐户 (来源)',
    'BIC'                         => 'BIC',
    'verify_password'             => '验证密码安全性',
    'source_account'              => '来源帐户',
    'destination_account'         => '目标帐户',
    'journal_destination_id'      => '资产帐户 (目标)',
    'asset_destination_account'   => '目标帐户',
    'include_net_worth'           => '包括淨值',
    'asset_source_account'        => '来源帐户',
    'journal_description'         => '说明',
    'note'                        => '备注',
    'store_new_transaction'       => '储存新交易',
    'split_journal'               => '分割此交易',
    'split_journal_explanation'   => '分割这个交易为几个部分',
    'currency'                    => '货币',
    'account_id'                  => '资产帐户',
    'budget_id'                   => '预算',
    'opening_balance'             => 'Opening balance',
    'tagMode'                     => '标签模式',
    'tag_position'                => '标签位置',
    'virtual_balance'             => 'Virtual balance',
    'targetamount'                => '目标金额',
    'account_role'                => 'Account role',
    'opening_balance_date'        => 'Opening balance date',
    'cc_type'                     => 'Credit card payment plan',
    'cc_monthly_payment_date'     => 'Credit card monthly payment date',
    'piggy_bank_id'               => '小猪扑满',
    'returnHere'                  => '返回此处',
    'returnHereExplanation'       => '储存后，返回这里建立另一笔记录。',
    'returnHereUpdateExplanation' => '更新后，返回此处。',
    'description'                 => '描述',
    'expense_account'             => '支出帐户',
    'revenue_account'             => '收入帐户',
    'decimal_places'              => '小数位数',
    'exchange_rate_instruction'   => '外币',
    'source_amount'               => '金额 (来源)',
    'destination_amount'          => '金额 (目标)',
    'native_amount'               => '原生金额',
    'new_email_address'           => '新电子邮件地址',
    'verification'                => '验证',
    'api_key'                     => 'API 密钥',
    'remember_me'                 => '记住我',
    'liability_type_id'           => '负债类型',
    'interest'                    => '利率',
    'interest_period'             => '利率期',

    'source_account_asset'        => '来源帐户 (资产帐户)',
    'destination_account_expense' => '目标帐户 (支出帐户)',
    'destination_account_asset'   => '目标帐户 (资产帐户)',
    'source_account_revenue'      => '来源帐户 (收入帐户)',
    'type'                        => '类型',
    'convert_Withdrawal'          => '转换提款',
    'convert_Deposit'             => '转换存款',
    'convert_Transfer'            => '转换转帐',

    'amount'                      => '金额',
    'foreign_amount'              => '外币金额',
    'existing_attachments'        => '既有附加档案',
    'date'                        => '日期',
    'interest_date'               => '利率日期',
    'book_date'                   => '登记日期',
    'process_date'                => '处理日期',
    'category'                    => '分类',
    'tags'                        => '标签',
    'deletePermanently'           => '永久删除',
    'cancel'                      => '取消',
    'targetdate'                  => '目标日期',
    'startdate'                   => '开始日期',
    'tag'                         => '标签',
    'under'                       => '低于',
    'symbol'                      => '符号',
    'code'                        => '代码',
    'iban'                        => '国际银行帐户号码 (IBAN)',
    'account_number'              => 'Account number',
    'creditCardNumber'            => '信用卡卡号',
    'has_headers'                 => '标题',
    'date_format'                 => '日期格式',
    'specifix'                    => '特定的银行或档案修正',
    'attachments[]'               => '附加档案',
    'store_new_withdrawal'        => '储存新提款',
    'store_new_deposit'           => '储存新存款',
    'store_new_transfer'          => '储存新转帐',
    'add_new_withdrawal'          => '新增新提款',
    'add_new_deposit'             => '新增新存款',
    'add_new_transfer'            => '新增新转帐',
    'title'                       => '标题',
    'notes'                       => '备注',
    'filename'                    => '档案名称',
    'mime'                        => 'Mime 类型',
    'size'                        => '尺寸',
    'trigger'                     => '触发器',
    'stop_processing'             => '停止处理',
    'start_date'                  => '范围起点',
    'end_date'                    => '范围终点',
    'include_attachments'         => '包括上传的附件',
    'include_old_uploads'         => '包含导入的数据',
    'delete_account'              => '删除帐户 ":name"',
    'delete_bill'                 => '删除帐单 ":name"',
    'delete_budget'               => '删除预算 ":name"',
    'delete_category'             => '删除分类 ":name"',
    'delete_currency'             => '删除货币 ":name"',
    'delete_journal'              => '删除包含描述 ":description" 的交易',
    'delete_attachment'           => '删除附加档案 ":name"',
    'delete_rule'                 => '删除规则 ":title"',
    'delete_rule_group'           => '删除规则群组 ":title"',
    'delete_link_type'            => '删除连结类型 ":name"',
    'delete_user'                 => '删除使用者 ":email"',
    'delete_recurring'            => '删除定期交易 ":title"',
    'user_areYouSure'             => '如果您删除使用者 ":email"，该名使用者的任何资讯均会消失，无法复原。如果您删除自己，将无法进入此 Firefly III 版本。',
    'attachment_areYouSure'       => '你确定你想要删除附加档案 ":name"?',
    'account_areYouSure'          => '你确定你想要删除名为 ":name" 的帐户?',
    'bill_areYouSure'             => '你确定你想要删除名为 ":name" 的帐单?',
    'rule_areYouSure'             => '你确定你想要删除名为 ":title" 的规则?',
    'ruleGroup_areYouSure'        => '你确定你想要删除名为 ":title" 的规则群组?',
    'budget_areYouSure'           => '你确定你想要删除名为 ":name" 的预算?',
    'category_areYouSure'         => '你确定你想要删除名为 ":name" 的分类?',
    'recurring_areYouSure'        => '你确定你想要删除名为 ":title" 的定期交易?',
    'currency_areYouSure'         => '你确定你想要删除名为 ":name" 的货币?',
    'piggyBank_areYouSure'        => '你确定你想要删除名为 ":name" 的小猪扑满?',
    'journal_areYouSure'          => '你真的要删除这个描述为 ":description" 的交易吗？',
    'mass_journal_are_you_sure'   => '确定删除这些交易？',
    'tag_areYouSure'              => '你真的要要删除标签 ":tag" 吗？',
    'journal_link_areYouSure'     => '您确定您要删除 <a href=":source_link">:source</a> 与 <a href=":destination_link">:destination</a> 间的连结吗？',
    'linkType_areYouSure'         => '您确定您要删除连结类型 ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => '自 Firefly III 删除项目是永久且不可撤销的。',
    'mass_make_selection'         => '您还是可以取消核取方块的勾选，以避免项目被删除。',
    'delete_all_permanently'      => '永久删除已选项目',
    'update_all_journals'         => '更新这些交易',
    'also_delete_transactions'    => '与此帐户连接的唯一一笔交易也会被删除。|与此帐户连接的 :count 笔交易也会被删除。',
    'also_delete_connections'     => '与此连结类型连接的唯一一笔交易会遗失连接。|与此连结类型连接的 :count 笔交易会遗失连接。',
    'also_delete_rules'           => '与此规则群组连接的唯一一则规则也会被删除。|与此规则群组连接的 :count 则规则也会被删除。',
    'also_delete_piggyBanks'      => '与此帐户连接的唯一一个小猪扑满也会被删除。|与此帐户连接的 :count 个小猪扑满也会被删除。',
    'bill_keep_transactions'      => '与此帐单连接的唯一一笔交易不会被删除。|与此帐单连接的 :count 笔交易不会被删除。',
    'budget_keep_transactions'    => '与此预算连接的唯一一笔交易不会被删除。|与此预算连接的 :count 笔交易不会被删除。',
    'category_keep_transactions'  => '与此分类连接的唯一一笔交易不会被删除。|与此分类连接的 :count 笔交易不会被删除。',
    'recurring_keep_transactions' => '由此定期交易建立的唯一一笔交易不会被删除。|由此定期交易建立的 :count 笔交易不会被删除。',
    'tag_keep_transactions'       => '与此标签连接的唯一一笔交易不会被删除。|与此标签连接的 :count 笔交易不会被删除。',
    'check_for_updates'           => '检查更新',

    'email'                 => '电子邮件地址',
    'password'              => '密码',
    'password_confirmation' => '密码 (再输入一次)',
    'blocked'               => '被封锁了？',
    'blocked_code'          => '封锁的原因',
    'login_name'            => '登入',

    // import
    'apply_rules'           => '套用规则',
    'artist'                => '演出者',
    'album'                 => '专辑',
    'song'                  => '歌曲',


    // admin
    'domain'                => '网域',
    'single_user_mode'      => '关闭使用者注册',
    'is_demo_site'          => '这是演示网站',

    // import
    'import_file'           => '导入文件',
    'configuration_file'    => '设置档案',
    'import_file_type'      => '导入文件类型',
    'csv_comma'             => '逗号 (,)',
    'csv_semicolon'         => '分号 (;)',
    'csv_tab'               => 'TAB键 (不可见)',
    'csv_delimiter'         => 'CSV 栏位分隔符号',
    'csv_import_account'    => '预设导入帐户',
    'csv_config'            => 'CSV 导入配置',
    'client_id'             => '客户端 ID',
    'service_secret'        => '服务密钥',
    'app_secret'            => 'App Secret',
    'app_id'                => '应用 ID',
    'secret'                => '密钥',
    'public_key'            => '公共密钥',
    'country_code'          => '国家代码',
    'provider_code'         => '银行或资料提供者',
    'fints_url'             => 'FinTS API 链接',

    'fints_bank_code'       => '银行代码',
    'fints_username'        => '使用者名称',
    'fints_password'        => 'PIN/密码',
    'fints_account'         => 'FinTS 帐户',
    'local_account'         => 'Firefly III 帐户',
    'from_date'             => '开始自',
    'to_date'               => '日期至',


    'due_date'                => '到期日',
    'payment_date'            => '付款日期',
    'invoice_date'            => '发票日期',
    'internal_reference'      => '内部参考',
    'inward'                  => '向内描述',
    'outward'                 => '外向描述',
    'rule_group_id'           => '规则群组',
    'transaction_description' => '交易描述',
    'first_date'              => '初次日期',
    'transaction_type'        => '交易类型',
    'repeat_until'            => '重复直到',
    'recurring_description'   => '定期交易描述',
    'repetition_type'         => '重复类型',
    'foreign_currency_id'     => '外币',
    'repetition_end'          => '重复结束',
    'repetitions'             => '重复',
    'calendar'                => '日历',
    'weekend'                 => '周末',
    'client_secret'           => '客户端密钥',

    'withdrawal_destination_id' => 'Destination account',
    'deposit_source_id'         => 'Source account',
    'expected_on'               => 'Expected on',
    'paid'                      => 'Paid',

];
