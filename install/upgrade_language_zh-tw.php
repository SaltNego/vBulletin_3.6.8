<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 3.6.8 - Licence Number VB1234567890
|| # ---------------------------------------------------------------- # ||
|| # Copyright ?000-2007 Jelsoft Enterprises Ltd. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/

error_reporting(E_ALL & ~E_NOTICE);

// moved from upgradecore to here
$stylevar = array(
	'textdirection' => 'ltr',
	'left' => 'left',
	'right' => 'right',
	'languagecode' => 'zh_TW',
	'charset' => 'UTF-8'
);

$authenticate_phrases['upgrade_title'] = '簡體中文版升級系統';
$authenticate_phrases['enter_system'] = '進入升級系統';
$authenticate_phrases['enter_cust_num'] = '請匯入您的用戶號';
$authenticate_phrases['customer_number'] = '用戶號';
$authenticate_phrases['cust_num_explanation'] = '這是您登入 vBulletin.com 會員區使用的用戶號';
$authenticate_phrases['cust_num_success'] = '用戶號驗證成功。';
$authenticate_phrases['redirecting'] = '正在重定導……';

#####################################
# upgradecore phrases
#####################################
$upgradecore_phrases['vb3_upgrade_system'] = 'vBulletin 3.6 中文版升級系統';
$upgradecore_phrases['please_login'] = '請登入:';
$upgradecore_phrases['username'] = '用户名';
$upgradecore_phrases['password'] = '密碼';
$upgradecore_phrases['login'] = ' 登入 ';
$upgradecore_phrases['php_version_too_old'] = 'vBulletin 3.6 需要 PHP 版本 4.3.3 或更高版本。您的 PHP 版本是 ' . PHP_VERSION . '，請聯繫主機商升級。';
$upgradecore_phrases['mysql_version_too_old'] = 'vBulletin 3.6 需要 MySQL 版本 4.0.16 或更高版本。您的 MySQL 版本是 %1$s，請聯繫主機商升級。';
$upgradecore_phrases['ensure_config_exists'] = '請確認您已經建立了 vB3 的新目録架構';
$upgradecore_phrases['mysql_strict_mode'] = 'MySQL 正執行在 Strict 型態。您可以繼續，但是 vBulletin 的某些功能會不正常。<strong>强烈建議</strong>您在 includes/config.php 檔案中將 <code>$config[\'Database\'][\'force_sql_mode\']</code> 設定為 <code>true</code>!';
$upgradecore_phrases['step_x_of_y'] = ' (步驟 %1$d ，共 %2$d 步)';
$upgradecore_phrases['unknown'] = '未知';
$upgradecore_phrases['file_not_found'] = '檔案未找到!';
$upgradecore_phrases['xml_file_versions'] = 'XML 檔案版本:';
$upgradecore_phrases['may_take_some_time'] = '(請注意一些步驟會花去較長時間，請耐心等待)';
$upgradecore_phrases['update_v_number'] = '正在更新版本號到 ' . VERSION . '… ';
$upgradecore_phrases['done'] = '完成';
$upgradecore_phrases['step_title'] = '步驟 %1$d) %2$s';
$upgradecore_phrases['batch_complete'] = '批處理完成！如果您没有被自動重定導，請點撃右邊的按鈕。';
$upgradecore_phrases['next_batch'] = ' 下一批';
$upgradecore_phrases['next_step'] = '下一步 (%1$d/%2$d)';
$upgradecore_phrases['click_button_to_proceed'] = '點撃右邊的按鈕繼續。';
$upgradecore_phrases['page_x_of_y'] = '第 %1$d 頁，共 %2$d 頁';
$upgradecore_phrases['semicolons_file_intro'] = "下面的用户名包含分號( ; )\r\n*必須*在控制面板中修改:";
$upgradecore_phrases['dump_data_to_sql'] = '導出資料到 SQL 檔案';
$upgradecore_phrases['choose_table_to_dump'] = '選取要復本的資料表';
$upgradecore_phrases['dump_tables'] = '復本資料表';
$upgradecore_phrases['dump_data_to_csv'] = '導出資料到 CSV 檔案';
$upgradecore_phrases['backup_individual_table'] = '復本<b>單個資料表</b>';
$upgradecore_phrases['field_seperator'] = '欄位分隔符';
$upgradecore_phrases['quote_character'] = '引號字元';
$upgradecore_phrases['show_column_names'] = '察看列名';
$upgradecore_phrases['dump_table'] = '復本資料表';
$upgradecore_phrases['vb_db_dump_completed'] = 'vBulletin 資料程式庫復本完成';
$upgradecore_phrases['dump_all_tables'] = '* 復本所有資料表 *';
$upgradecore_phrases['dump_database_desc'] = '<p class="smallfont">在這裡，您可以復本您的 vBulletin 資料程式庫。</p>
		<p class="smallfont">請注意如果您有一個特彆大的資料程式庫，
		此程式<i>可能</i>無法將它完全復本下來。</p>
		<p class="smallfont">如果您想要一個安全的復本，請通過 Telnet 或 SSH 登入到您的伺服器并使用 <i>mysqldump</i> 指令。
		更多資訊，請參照
		<a href="http://www.vbulletin.com/manual/html/manual_database_backup" target="_blank">這裡</a>。</p>';
$upgradecore_phrases['backup_after_upgrade'] = '<p class="smallfont">在執行升級前必須進行復本，如果升級完成請使用管理面板。</p>
		<p class="smallfont">更安全的復本方式是，通過 Telnet 或 SSH 登入到您的伺服器并在指令行使用 <i>mysqldump</i> 指令。
		要了解更多資訊，請<a href="http://www.vbulletin.com/manual/html/manual_database_backup" target="_blank">閲讀這裡</a>。</p>';
$upgradecode_phrases['vb_database_backup_system'] = 'vBulletin 資料程式庫復本系統';
$upgradecode_phrases['eaccelerator_too_old'] = 'eAccelerator for PHP 必須升級到 0.9.3 或更高版本。請瀏覧<a href="http://www.vbulletin.com/forum/showthread.php?p=979044#post979044">這個帖子</a>以了解更多資訊。';
$upgradecore_phrases['apc_too_old'] = '您的伺服器正在執行 <a href="http://pecl.p' . 'hp.net/package/APC/">Alternative PHP Cache</a> (APC) 的一個版本，而這個版本不相容 vBulletin。請升級到 APC 3.0.0 或更高版本。';
$upgradecode_phrases['mmcache_not_supported'] = 'Turck MMCache 已經被 eAcclerator 取代，無法正確支援 vBulletin。請瀏覧<a href="http://www.vbulletin.com/forum/showthread.php?p=979044#post979044">這個帖子</a>以了解更多資訊。';
$upgradecore_phrases['altering_x_table'] = '正在修改 %1$s 資料表 (第 %2$d 個，共計 %3$d 個)';

// this should contain only characters which will show on the file system
$upgradecore_phrases['illegal_user_names'] = 'Illegal User Names.txt';

$phrasetype['global'] = '整體 (GLOBAL)';
$phrasetype['cpglobal'] = '控制面板(整體) (Control Panel Global)';
$phrasetype['cppermission'] = '權限 (Permissions)';
$phrasetype['forum'] = '討論區相關 (Forum-Related)';
$phrasetype['calendar'] = '行事曆 (Calendar)';
$phrasetype['attachment_image'] = '附加檔案/影像 (Attachment/Image)';
$phrasetype['style'] = '風格工具 (Style Tools)';
$phrasetype['logging'] = '日誌工具 (Logging Tools)';
$phrasetype['cphome'] = '控制面板首頁 (Control Panel Home Pages)';
$phrasetype['promotion'] = '提升工具 (Promotion Tools)';
$phrasetype['user'] = '會員工具(整體) (User Tools (global))';
$phrasetype['help_faq'] = '論壇幫助管理 (FAQ / Help Management)';
$phrasetype['sql'] = 'SQL 工具 (SQL Tools)';
$phrasetype['subscription'] = '訂閲工具 (Subscription Tools)';
$phrasetype['language'] = '語系工具 (Language Tools)';
$phrasetype['bbcode'] = 'BB 代碼工具 (BB Code Tools)';
$phrasetype['stats'] = '統計工具 (Statistics Tools)';
$phrasetype['diagnostics'] = '診斷工具 (Diagnostic Tools)';
$phrasetype['maintenance'] = '維護工具 (Maintenance Tools)';
$phrasetype['profile'] = '會員資料項目工具 (Profile Field Tools)';
$phrasetype['cprofilefield'] = '自定訂用户資料欄目 (Custom Profile Fields)';
$phrasetype['thread'] = '主題工具 (Thread Tools)';
$phrasetype['timezone'] = '時區 (Timezones)';
$phrasetype['banning'] = '停權工具 (Banning Tools)';
$phrasetype['reputation'] = '聲望 (Reputation)';
$phrasetype['wol'] = '線上訊息 (Who\\\'s Online)';
$phrasetype['threadmanage'] = '主題管理 (Thread Management)';
$phrasetype['pm'] = '私人訊息 (Private Messaging)';
$phrasetype['cpuser'] = '控制面板會員管理 (Control Panel User Management)';
$phrasetype['register'] = '註冊 (Register)';
$phrasetype['accessmask'] = '存取權限 (Access Masks)';
$phrasetype['cron'] = '計劃任務 (Scheduled Tasks)';
$phrasetype['moderator'] = '版主 (Moderators)';
$phrasetype['cpoption'] = '控制面板選項 (Control Panel Options)';
$phrasetype['cprank'] = '控制面板會員等級 (Control Panel User Ranks)';
$phrasetype['cpusergroup'] = '控制面板會員群組 (Control Panel User Groups)';
$phrasetype['holiday'] = '節假日 (Holidays)';
$phrasetype['posting'] = '發文 (Posting)';
$phrasetype['poll'] = '投票 (Polls)';
$phrasetype['fronthelp'] = '前台論壇說明 (Frontend FAQ/Help)';
$phrasetype['search'] = '搜尋 (Searching)';
$phrasetype['showthread'] = '顯示主題 (Show Thread)';
$phrasetype['postbit'] = '文章區塊 (Postbit)';
$phrasetype['forumdisplay'] = '討論區顯示 (Forum Display)';
$phrasetype['messaging'] = '即時訊息 (Messaging)';
$phrasetype['inlinemod'] = '快速管理 (Inline Moderation)';
$phrasetype['plugins'] = '插件系統 (Plugin System)';
$phrasetype['front_end_error'] = '錯誤訊息 (Error Messages)';
$phrasetype['front_end_redirect'] = '前台轉址訊息 (Front-End Redirect Messages)';
$phrasetype['email_body'] = '郵件內容文字 (Email Body Text)';
$phrasetype['email_subj'] = '郵件主題文字 (Email Subject Text)';
$phrasetype['vbulletin_settings'] = '論壇設定 (vBulletin Settings)';
$phrasetype['cp_help'] = '控制面板說明内容 (Control Panel Help Text)';
$phrasetype['faq_title'] = '論壇說明標題 (FAQ Title)';
$phrasetype['faq_text'] = '論壇說明內容 (FAQ Text)';
$phrasetype['stop_message'] = '控制面板停止訊息 (Control Panel Stop Message)';
$phrasetype['reputationlevel'] = '聲望級彆 (Reputation Levels)';
$phrasetype['infraction'] = '會員警告 (User Infractions)';
$phrasetype['infractionlevel'] = '會員警告級彆 (User Infraction Levels)';

#####################################
# phrases for import systems
#####################################
$vbphrase['please_wait'] = '請等待';
$vbphrase['language'] = '語言';
$vbphrase['master_language'] = '主語言';
$vbphrase['admin_help'] = '管理員輔助說明';
$vbphrase['style'] = '風格';
$vbphrase['styles'] = '風格';
$vbphrase['settings'] = '設定';
$vbphrase['master_style'] = '主風格';
$vbphrase['templates'] = '樣板';
$vbphrase['css'] = 'CSS';
$vbphrase['stylevars'] = '風格變數';
$vbphrase['replacement_variables'] = '替代變數';
$vbphrase['controls'] = '控制';
$vbphrase['rebuild_style_information'] = '重建風格資訊';
$vbphrase['updating_style_information_for_each_style'] = '正在為每個風格更新風格資訊';
$vbphrase['updating_styles_with_no_parents'] = '正在更新無父風格的風格集';
$vbphrase['updated_x_styles'] = '已更新 %1$s 個風格';
$vbphrase['no_styles_needed_updating'] = '没有風格需要更新';
$vbphrase['yes'] = '是';
$vbphrase['no'] = '否';


#####################################
# global upgrade phrases
#####################################
$vbphrase['vbulletin_message'] = 'vBulletin 資訊';
$vbphrase['create_table'] = '正在建立 %1$s 資料表';
$vbphrase['remove_table'] = '正在移除 %1$s 資料表';
$vbphrase['alter_table'] = '正在修改 %1$s 資料表';
$vbphrase['update_table'] = '正在更新 %1$s 資料表';
$vbphrase['upgrade_start_message'] = "<p>此程式將把您的 vBulletin 升級到 <b>" . VERSION . "</b>。</p>\n<p>點撃“下一步”按鈕繼續。</p>";
$vbphrase['upgrade_wrong_version'] = "<p>您的 vBulletin 版本不符合此程式的執行條件 (需要在版本 <b>" . PREV_VERSION . "</b> 的基礎上執行)。</p>\n<p>請確認您執行的程式檔是否正確。</p>\n<p>如果您確信正確，<a href=\"" . THIS_SCRIPT . "?step=1\">請點撃這裡繼續執行</a>。</p>";
$vbphrase['file_not_found'] = '嗯？./install/%1$s 好像不存在！';
$vbphrase['importing_file'] = '正在導入 %1$s';
$vbphrase['ok'] = '完成';
$vbphrase['query_took'] = '查詢花去 %1$s 秒執行。';
$vbphrase['done'] = '完成';
$vbphrase['proceed'] = '繼續';
$vbphrase['reset'] = '重置';
$vbphrase['alter_table_step_x'] = '正在修改 %1$s 資料表 (步驟 %2$d ，共 %3$d 步)';
$vbphrase['vbulletin_copyright'] = 'vBulletin v' . VERSION . ', 版權所有 &copy;2000 - ' . date('Y') . ', Jelsoft Enterprises Ltd.';
$vbphrase['vbulletin_copyright_orig'] = $vbphrase['vbulletin_copyright'];
$vbphrase['processing_complete_proceed'] = '處理完成 - 繼續';
$vbphrase['xml_error_x_at_line_y'] = 'XML 錯誤: %1$s 在行 %2$s';
#####################################
# upgrade_300b3.php phrases
#####################################

$upgrade_phrases['upgrade_300b3.php']['steps'] = array(
	1  => '建立新的 vBulletin 3 資料表',
	2  => '升級樣板并進行修改查詢',
	3  => '升級行事曆',
	4  => '修改論壇資料表',
	5  => '升級論壇最新貼資訊',
	6  => '升級悄悄話資訊',
	7  => '升級用户',
	8  => '修改用户資料表 (第一部分)',
	9  => '修改用户資料表 (第二部分)',
	10 => '升級公告資料表',
	11 => '修改頭像/表情象徵式/資訊圖像資料表',
	12 => '修改附件資料表',
	13 => '升級附件 (第一部分)',
	14 => '升級附件 (第二部分)',
	15 => '升級編輯帖子記録',
	16 => '升級主題和帖子資料表',
	17 => '升級帖子以支援樹型檢視型態',
	18 => '修改其他資料表 (第一部分)',
	19 => '修改其他資料表 (第二部分)',
	20 => '升級 BB 程式碼系統',
	21 => '修改用户組資料表',
	22 => '升級論壇許可權',
	23 => '升級版主許可權',
	24 => '插入短語組',
	25 => '插入計劃工作',
	26 => '更新設定 (第一部分)',
	27 => '更新設定 (第二部分)',
	28 => '導入 vbulletin-language.xml',
	29 => '導入 vbulletin-adminhelp.xml',
	30 => '修改風格資料表并移除替代集資料表',
	31 => '修改樣板資料表',
	32 => '生成用户聲望',
	33 => '基于存在的 vB2 風格建立 vB3 風格',
	34 => '翻譯 vB2 替代變數為 vB3 風格/CSS/替代樣板變數',
	35 => '移動原有自定訂樣板到它們相應的風格中',
	36 => '移除多餘的様式資料表并清理翻譯過程',
	37 => '導入 vbulletin-style.xml',
	38 => '建立風格資訊',
	39 => '導入常見問題解答項目',
	40 => '檢查不合法的用户名',
	41 => '導入設定并清理',
	42 => '成功升級到vBulletin ' . VERSION . '！'
);
$upgrade_phrases['upgrade_300b3.php']['tableprefix_not_empty'] = '$config[\'Database\'][\'tableprefix\'] 不是空的！';
$upgrade_phrases['upgrade_300b3.php']['tableprefix_not_empty_fix'] = "在裝載程式中 config.php 的 \$config['Database']['tableprefix'] 引數必須為空。";
$upgrade_phrases['upgrade_300b3.php']['welcome'] = '<p style="font-size:14px;"><b>歡迎使用 vBulletin 3.6 中文版</b></p>
	<p>您即將升級您的論壇，因此它被自動關閉。</p>
	<p>點撃<b>[下一步]</b>按鈕將會在您的資料程式庫“<i>%1$s</i>”上開始升級程式。</p>
	<p>為了避免裝載時瀏覧器崩潰，我們强烈建議您關閉瀏覧器上的第三方工具軸，例如 <b>Google、MSN、Alexa</b> 工具軸等。</p>
	<p>建議您升級前復本您的整個資料程式庫。<br /><a href="upgrade_300b3.php?step=backup"><b>如果您要復本資料程式庫，請點撃這裡</b></a>。</p>';
$upgrade_phrases['upgrade_300b3.php']['safe_mode_warning'] = '您的 PHP 目前執行在安全型態。當執行在安全型態時我們無法設定程式逾時限制。因此，復本您的資料程式庫以便出錯後回復顯得更加重要。';
$upgrade_phrases['upgrade_300b3.php']['upgrade_already_run'] = '我們偵測到您曾經嘗試執行過此升級程式。您必須將現在的資料程式庫回復成 vB 2.2.x 的架構此升級程式才能繼續執行。';
$upgrade_phrases['upgrade_300b3.php']['moving_maxloggedin_datastore'] = '正在移動 maxloggedin 樣板到新資料表';
$upgrade_phrases['upgrade_300b3.php']['new_datastore_values'] = '正在建立新的 Datastore 值';
$upgrade_phrases['upgrade_300b3.php']['removing_special_templates'] = '正在從樣板資料表中移動特定的樣板';
$upgrade_phrases['upgrade_300b3.php']['removing_orphan_pms'] = '正在移除重複的悄悄話';
$upgrade_phrases['upgrade_300b3.php']['rename_calendar_events'] = '正在重命名 calendar_events 為 event';
$upgrade_phrases['upgrade_300b3.php']['altering_x_table'] = '正在修改 %1$s 資料表 (步驟 %2$d ，共 %3$d 步)';
$upgrade_phrases['upgrade_300b3.php']['droping_event_date'] = '從 event 資料表中移除事件日期';
$upgrade_phrases['upgrade_300b3.php']['changing_subject_to_title'] = '正在變更“subject”為“title”';
$upgrade_phrases['upgrade_300b3.php']['creating_pub_calendar'] = '正在建立公用行事曆';
$upgrade_phrases['upgrade_300b3.php']['creating_priv_calendar'] = '正在建立私有行事曆';
$upgrade_phrases['upgrade_300b3.php']['moving_pub_events'] = '正在移動公用事件到公用行事曆';
$upgrade_phrases['upgrade_300b3.php']['moving_priv_events'] = '正在移動私有事件到私有行事曆';
$upgrade_phrases['upgrade_300b3.php']['drop_public_field'] = '正在從事件表中移除 public 列';
$upgrade_phrases['upgrade_300b3.php']['convert_forum_options'] = '正在轉换論壇選項儲存方式';
$upgrade_phrases['upgrade_300b3.php']['dropping_option_fields'] = '正在移除選項 (步驟 %1$d ，共 %2$d 步)';
$upgrade_phrases['upgrade_300b3.php']['resetting_styleids'] = '正在重置 styleid 為預設論壇風格';
$upgrade_phrases['upgrade_300b3.php']['updating_forum_child_lists'] = '正在更新子論壇清單';
$upgrade_phrases['upgrade_300b3.php']['updating_counters_for_x'] = '正在更新論壇 <i>%1$s</i> 的計數器';
$upgrade_phrases['upgrade_300b3.php']['updating_lastpost_info_for_x'] = '正在更新論壇 <i>%1$s</i> 的最新帖資訊';
$upgrade_phrases['upgrade_300b3.php']['converting_priv_msg_x'] = '正在轉换悄悄話，%1$s';
$upgrade_phrases['upgrade_300b3.php']['insert_priv_msg_txt_from_x'] = '正在插入來自 <i>%1$s</i> 的悄悄話字檔';
$upgrade_phrases['upgrade_300b3.php']['insert_priv_msg_from_x_to_x'] = '正在插入從 <i>%1$s</i> 發往 <i>%2$s</i> 的悄悄話';
$upgrade_phrases['upgrade_300b3.php']['update_priv_msg_multiple_recip'] = '正在更新悄悄話字檔以察看多回執';
$upgrade_phrases['upgrade_300b3.php']['insert_priv_msg_receipts'] = '正在插入悄悄話回執';
$upgrade_phrases['upgrade_300b3.php']['dropping_vb2_pm_table'] = '正在移除 vBulletin 2 悄悄話資料表';
$upgrade_phrases['upgrade_300b3.php']['alter_user_table_for_vb3_pm'] = '正在修改用户資料表以支援 vB3 悄悄話系統';
$upgrade_phrases['upgrade_300b3.php']['alter_user_table_vb3_password'] = '正在修改用户資料表以支援 vB3 密碼系統';
$upgrade_phrases['upgrade_300b3.php']['priv_msg_import_complete'] = '悄悄話導入完成';
$upgrade_phrases['upgrade_300b3.php']['upgrading_users_x'] = '正在升級用户，%1$s';
$upgrade_phrases['upgrade_300b3.php']['found_x_users'] = '此批找到 %1$d 位用户…';
$upgrade_phrases['upgrade_300b3.php']['updating_priv_messages_for_x'] = '正在更新用户 <i>%1$s</i> 的悄悄話總數';
$upgrade_phrases['upgrade_300b3.php']['inserting_user_details_usertextfield'] = '正在插入用户細節到 <i>usertextfield</i> 資料表';
$upgrade_phrases['upgrade_300b3.php']['user_upgrades_complete'] = '用户升級完成';
$upgrade_phrases['upgrade_300b3.php']['updating_user_table_options'] = '正在更新 user 資料表選項';
$upgrade_phrases['upgrade_300b3.php']['drop_user_option_fields'] = '正在移除用户選項 (步驟 %1$d ，共 3 步)';
$upgrade_phrases['upgrade_300b3.php']['update_access_masks'] = '正在更新用户許可權';
$upgrade_phrases['upgrade_300b3.php']['convert_new_birthday_format'] = '正在轉换生日到新格式';
$upgrade_phrases['upgrade_300b3.php']['insert_admin_perms_admin_table'] = '正在插入管理員許可權到 administrator 資料表';
$upgrade_phrases['upgrade_300b3.php']['updating_announcements'] = '正在更新公告';
$upgrade_phrases['upgrade_300b3.php']['announcement_x'] = '公告: %1$s';
$upgrade_phrases['upgrade_300b3.php']['add_index_avatar_table'] = '正在添加索引到 avatar 資料表';
$upgrade_phrases['upgrade_300b3.php']['move_avatars_to_category'] = '正在移動頭像到“標准頭像”分類';
$upgrade_phrases['upgrade_300b3.php']['move_icons_to_category'] = '正在移動資訊圖像到“標准資訊圖像”分類';
$upgrade_phrases['upgrade_300b3.php']['move_smilies_to_category'] = '正在移動表情象徵式到“標准表情象徵式”分類';
$upgrade_phrases['upgrade_300b3.php']['update_avatars_per_page'] = '正在更新每頁的頭像';
$upgrade_phrases['upgrade_300b3.php']['updating_attachments'] = '正在更新附件…';
$upgrade_phrases['upgrade_300b3.php']['attachment_x'] = '附件: %1$d';
$upgrade_phrases['upgrade_300b3.php']['remove_orphan_attachments'] = '正在移除重複的附件';
$upgrade_phrases['upgrade_300b3.php']['populating_attachmenttype_table'] = '正在生成附件類別資料表';
$upgrade_phrases['upgrade_300b3.php']['updating_editpost_log'] = '正在升級編輯帖子記録，%1$s';
$upgrade_phrases['upgrade_300b3.php']['found_x_posts'] = '此批找到 %1$d 個帖子…';
$upgrade_phrases['upgrade_300b3.php']['post_x'] = '帖子: %1$d';
$upgrade_phrases['upgrade_300b3.php']['post_editlog_complete'] = '帖子編輯記録升級完成';
$upgrade_phrases['upgrade_300b3.php']['steps_may_take_several_minutes'] = '請注意，如果您資料程式庫中有大量帖子，此步驟會花去<b>幾分鐘</b>的時間。';
$upgrade_phrases['upgrade_300b3.php']['altering_post_table'] = '正在修改 post 資料表…';
$upgrade_phrases['upgrade_300b3.php']['altering_thread_table'] = '正在修改 thread 資料表…';
$upgrade_phrases['upgrade_300b3.php']['inserting_moderated_threads'] = '正在插入等待驗證的主題';
$upgrade_phrases['upgrade_300b3.php']['inserting_moderated_posts'] = '正在插入等待驗證的帖子';
$upgrade_phrases['upgrade_300b3.php']['update_posts_support_threaded'] = '正在更新帖子以支援樹型型態，%1$s';
$upgrade_phrases['upgrade_300b3.php']['found_x_threads'] = '此批找到 %1$d 個主題…';
$upgrade_phrases['upgrade_300b3.php']['threaded_update_complete'] = '主題檢視型態升級完成';
$upgrade_phrases['upgrade_300b3.php']['emptying_search'] = '正在清空搜索索引';
$upgrade_phrases['upgrade_300b3.php']['emptying_wordlist'] = '正在清空詞語清單';
$upgrade_phrases['upgrade_300b3.php']['remove_bbcodes_hardcoded_now'] = '正在移除内部定義的 BB 程式碼 ([B], [I], [U], [FONT={option}], [SIZE={option}], [COLOR={option}])';
$upgrade_phrases['upgrade_300b3.php']['inserting_quote_bbcode'] = '正在插入 [QUOTE=<i>用户名</i>]----[/QUOTE] BB 程式碼標簽';
$upgrade_phrases['upgrade_300b3.php']['select_banned_groups'] = '請選取所有包含“封禁用户”的用户組';
$upgrade_phrases['upgrade_300b3.php']['explain_banned_groups'] = "在 vBulletin 3 中，“被封禁用户”的用户組需要明確指定。<br /><br />\n如果您有任何“被封禁用户”的用户組，請在這裡選中那些組。";
$upgrade_phrases['upgrade_300b3.php']['user_groups'] = '用户組:';
$upgrade_phrases['upgrade_300b3.php']['update_some_usergroup_titles'] = '正在更新一些用户組的標題';
$upgrade_phrases['upgrade_300b3.php']['updating_usergroup_permissions'] = '正在更新用户組許可權';
$upgrade_phrases['upgrade_300b3.php']['usergroup_x'] = '用户組: <i>%1$s</i>';
$upgrade_phrases['upgrade_300b3.php']['updating_usergroups'] = '正在更新用户組';
$upgrade_phrases['upgrade_300b3.php']['updating_generic_options'] = '正在更新用户組常規選項';
$upgrade_phrases['upgrade_300b3.php']['updating_usergroup_calendar'] = '正在更新用户組行事曆許可權';
$upgrade_phrases['upgrade_300b3.php']['creating_priv_calendar_perms'] = '正在建立私人行事曆許可權';
$upgrade_phrases['upgrade_300b3.php']['removing_orhpan_forum_perms'] = '正在移除重複的論壇許可權';
$upgrade_phrases['upgrade_300b3.php']['backup_forum_perms'] = '正在復本論壇許可權';
$upgrade_phrases['upgrade_300b3.php']['drop_old_forumperms'] = '正在移除原論壇許可權資料表';
$upgrade_phrases['upgrade_300b3.php']['usergroup_x_forum_y'] = '用户組: <i>%1$s</i> 在論壇 <i>%2$s</i>';
$upgrade_phrases['upgrade_300b3.php']['reinsert_forum_perms'] = '正在以新格式重新插入論壇許可權';
$upgrade_phrases['upgrade_300b3.php']['remove_forum_perms_backup'] = '正在移除論壇許可權復本';
$upgrade_phrases['upgrade_300b3.php']['updating_moderator_perms'] = '正在更新版主許可權';
$upgrade_phrases['upgrade_300b3.php']['moderator_x_forum_y'] = '論壇 <u>%2$s</u> 的版主 <i>%1$s</i> ';
$upgrade_phrases['upgrade_300b3.php']['deleted_not_needed'] = '已移除 - 不再相關。';
$upgrade_phrases['upgrade_300b3.php']['insert_phrase_groups'] = '正在插入短語組';
$upgrade_phrases['upgrade_300b3.php']['inserting_task_x'] = '正在插入工作 %1$d';
$upgrade_phrases['upgrade_300b3.php']['scheduling_x'] = '正在安排 %1$s';
$upgrade_phrases['upgrade_300b3.php']['update_setting_group_x'] = '正在更新設定組: <i>%1$s</i>';
$upgrade_phrases['upgrade_300b3.php']['update_settings_within_x'] = '正在更新設定位于組: <i>%1$s</i>';
$upgrade_phrases['upgrade_300b3.php']['insert_phrases_nonstandard_groups'] = '正在為非標准設定組插入短語';
$upgrade_phrases['upgrade_300b3.php']['insert_phrases_nonstandard_settings'] = '正在插入非標准設定的短語';
$upgrade_phrases['upgrade_300b3.php']['saving_your_settings'] = '正在儲存您的設定為以後使用…';
$upgrade_phrases['upgrade_300b3.php']['building_lang_x'] = '正在建立語言: %1$s';
$upgrade_phrases['upgrade_300b3.php']['language_imported_sucessfully'] = '語言導入成功！';
$upgrade_phrases['upgrade_300b3.php']['ahelp_imported_sucessfully'] = '管理員輔助說明導入成功！';
$upgrade_phrases['upgrade_300b3.php']['renaming_style_table'] = '正在重命名 <b>style</b> 資料表';
$upgrade_phrases['upgrade_300b3.php']['removing_default_templates'] = '正在移除預設樣板 (它們將稍後被替代)';
$upgrade_phrases['upgrade_300b3.php']['updating_template_format'] = '正在更新樣板為新格式…';
$upgrade_phrases['upgrade_300b3.php']['updating_template_x'] = '正在更新樣板: <i>%1$s</i>';
$upgrade_phrases['upgrade_300b3.php']['populating_reputation_levels'] = '正在生成用户聲望級彆資料表';
$upgrade_phrases['upgrade_300b3.php']['set_reputation_to_neutral'] = '設定所有用户為中立的聲望';
$upgrade_phrases['upgrade_300b3.php']['bbtitle_vb3_style'] = '%1$s vBulletin 3 風格';
$upgrade_phrases['upgrade_300b3.php']['please_read_txt'] = '請仔細閲讀下面的字檔！';
$upgrade_phrases['upgrade_300b3.php']['replacement_upgrade_desc'] = '<p><b>注意:</b></p>
		<p>此系統將嘗試翻譯 vBulletin 2 的替代變數 (例如: <b>{firstaltcolor}</b>) 使其能够正常工作在
		vBulletin 3 中。這將把您預設的替代變數翻譯成 vBulletin 3 的風格變數和 CSS 設定。</p>
		<p>此程式現在將掃描您的 vBulletin 2 風格并建立一個相應的 vBulletin 3 新風格。</p>
		<p>下面列出的風格包含您 vBulletin 2 變數的風格設定，并且可以直接在 vBulletin 3 中使用。</p>';
$upgrade_phrases['upgrade_300b3.php']['create_vb3_style_x'] = "正在建立 vBulletin 3 風格: <b>'%1\$s'</b>";
$upgrade_phrases['upgrade_300b3.php']['template_upgrade_desc'] = '<p><b>注意:</b></p>
		<p>vBulletin 3 的樣板與 vBulletin 2 顯著不同。因此，任何自定訂樣板實質上在 vBulletin 3
		中是無用的。</p>
		<p>但是，當您想修改 vBulletin 3 的樣板時，您或許要參照以前在 vBulletin 2 中修改的樣板。
		所以，此系統將建立包含您自定訂樣板的新風格。</p>
		<p>這些風格將<i>無法</i>在 vBulletin 3 中使用，建立它們只是為了方便您修改和參照。</p>';
$upgrade_phrases['upgrade_300b3.php']['create_vb2_refernce_style'] = "正在為您的樣板集“<b>%1\$s</b>”建立一個參照風格";
$upgrade_phrases['upgrade_300b3.php']['x_old_custom_templates'] = '%1$s - 舊自定訂樣板';
$upgrade_phrases['upgrade_300b3.php']['insert_styles_vb3_table'] = '正在插入風格到 vB3 style 資料表';
$upgrade_phrases['upgrade_300b3.php']['updating_style_parent_list'] = '正在更新父風格清單';
$upgrade_phrases['upgrade_300b3.php']['updating_user_to_new_style'] = '正在更新用户使用此新風格';
$upgrade_phrases['upgrade_300b3.php']['settings_imported_sucessfully'] = '設定導入成功！';
$upgrade_phrases['upgrade_300b3.php']['translate_replacement_to_stylevars'] = '正在翻譯替代變數到風格變數';
$upgrade_phrases['upgrade_300b3.php']['no_value_to_translate'] = '此風格中没有變數需要翻譯';
$upgrade_phrases['upgrade_300b3.php']['translating_replacement_to_css'] = '正在翻譯替代變數到 CSS';
$upgrade_phrases['upgrade_300b3.php']['body_bg_color_x'] = 'body 背景色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['body_text_color_x'] = 'body 字檔色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['margin_width_x'] = 'margin 寬度: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['link_color_x'] = '鏈結色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['hover_link_color_x'] = 'hover 鏈結色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['page_bg_color_x'] = '頁面背景色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['page_text_color_x'] = '頁面字檔色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['table_border_color_x'] = '表格邊線色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['category_strip_bg_color'] = '分類條背景色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['category_strip_text_color'] = '分類條字檔色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['tbl_head_bg_color_x'] = '表格頭部背景色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['tbl_head_text_color_x'] = '表格頭部字檔色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['first_alt_color_x'] = '第一交换色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['second_alt_color_x'] = '第二交换色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['normal_font_size'] = '正常字型大小: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['normal_font_family'] = '正常字型名稱: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['normal_font_color'] = '正常字型色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['small_font_size'] = '小字型大小: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['small_font_family'] = '小字型名稱: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['small_font_color'] = '小字型色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['highlight_font_size'] = '高亮字型大小: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['highlight_font_family'] = '高亮字型名稱: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['highlight_font_color'] = '高亮字型色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['time_color_x'] = '時間色彩: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['no_replacements_to_translate'] = '此風格中没有變數需要翻譯成 CSS';
$upgrade_phrases['upgrade_300b3.php']['translating_remaining_replacements'] = '正在轉换剩餘的替代變數為 vB3 替代變數';
$upgrade_phrases['upgrade_300b3.php']['no_remaining_replacement_vars'] = '此風格中没有其他變數需要翻譯';
$upgrade_phrases['upgrade_300b3.php']['translate_vb2_style_settings'] = '正在翻譯 vB2 風格設定';
$upgrade_phrases['upgrade_300b3.php']['add_css_headinclude_to_extra'] = '正在從 headinclude 樣板添加 CSS 資料到此風格的“其餘”CSS 中';
$upgrade_phrases['upgrade_300b3.php']['found_css_data'] = '從 headinclude 樣板找到并成功添加 CSS 資料';
$upgrade_phrases['upgrade_300b3.php']['no_css_data_found'] = 'headinclude 樣板中没有找到 CSS 資料';
$upgrade_phrases['upgrade_300b3.php']['no_headinclude_found'] = '此風格中没有 headinclude 樣板';
$upgrade_phrases['upgrade_300b3.php']['insert_style_settings'] = '正在插入風格設定到資料程式庫';
$upgrade_phrases['upgrade_300b3.php']['moving_template_x_to_style_x'] = "正在移動樣板從樣板集“%1\$s”到參照風格“%2\$s”";
$upgrade_phrases['upgrade_300b3.php']['importing_faq_entries'] = '正在導入常見問題解答項目';
$upgrade_phrases['upgrade_300b3.php']['follow_users_contain_semicolons'] = '以下用户名包含分號，當您進入控制面板時<b>必須</b>修改:';
$upgrade_phrases['upgrade_300b3.php']['download_semicolon_users'] = '我們建議您使用<a href=\"upgrade_300b3.php?step=$step&amp;do=downloadillegalusers\"><b>這個鏈結</b></a>下載不合法的用户名清單為以後參照。';
$upgrade_phrases['upgrade_300b3.php']['no_illegal_users_found'] = '没有找到不合法的用户名';
$upgrade_phrases['upgrade_300b3.php']['remove_old_settings_storage'] = '正在移除舊風格選項';
$upgrade_phrases['upgrade_300b3.php']['salt_admin_x'] = '正在混淆管理員密碼: <b>%1$s</b>';
$upgrade_phrases['upgrade_300b3.php']['build_forum_and_usergroup_cache'] = '正在建立論壇和用户緩衝區… ';
$upgrade_phrases['upgrade_300b3.php']['upgrade_complete'] = "您已經成功升級到 vBulletin 3。<br />
<br />
	<font size=\"+1\"><b>您執行此論壇前還必須移除如下檔案:</b><br />
	install/install.php</font><br />
	<br />
	當您移除它後，點撃“繼續”按鈕繼續。<br />
	<br />
	請注意目前您的論壇為<b>關閉</b>狀態<br />
	<br />
	<b>當您傳回控制面板時需要重建搜索索引和統計。</b><br />
	<br />
	<b注意: 您的升級并没有完成。您目前執行的版本是 " . VERSION . ".
	點撃 “<i>繼續</i>”繼續升級到更新版本。</b>";

$upgrade_phrases['upgrade_300b3.php']['public'] = '公用';
$upgrade_phrases['upgrade_300b3.php']['public_calendar'] = '公用行事曆';
$upgrade_phrases['upgrade_300b3.php']['private'] = '私有';
$upgrade_phrases['upgrade_300b3.php']['private_calendar'] = '私人行事曆';
$upgrade_phrases['upgrade_300b3.php']['deleted_user'] = '已移除用户';
$upgrade_phrases['upgrade_300b3.php']['standard_avatars'] = '標准頭像';
$upgrade_phrases['upgrade_300b3.php']['standard_icons'] = '標准資訊圖像';
$upgrade_phrases['upgrade_300b3.php']['standard_smilies'] = '標准表情象徵式';
$upgrade_phrases['upgrade_300b3.php']['avatar_setting_title'] = '每頁察看頭像';
$upgrade_phrases['upgrade_300b3.php']['avatar_setting_desc'] = '在“編輯個人資料”的“編輯頭像”中每頁察看多少頭像?';
$upgrade_phrases['upgrade_300b3.php']['registered_user'] = '註冊用户';
// should be the values that vbulletin-language.xml contains
$upgrade_phrases['upgrade_300b3.php']['master_language_title'] = '簡體中文';
$upgrade_phrases['upgrade_300b3.php']['master_language_langcode'] = 'zh-CN';
$upgrade_phrases['upgrade_300b3.php']['master_language_charset'] = 'UTF-8';
$upgrade_phrases['upgrade_300b3.php']['master_language_decimalsep'] = '.';
$upgrade_phrases['upgrade_300b3.php']['master_language_thousandsep'] = ',';
$upgrade_phrases['upgrade_300b3.php']['master_language_just_created'] = '正在建立簡體中文語言';
$upgrade_phrases['upgrade_300b3.php']['settinggroups'] = array(
		'開啟或者關閉論壇' => 'onoff',
		'常規設定' => 'general',
		'聯繫細節' => 'contact',
		'發帖允許的程式碼 (vB程式碼/HTML程式碼/等)' => 'postingallow',
		'論壇首頁選項' => 'forumhome',
		'用户與註冊選項' => 'user',
		'會員清單選項' => 'memberlist',
		'帖子察看選項' => 'showthread',
		'論壇察看選項' => 'forumdisplay',
		'搜索選項' => 'search',
		'Email選項' => 'email',
		'日期/時間選項' => 'datetime',
		'屏蔽選項' => 'editpost',
		'IP位址記録選項' => 'ip',
		'灌水檢查選項' => 'floodcheck',
		'禁止選項' => 'banning',
		'悄悄話選項' => 'pm',
		'屏蔽選項' => 'censor',
		'HTTP頭與匯出' => 'http',
		'版本資訊' => 'version',
		'樣板' => 'templates',
		'上傳限制選項' => 'loadlimit',
		'投票' => 'poll',
		'頭像' => 'avatar',
		'附件' => 'attachment',
		'用户自定訂頭銜' => 'usertitle',
		'上傳選項' => 'upload',
		'會員在綫狀態' => 'online',
		'語言選項' => 'OLDlanguage',
		'拼字檢查' => 'OLDspellcheck',
		'行事曆' => 'OLDcalendar'
	);
$upgrade_phrases['upgrade_300b3.php']['vb2_default_style_title'] = '預設';
$upgrade_phrases['upgrade_300b3.php']['new_vb2_default_style_title'] = 'vBulletin 2 預設';
$upgrade_phrases['upgrade_300b3.php']['cron_birthday'] = '生日 Email 傳送';
$upgrade_phrases['upgrade_300b3.php']['cron_thread_views'] = '主題人氣更新';
$upgrade_phrases['upgrade_300b3.php']['cron_user_promo'] = '用户提升';
$upgrade_phrases['upgrade_300b3.php']['cron_daily_digest'] = '每日訂閲傳送';
$upgrade_phrases['upgrade_300b3.php']['cron_weekly_digest'] = '每周訂閲傳送';
$upgrade_phrases['upgrade_300b3.php']['cron_activation'] = '啟動提醒 Email 傳送';
$upgrade_phrases['upgrade_300b3.php']['cron_subscriptions'] = '即時訂閲傳送';
$upgrade_phrases['upgrade_300b3.php']['cron_hourly_cleanup'] = '每小時清理 #1';
$upgrade_phrases['upgrade_300b3.php']['cron_hourly_cleaup2'] = '每小時清理 #2';
$upgrade_phrases['upgrade_300b3.php']['cron_attachment_views'] = '附件人氣更新';
$upgrade_phrases['upgrade_300b3.php']['cron_unban_users'] = '回復臨時封禁用户';
$upgrade_phrases['upgrade_300b3.php']['cron_stats_log'] = '每日統計日誌';
$upgrade_phrases['upgrade_300b3.php']['reputation_-999999'] = '聲名狼藉';
$upgrade_phrases['upgrade_300b3.php']['reputation_-50'] = '只能期待他慢慢抹去身上的污點';
$upgrade_phrases['upgrade_300b3.php']['reputation_-10'] = '在過去有過一些不好的行為';
$upgrade_phrases['upgrade_300b3.php']['reputation_0'] = '普普通通';
$upgrade_phrases['upgrade_300b3.php']['reputation_10'] = '向着好的方向發展';
$upgrade_phrases['upgrade_300b3.php']['reputation_50'] = '是將要出名的人啊';
$upgrade_phrases['upgrade_300b3.php']['reputation_150'] = '身上有一圈迷人的光環哦';
$upgrade_phrases['upgrade_300b3.php']['reputation_250'] = '即將成功的新星';
$upgrade_phrases['upgrade_300b3.php']['reputation_350'] = '即將成功的新星';
$upgrade_phrases['upgrade_300b3.php']['reputation_450'] = '星途閃耀';
$upgrade_phrases['upgrade_300b3.php']['reputation_550'] = '已經是明星了';
$upgrade_phrases['upgrade_300b3.php']['reputation_650'] = '有着人盡皆知的貢獻和榮耀';
$upgrade_phrases['upgrade_300b3.php']['reputation_1000'] = '絶對是天王巨星';
$upgrade_phrases['upgrade_300b3.php']['reputation_1500'] = '有着超越歷史的輝煌成就';
$upgrade_phrases['upgrade_300b3.php']['reputation_2000'] = '有着超越歷史的輝煌成就';

#####################################
# upgrade_300b4.php phrases
#####################################

$upgrade_phrases['upgrade_300b4.php']['steps'] = array(
	1 => '修改資料程式庫架構',
	2 => '正在添加和移除資料',
	3 => '更新附件類別緩衝區',
	4 => '成功升級到 vBulletin ' . VERSION . '！'
);
$upgrade_phrases['upgrade_300b4.php']['default_avatar_category'] = '正在插入預設頭像分類';
$upgrade_phrases['upgrade_300b4.php']['insert_into_whosonline'] = "正在插入目前在綫蜘蛛緩衝區到 %1$sdatastore";
$upgrade_phrases['upgrade_300b4.php']['delete_redundant_cron'] = '正在移除多餘的計劃工作';
$upgrade_phrases['upgrade_300b4.php']['attachment_cache_rebuilt'] = '附件緩衝區已重建';
$upgrade_phrases['upgrade_300b4.php']['generic_avatars'] = '標准頭像';

#####################################
# upgrade_300b5.php phrases
#####################################

$upgrade_phrases['upgrade_300b5.php']['steps'] = array(
	1 => '修改資料程式庫架構',
	2 => '修改主題/帖子資料表',
	3 => '變更設定',
	4 => '成功升級到 vBulletin ' . VERSION . '！'
);
$upgrade_phrases['upgrade_300b5.php']['alter_post_title'] = '正在修改 " . TABLE_PREFIX ."post 資料表的 title 列為 VARCHAR(250)<br /><i>(這在較大的論壇中可能花去一些時間)';
$upgrade_phrases['upgrade_300b5.php']['alter_thread_title'] = '正在修改 " . TABLE_PREFIX ."thread 資料表的 title 列為 VARCHAR(250)<br /><i>(這在較大的論壇中可能花去一些時間)';
$upgrade_phrases['upgrade_300b5.php']['disabled_timeout_admin'] = '成功禁用“管理員登入逾時”。';
$upgrade_phrases['upgrade_300b5.php']['timeout_admin_not_changed'] = '“管理員登入逾時”設定没有變更。';
$upgrade_phrases['upgrade_300b5.php']['change_setting_value'] = '變更設定值？';
$upgrade_phrases['upgrade_300b5.php']['proceed'] = ' 繼續 ';
$upgrade_phrases['upgrade_300b5.php']['setting_info'] = '<b>禁用“管理員登入逾時”設定？</b> ' .
					'<dfn>“管理員登入逾時”增加了安全性，但是可能導致登入管理面板出現困難。<br />' .
					'如果您登入管理面板時曾經出現過問題，或是需要穿過一個代理伺服器登入管理面板' .
					'(例如美國在綫的代理伺服器)，您就需要禁用此設定。 (選取“是”)。</dfn>';
$upgrade_phrases['upgrade_300b5.php']['no_change_needed'] = '正在判斷是否需要修改設定值… 無需修改。';

#####################################
# upgrade_300b6.php phrases
#####################################

$upgrade_phrases['upgrade_300b6.php']['steps'] = array(
	1 => '正在為主題資料表添加索引',
	2 => '修改資料程式庫架構',
	3 => '變更訂閲資料',
	4 => '正在重命名一些樣板和表情象徵式以適應新的所見即所得編輯程式',
	5 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_300b6.php']['alter_thread_table'] = '正在修改 %1$sthread 資料表…<br /><i>(這在較大的論壇中可能花去一些時間)';
$upgrade_phrases['upgrade_300b6.php']['remove_avatar_cache'] = '正在移除頭像緩衝區';
$upgrade_phrases['upgrade_300b6.php']['update_userban'] = '正在修改臨時封禁用户自動解封計劃工作執行在每小時的第十五分鐘';
$upgrade_phrases['upgrade_300b6.php']['subscription_active'] = '正在啟動訂閲選項';
$upgrade_phrases['upgrade_300b6.php']['rename_old_template'] = '正在重命名 <i>%1$s</i> 樣板為 <i>%2$s</i>';
$upgrade_phrases['upgrade_300b6.php']['delete_vbcode_color'] = '正在移除 <i>vbcode_color_options</i> 樣板 (色彩現在在 clientscript/vbulletin_editor.js 檔案中定義)';
$upgrade_phrases['upgrade_300b6.php']['smilie_fixes'] = "正在把表情象徵式的名稱修改得更加漂亮 (并修復“embarra<b>s</b>ment”打字錯誤！)";

#####################################
# upgrade_300b7.php phrases
#####################################

$upgrade_phrases['upgrade_300b7.php']['steps'] = array(
	1 => '雜項升級 #1',
	2 => '正在修改用户資料表',
	3 => '正在導入關于 BB 程式碼修改的注意事項',
	4 => '正在修改 BB 程式碼系統',
	5 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_300b7.php']['redundant_stylevars'] = "正在從 " . TABLE_PREFIX . "template 資料表移除重複的風格變數";
$upgrade_phrases['upgrade_300b7.php']['renaming_some_templates'] = '正在重命名一些樣板';
$upgrade_phrases['upgrade_300b7.php']['ban_removal_fix'] = '正在修改臨時封禁用户自動解封計劃工作執行在每小時的第十五分鐘 (修正上一個升級程式的錯誤)';
$upgrade_phrases['upgrade_300b7.php']['promotion_lastrun_fix'] = '正在重置上次用户提升作業執行時間到9月8日以進入修復程式';
$upgrade_phrases['upgrade_300b7.php']['default_charset'] = '設定預設語言字符集為 <i>UTF-8</i>。';
$upgrade_phrases['upgrade_300b7.php']['comma_var_names'] = '處理短語變數名中的逗點';
$upgrade_phrases['upgrade_300b7.php']['delete_quote_email_bbcode'] = '正在移除 [quote] 和 [email] BB 程式碼標簽 - 它們在核心中定義';
$upgrade_phrases['upgrade_300b7.php']['bbcode_update'] = "<h3>重要注意事項…</h3>" .
	 "<p>下面的步驟是<b>移除</b> <i>[quote]</i>，<i>[quote=username]</i>，<i>[email]</i>，和 <i>[email=address]</i> BB 程式碼定義，因為它們現在是在 vBulletin 程式内部定義的，并且被一個樣板控制。</p>" .
	 "<p>如果您曾經對這些程式碼進行過自定訂，我們建議您現在存取<a href=\"../{$vbulletin->config[Misc][admincpdir]}/bbcode.php?$session[sessionurl]\" target=\"_blank\" title=\"在新視窗開啟 BB 程式碼管理者\">BB 程式碼管理者</a>并對您自定訂的 HTML 做記録。</p>" .
	 "<p>當本升級程式完成後，您便可以自定訂 <b>bbcode_quote</b> 樣板以達到您以前自定訂它們的效果。</p>" .
	 "<p>點撃“下一步”按鈕繼續升級程式。</p>";

#####################################
# upgrade_300g.php phrases
#####################################

$upgrade_phrases['upgrade_300g.php']['steps'] = array(
	1 => '雜項升級 #1',
	2 => '語言和短語改變',
	3 => '付費訂閲',
	4 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_300g.php']['remove_duplicate_templates'] = '正在移除風格内重複的樣板...';
$upgrade_phrases['upgrade_300g.php']['done'] = '完成!';
$upgrade_phrases['upgrade_300g.php']['rename_searchindex_postindex'] = "正在重命名 " . TABLE_PREFIX . "searchindex 資料表為 " . TABLE_PREFIX . "postindex";
$upgrade_phrases['upgrade_300g.php']['removing_redundant_index_phrase'] = "正在移除 " . TABLE_PREFIX . "phrase 資料表中重複的索引";
$upgrade_phrases['upgrade_300g.php']['holiday_to_phrasetype'] = "正在添加節假日到 " . TABLE_PREFIX . "phrasetype 資料表";
$upgrade_phrases['upgrade_300g.php']['moving_holiday_type'] = "正在移動存在的節假日到新的短語類別";
$upgrade_phrases['upgrade_300g.php']['adding_x_to_phrasetype'] = '正在添加 %1$s 到 ' . TABLE_PREFIX . 'phrasetype 資料表';
$upgrade_phrases['upgrade_300g.php']['update_invalid_birthdays'] = "正在更新無效的生日";
$upgrade_phrases['upgrade_300g.php']['step_already_run'] = '此步驟無需執行';
$upgrade_phrases['upgrade_300g.php']['updating_subscription_expiry_times'] = '更新訂閲過期時間完成';

#####################################
# upgrade_300rc1.php phrases
#####################################

$upgrade_phrases['upgrade_300rc1.php']['steps'] = array(
	1 => '雜項升級 #1',
	2 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_300rc1.php']['alter_reputation_negative'] = "正在修改聲望提升允許負值";
$upgrade_phrases['upgrade_300rc1.php']['phrase_varname_case_sens'] = "使短語變數名大小寫敏感";
$upgrade_phrases['upgrade_300rc1.php']['add_faq_entry'] = '正在添加常見問題解答項目';

#####################################
# upgrade_300rc2.php phrases
#####################################

$upgrade_phrases['upgrade_300rc2.php']['steps'] = array(
	1 => '成功升級到 vBulletin ' . VERSION . '！'
);

#####################################
# upgrade_300rc3.php phrases
#####################################

$upgrade_phrases['upgrade_300rc3.php']['steps'] = array(
	1 => '修復一些資料表錯誤',
	2 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_300rc3.php']['click_here_auto_redirect'] = '如果没有自動重定導，請點撃這裡。';
$upgrade_phrases['upgrade_300rc3.php']['not_latest_files'] = '您没有上傳所有最新的檔案！<br /><br /><b>請上傳最新的版本的 adminfunctions_profilefield.php 到 includes 目録，然後清除此頁。</b>';
$upgrade_phrases['upgrade_300rc3.php']['fix_sortorder'] = "正在修正 " . TABLE_PREFIX . "search 資料表中的 sortorder 欄位";
$upgrade_phrases['upgrade_300rc3.php']['fix_logdateoverride'] = "正在修正 " . TABLE_PREFIX . "language 資料表中的 logdateoverride 欄位";
$upgrade_phrases['upgrade_300rc3.php']['fix_filesize_customavatar'] = "正在為 " . TABLE_PREFIX . "customavatar 資料表添加 filesize 欄位";
$upgrade_phrases['upgrade_300rc3.php']['fix_filesize_customprofile'] = "正在為 " . TABLE_PREFIX . "customprofilepic 資料表添加 filesize 欄位";
$upgrade_phrases['upgrade_300rc3.php']['populate_avatar_filesize'] = '正在計算頭像檔案大小';
$upgrade_phrases['upgrade_300rc3.php']['populate_profile_filesize'] = '正在計算資料圖片檔案大小';

#####################################
# upgrade_300rc4.php phrases
#####################################

$upgrade_phrases['upgrade_300rc4.php']['steps'] = array(
	1 => '修復一些資料表錯誤',
	2 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_300rc4.php']['increase_storage_dateoverride'] = "正在為 " . TABLE_PREFIX . "language 資料表的 dateoverride 欄位增容";
$upgrade_phrases['upgrade_300rc4.php']['increase_storage_timeoverride'] = "正在為 " . TABLE_PREFIX . "language 資料表的 timeoverride 欄位增容";
$upgrade_phrases['upgrade_300rc4.php']['increase_storage_registereddateoverride'] = "正在為 " . TABLE_PREFIX . "language 資料表的 registereddateoverride 欄位增容";
$upgrade_phrases['upgrade_300rc4.php']['increase_storage_calformat1override'] = "正在為 " . TABLE_PREFIX . "language 資料表的 calformat1override 欄位增容";
$upgrade_phrases['upgrade_300rc4.php']['increase_storage_calformat2override'] = "正在為 " . TABLE_PREFIX . "language 資料表的 calformat2override 欄位增容";
$upgrade_phrases['upgrade_300rc4.php']['increase_storage_logdateoverride'] = "正在為 " . TABLE_PREFIX . "language 資料表的 logdateoverride 欄位增容";
$upgrade_phrases['upgrade_300rc4.php']['adding_calendar_mardi_gras'] = "正在修改資料表 " . TABLE_PREFIX . "calendar 以支援新的預定義節日: 懺悔星期二和聖體節。您需要在行事曆管理者中啓用這些節日";

#####################################
# upgrade_300.php phrases
#####################################

$upgrade_phrases['upgrade_300.php']['steps'] = array(
	1 => '修復一些資料表錯誤',
	2 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_300.php']['make_reputation_signed'] = '正在修改聲望為有象徵式整型';
$upgrade_phrases['upgrade_300.php']['add_birthday_search'] = '正在添加生日搜索欄位';
$upgrade_phrases['upgrade_300.php']['add_index_birthday_search'] = '正在添加生日搜索欄位索引';
$upgrade_phrases['upgrade_300.php']['populate_birhtday_search'] = '正在生成生日搜索欄位';

#####################################
# upgrade_301.php phrases
#####################################

$upgrade_phrases['upgrade_301.php']['steps'] = array(
	1 => '成功升級到 vBulletin ' . VERSION . '！'
);

#####################################
# upgrade_302.php phrases
#####################################

$upgrade_phrases['upgrade_302.php']['steps'] = array(
	1 => '資料表架構修改 1/4',
	2 => '資料表架構修改 2/4',
	3 => '資料表架構修改 3/4',
	4 => '資料表架構修改 4/4',
	5 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_302.php']['drop_pmpermissions'] = '正在移除多餘的欄位';
$upgrade_phrases['upgrade_302.php']['add_thumbnail_filesize'] = '正在為 attachment 資料表添加縮略圖大小欄位';
$upgrade_phrases['upgrade_302.php']['change_profilefield'] = '正在增加自定訂欄位的儲存空間';
$upgrade_phrases['upgrade_302.php']['update_genericpermissions'] = '正在添加許可權';
$upgrade_phrases['upgrade_302.php']['alter_poll_table'] = '正在添加 lastvote 欄位到 ' . TABLE_PREFIX . 'poll 資料表';
$upgrade_phrases['upgrade_302.php']['alter_user_table'] = '正在添加長 Email 支援到 ' . TABLE_PREFIX . 'user 資料表';
$upgrade_phrases['upgrade_302.php']['add_rss_faq'] = '正在添加 RSS 項目到 ' . TABLE_PREFIX . 'faq 資料表';
$upgrade_phrases['upgrade_302.php']['add_notes'] = '正在添加 notes 欄位到 ' . TABLE_PREFIX . 'administrator 資料表';
$upgrade_phrases['upgrade_302.php']['add_cpsession_table'] = '正在添加 cpsession 資料表';
$upgrade_phrases['upgrade_302.php']['fix_blank_charset'] = '正在添加預設的字符集';

#####################################
# upgrade_303.php phrases
#####################################

$upgrade_phrases['upgrade_303.php']['steps'] = array(
	1 => '資料表架構修改 1/1',
	2 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_303.php']['note'] = '<p>如果您啓用了縮略圖功能，并將附件儲存為檔案，并且在升級到 3.0.2 之後没有重建縮略圖，那麽請在升級完畢後請重建縮略圖。，否則您的縮略圖將無法正常工作。</p>';
$upgrade_phrases['upgrade_303.php']['rebuild_usergroupcache'] = '正在重建用户組緩衝區';

#####################################
# upgrade_303 - 309.php phrases
#####################################

$upgrade_phrases['upgrade_304.php']['steps'] =& $upgrade_phrases['upgrade_301.php']['steps'];
$upgrade_phrases['upgrade_305.php']['steps'] =& $upgrade_phrases['upgrade_301.php']['steps'];
$upgrade_phrases['upgrade_306.php']['steps'] =& $upgrade_phrases['upgrade_301.php']['steps'];

$upgrade_phrases['upgrade_307.php']['steps'] =& $upgrade_phrases['upgrade_301.php']['steps'];
$upgrade_phrases['upgrade_307.php']['update_calendarpermissions'] = '正在修改行事曆許可權';
$upgrade_phrases['upgrade_307.php']['import_birthdaydatecut_option'] = '正在導入舊生日日期選項';

$upgrade_phrases['upgrade_308.php']['steps'] =& $upgrade_phrases['upgrade_303.php']['steps'];
$upgrade_phrases['upgrade_309.php']['steps'] =& $upgrade_phrases['upgrade_301.php']['steps'];
$upgrade_phrases['upgrade_3010.php']['steps'] =& $upgrade_phrases['upgrade_301.php']['steps'];
$upgrade_phrases['upgrade_3011.php']['steps'] =& $upgrade_phrases['upgrade_301.php']['steps'];
$upgrade_phrases['upgrade_3012.php']['steps'] =& $upgrade_phrases['upgrade_301.php']['steps'];
$upgrade_phrases['upgrade_3013.php']['steps'] =& $upgrade_phrases['upgrade_301.php']['steps'];
$upgrade_phrases['upgrade_3014.php']['steps'] =& $upgrade_phrases['upgrade_301.php']['steps'];
$upgrade_phrases['upgrade_3015.php']['steps'] =& $upgrade_phrases['upgrade_301.php']['steps'];

#####################################
# upgrade_350b1.php phrases
#####################################

$upgrade_phrases['upgrade_350b1.php']['steps'] = array(
	1 => '資料表架構修改 1/6',
	2 => '資料表架構修改 2/6',
	3 => '資料表架構修改 3/6',
	4 => '資料表架構修改 4/6',
	5 => '資料表架構修改 5/6',
	5 => '資料表架構修改 6/6',
	7 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_350b1.php']['update_forumpermissions'] = '正在修改版面許可權';
$upgrade_phrases['upgrade_350b1.php']['support_multiple_products'] = '增加多産品的支援';
$upgrade_phrases['upgrade_350b1.php']['update_adminpermissions'] = '正在修改管理許可權';
$upgrade_phrases['upgrade_350b1.php']['cron_event_reminder'] = '事件提醒';

#####################################
# upgrade_350b2.php phrases
#####################################

$upgrade_phrases['upgrade_350b2.php']['steps'] = array(
	1 => '資料表架構修改 1/1',
	2 => '成功升級到 vBulletin ' . VERSION . '！'
);

#####################################
# upgrade_350b3.php phrases
#####################################

$upgrade_phrases['upgrade_350b3.php']['steps'] = array(
	1 => '正在轉换多種設定',
	2 => '正在升級支付系統',
	3 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_350b3.php']['translating_allowvbcodebuttons'] = '正在轉换 $vbulletin->options[\'allowvbcodebuttons\'] 和 $vbulletin->options[\'quickreply\'] 到新的 $vbulletin->options[\'editormodes\'] 整合設定';
$upgrade_phrases['upgrade_350b3.php']['translating_quickreply'] = '正在轉换 $vbulletin->options[\'quickreply\'] 和 $vbulletin->options[\'quickreplyclick\'] 到新的 $vbulletin->options[\'quickreply\'] 整合設定';
$upgrade_phrases['upgrade_350b3.php']['converting_phrases_x_of_y'] = '正在轉换短語 (第 %1$d 步 共 %2$d 步)';
$upgrade_phrases['upgrade_350b3.php']['paymentapi_data'] = '正在插入預設支付閘道 API 資料';
$upgrade_phrases['upgrade_350b1.php']['note'] = '<p><h3>您即將儲存頭像到檔案系統。vB 3.5.0 現在有個選項還可以儲存用户照片到檔案系統。在您升級完成後，進入管理面板并將所有頭像通過 <em>頭像->用户照片儲存類別</em> 移動到資料程式庫中。在這一過程完成後，傳回到相同的地方，將照片移動到檔案系統中。現在您的頭像和用户照片都將儲存在檔案系統中。如果您没有按照上述方式做，您的用户照片將無法察看。</h3></p>';

#####################################
# upgrade_350b4.php phrases
#####################################

$upgrade_phrases['upgrade_350b4.php']['steps'] = array(
	1 => '資料表架構修改 1/1',
	2 => '正在升級支付系統',
	3 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_350b4.php']['adding_payment_api_x_settings'] = '正在添加支付閘道 API %1$s 設定';
$upgrade_phrases['upgrade_350b4.php']['invert_moderate_permission'] = '正在反轉“總是驗證此用户組的帖子”許可權';

#####################################
# upgrade_350rc1.php phrases
#####################################

$upgrade_phrases['upgrade_350rc1.php']['steps'] = array(
	1 => '設定産品管理系統',
	2 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_350rc1.php']['control_panel_hook_support'] = '正在添加控制面板鈎子支援';

#####################################
# upgrade_350rc2.php phrases
#####################################

$upgrade_phrases['upgrade_350rc2.php']['steps'] = array(
	1 => '更新産品欄位',
	2 => '成功升級到 vBulletin ' . VERSION . '！'
);

#####################################
# upgrade_350rc3.php phrases
#####################################

$upgrade_phrases['upgrade_350rc3.php']['steps'] = array(
	1 => '資料表架構修改',
	2 => '主題資料表修改',
	3 => '帖子資料表修改',
	4 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_350rc3.php']['please_wait_message'] = '下一步可能會花去一些時間，請耐心等待。';
$upgrade_phrases['upgrade_350rc3.php']['updating_payment_api_x_settings'] = '正在更新支付閘道 API %1$s 設定';

#####################################
# upgrade_350.php phrases
#####################################

$upgrade_phrases['upgrade_350.php']['steps'] = array(
	1 => '資料表架構修改',
	2 => '主題資料表修改',
	3 => '成功升級到 vBulletin ' . VERSION . '！'
);

#####################################
# upgrade_351.php phrases
#####################################

$upgrade_phrases['upgrade_351.php']['steps'] = array(
	1 => '資料表架構修改',
	2 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_351.php']['delete_vb_product'] = '從産品表中移除 vBulletin。';

#####################################
# upgrade_352.php phrases
#####################################

$upgrade_phrases['upgrade_352.php']['steps'] =& $upgrade_phrases['upgrade_351.php']['steps'];

$upgrade_phrases['upgrade_352.php']['adding_skype_field'] = '正在為 user 資料表添加 Skype 欄位';

#####################################
# upgrade_353.php phrases
#####################################

$upgrade_phrases['upgrade_353.php']['steps'] =& $upgrade_phrases['upgrade_351.php']['steps'];

$upgrade_phrases['upgrade_353.php']['remove_352_xss_plugin'] = '如果裝載，則從 3.5.2 移除 XSS 修正插件';

#####################################
# upgrade_354.php phrases
#####################################

$upgrade_phrases['upgrade_354.php']['steps'] =& $upgrade_phrases['upgrade_351.php']['steps'];

$upgrade_phrases['upgrade_355.php']['steps'] =& $upgrade_phrases['upgrade_301.php']['steps'];

#####################################
# upgrade_360b1.php phrases
#####################################

$upgrade_phrases['upgrade_360b1.php']['steps'] = array(
	1 => '大資料表修改 (1/2)',
	2 => '大資料表修改 (2/2)',
	3 => '資料表架構修改',
	4 => '資料表架構修改',
	5 => '資料表架構修改',
	6 => '資料表架構修改',
	7 => '簽名許可權',
	8 => '違規',
	9 => '付費訂閲更新',
	10 => '超級版主許可權更新',
	11 => '成功升級到 vBulletin ' . VERSION . '！'
);

$upgrade_phrases['upgrade_360b1.php']['please_wait_message'] = '下一步可能需要一些時間，請耐心等待。如果頁面停止裝載，您可以清除頁面。';

$upgrade_phrases['upgrade_360b1.php']['updating_cron'] = '正在更新計劃工作';
$upgrade_phrases['upgrade_360b1.php']['updating_subscriptions'] = '正在更新付費訂閲';
$upgrade_phrases['upgrade_360b1.php']['updating_holidays'] = '正在更新節日';
$upgrade_phrases['upgrade_360b1.php']['updating_profilefields'] = '正在更新自定訂資料欄目';
$upgrade_phrases['upgrade_360b1.php']['updating_reputationlevels'] = '正在更新聲望級彆';
$upgrade_phrases['upgrade_360b1.php']['invert_banned_flag'] = "正在反轉“該用户組是一個‘封禁’用户組”選項";
$upgrade_phrases['upgrade_360b1.php']['install_canignorequota_permission'] = "正在設定“可以舍棄限額”許可權";
$upgrade_phrases['upgrade_360b1.php']['infractionlevel1_title'] = '垃圾廣告';
$upgrade_phrases['upgrade_360b1.php']['infractionlevel2_title'] = '侮辱其他會員';
$upgrade_phrases['upgrade_360b1.php']['infractionlevel3_title'] = '簽名違反規則';
$upgrade_phrases['upgrade_360b1.php']['infractionlevel4_title'] = '不適當的語言';
$upgrade_phrases['upgrade_360b1.php']['rssposter_title'] = 'RSS 發帖者';
$upgrade_phrases['upgrade_360b1.php']['infractions_title'] = '違規清理';
$upgrade_phrases['upgrade_360b1.php']['ccbill_title'] = 'CCBill 逆向檢查';

$upgrade_phrases['upgrade_360b1.php']['rename_post_parsed'] = "正在重命名 " . TABLE_PREFIX . "post_parsed 資料表為 " . TABLE_PREFIX . "postparsed";

$upgrade_phrases['upgrade_360b1.php']['updating_thread_redirects'] = '正在更新主題重定導';

$upgrade_phrases['upgrade_360b1.php']['super_moderator_x_updated'] = '超級版主“%1$s”已更新';

$upgrade_phrases['upgrade_360b1.php']['lastpostid_notice'] = '<strong>為了完成升級，主題資訊和版面資訊<em>必須</em>在管理面板的更新計數器部分重建。</strong>';

#####################################
# upgrade_360b2.php phrases
#####################################

$upgrade_phrases['upgrade_360b2.php']['steps'] = array(
	1 => '資料表架構修改',
	2 => '成功升級到 vBulletin ' . VERSION . '！'
);

#####################################
# upgrade_360b3.php phrases
#####################################

$upgrade_phrases['upgrade_360b3.php']['steps'] = array(
	1 => '成功升級到 vBulletin ' . VERSION . '！'
);


$upgrade_phrases['upgrade_360b4.php']['steps'] =& $upgrade_phrases['upgrade_360b2.php']['steps'];
$upgrade_phrases['upgrade_360rc1.php']['steps'] =& $upgrade_phrases['upgrade_360b2.php']['steps'];
$upgrade_phrases['upgrade_360rc2.php']['steps'] =& $upgrade_phrases['upgrade_360b2.php']['steps'];
$upgrade_phrases['upgrade_360rc3.php']['steps'] =& $upgrade_phrases['upgrade_360b2.php']['steps'];
$upgrade_phrases['upgrade_360.php']['steps'] =& $upgrade_phrases['upgrade_360b2.php']['steps'];
$upgrade_phrases['upgrade_361.php']['steps'] =& $upgrade_phrases['upgrade_360b2.php']['steps'];

$upgrade_phrases['upgrade_361.php']['rename_podcasturl'] = "正在重命名 " . TABLE_PREFIX . "podcasturl 資料表為 " . TABLE_PREFIX . "podcastitem";

$upgrade_phrases['upgrade_362.php']['steps'] =& $upgrade_phrases['upgrade_360b3.php']['steps'];
$upgrade_phrases['upgrade_363.php']['steps'] =& $upgrade_phrases['upgrade_360b3.php']['steps'];

$upgrade_phrases['upgrade_364.php']['steps'] =& $upgrade_phrases['upgrade_360b2.php']['steps'];
$upgrade_phrases['upgrade_365.php']['steps'] =& $upgrade_phrases['upgrade_360b3.php']['steps'];
$upgrade_phrases['upgrade_366.php']['steps'] =& $upgrade_phrases['upgrade_360b2.php']['steps'];
$upgrade_phrases['upgrade_367.php']['steps'] =& $upgrade_phrases['upgrade_360b3.php']['steps'];
$upgrade_phrases['upgrade_368.php']['steps'] =& $upgrade_phrases['upgrade_360b3.php']['steps'];

#####################################
# finalupgrade.php phrases
#####################################

$upgrade_phrases['finalupgrade.php']['steps'] = array(
	1 => '導入最新的選項',
	2 => '導入最新的管理員輔助說明',
	3 => '導入最新的語言',
	4 => '導入最新的風格',
	5 => '本步驟探測 word 表是否已經修改為正確的欄位',
	6 => '全部完成',
);

$upgrade_phrases['finalupgrade.php']['upgrade_start_message'] = "<p>本程式將升級您的模版、設定、語言和管理輔助說明到最新版本。</p>\n<p>點撃“下一步”按鈕繼續。";
$upgrade_phrases['finalupgrade.php']['upgrade_version_mismatch'] = '<p>您目前執行的 vBulletin (%1$s) 好像不是下載的版本 (%2$s)。</p>
		<p>這通常意味着您的升級没有成功。請確保您上傳了所有最新的檔案，然後<a href="upgrade.php">點撃這裡</a>重試。</p>
		<p>如果您確認要繼續本部分的升級工作，<a href="finalupgrade.php?step=1">請點撃這裡</a>。</p>';

/*======================================================================*\
|| ####################################################################
|| # Downloaded: XXXXXXXXXXXXXXXXXXX
|| # CVS: $RCSfile$ - $Revision: 17717 $
|| ####################################################################
\*======================================================================*/
?>