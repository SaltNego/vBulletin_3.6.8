<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 3.6.8 - Licence Number VB1234567890
|| # ---------------------------------------------------------------- # ||
|| # All PHP code in this file is 2000-2007 Jelsoft Enterprises Ltd. # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/

/*-------------------------------------------------------*\
| ***********   关于此文件中变量的注意事项   ************ |
+---------------------------------------------------------+
| 如果您尝试链接 MySQL 数据库时出现错误，请联系您的主机   |
| 商，因为我们无法告诉您数据库设置变量正确的值（每台主    |
| 机都会有所不同）。                                      |
\*-------------------------------------------------------*/

	//	****** 数据库类型 ******
	// 在这里设置 vBulletin 使用的数据库服务器类型。
	// 有效的选项是 mysql 和 mysqli。要添加从服务器支持，请添加 _slave 后缀。
	// 如果服务器的配置是 PHP 5 和 MySQL 4.1+，可以尝试使用 mysqli。
	// 如果您的论坛数据库是主从数据库架构，您只需在您喜爱的数据库类型后添加 
	// _slave 后缀。即 mysql_slave 或 mysqli_slave。
$config['Database']['dbtype'] = 'mysql';

	//	****** 数据库名 ******
	// 这是论坛程序所使用的数据库名。
	// 该数据库名的值请联系主机商。
$config['Database']['dbname'] = 'forum';

	//	****** 数据表前缀 ******
	// 数据库中 vBulletin 使用的数据表的前缀。
$config['Database']['tableprefix'] = '';

	//	****** 技术人员邮箱地址 ******
	// 如果发生数据库错误，错误信息将会发送到这个电子邮箱。
	// 留空则不发送错误信息到任何电子邮箱。
$config['Database']['technicalemail'] = 'dbmaster@example.com';

	//	****** 强制清空 SQL 模式 ******
	// MySQL 的新版本 (4.1+) 引入的一些行为与 vBulletin
	// 不兼容。将此处设置为“true”以禁用那些行为。
	// 请您在 vBulletin 推荐的服务器环境下修改此值。
$config['Database']['force_sql_mode'] = false;



	//	****** 主数据库服务器名与端口 ******
	// 这是数据库的主机名或 IP 地址及端口。
	// 如果您不确认这里填写什么，便不要管它。
$config['MasterServer']['servername'] = 'localhost';
$config['MasterServer']['port'] = 3306;

	//	****** 主数据库用户名和密码 ******
	// 这是连接和访问 MySQL 数据库时所需的用户名和密码。
	// 它们的值必须从您的主机商处获得。
$config['MasterServer']['username'] = 'root';
$config['MasterServer']['password'] = 'root';

	//	****** 主数据库持久连接 ******
	// 此选项设置连接 MySQL 数据库是否以持久方式。
	// 对于小型论坛，性能的差异可以忽略。
	// 如果您不了解这个选项是干什么的，那么请关闭它。
	// 0 = 关闭; 1 = 打开
$config['MasterServer']['usepconnect'] = 0;



	//	****** 从数据库服务器配置 ******
	// 如果您运行了多个数据库后台服务器，您可以在这里填写从服务器的信息。
	// 如果您不是 100% 确定在这里填写什么，那么请不要修改这里的默认配置。
$config['SlaveServer']['servername'] = '';
$config['SlaveServer']['port'] = 3306;
$config['SlaveServer']['username'] = '';
$config['SlaveServer']['password'] = '';
$config['SlaveServer']['usepconnect'] = 0;



	//	****** 管理面板和版主面板的路径 ******
	// 您可以修改管理面板和版主面板的目录名。
	// 这样可以增加论坛的安全性能。
	// 请注意如果您修改了这里的路径名，您必须同时手动修改
	// 服务器上相应目录的目录名。
$config['Misc']['admincpdir'] = 'admincp';
$config['Misc']['modcpdir'] = 'modcp';

	// 论坛程序所设置的 cookies 的前缀
	// 请不要填写过长的前缀，并只能填写英文字母和数字
$config['Misc']['cookieprefix'] = 'bb';

	//	******** 论坛目录的绝对路径 ******
	// 在某些系统中您可能需要输入论坛目录的绝对路径，vBulletin 才能正常工作。
	// 您可以忽略这个选项，除非 vBulletin 告诉您要填写它。
	// 在这里不要在末尾填写斜杠！
	// Unix 示例：
	//   $config['Misc']['forumpath'] = '/home/users/public_html/forums';
	// Win32 示例：
	//   $config['Misc']['forumpath'] = 'c:\program files\apache group\apache\htdocs\vb3';
$config['Misc']['forumpath'] = '';



	//	****** 拥有管理日志查看权限的用户 ******
	// 在这里指定的用户将可以查看管理面板的管理日志。
	// 在这里必须指定 *用户 ID* 而不是用户名。要获得用户 ID，
	// 请到管理面板浏览他们的个人资料。如果论坛是全新安装的，
	// 那么第一个创建的用户的 ID 是 1。使用英文半角逗号分隔每个用户 ID。
$config['SpecialUsers']['canviewadminlog'] = '1';

	//	****** 拥有管理日志删除权限的用户 ******
	// 在这里指定的用户将可以删除管理面板的管理日志。
	// 使用英文半角逗号分隔每个用户 ID。
$config['SpecialUsers']['canpruneadminlog'] = '1';

	//	****** 拥有数据库查询权限的用户 ******
	// 在这里指定的用户将可以对数据库进行 SQL 查询。
	// 填写格式同上。
	// 请注意运行数据库查询是一项非常强大的功能，可能导致安全问题。
	// 因此您在这里最好什么也别填写。
$config['SpecialUsers']['canrunqueries'] = '';

	//	****** 不可删除/修改的用户 ******
	// 在这里定义的用户不可在管理面板被其他任何用户修改或者删除。
	// 使用英文半角逗号分隔每个用户 ID。
$config['SpecialUsers']['undeletableusers'] = '';

	//	****** 超级管理员 ******
	// 在这里指定的用户可以访问“管理员权限”页面，
	// 并可以修改其他管理员的管理权限。
$config['SpecialUsers']['superadministrators'] = '1';

	// ****** DATASTORE 缓存配置 *****
	// 您在这里可以配置不同的方式来缓存 datastore 项目。
	// vB_Datastore_Filecache  - 使用缓存文件
// $config['Datastore']['class'] = 'vB_Datastore_Filecache';
	// vB_Datastore_Memcached - 使用一台 Memcache 服务器
	// 同时需要指定缓存服务器的主机名或 IP，以及服务器所监听的端口
/*
$config['Datastore']['class'] = 'vB_Datastore_Memcached';
$i = 0;
// First Server
$i++;
$config['Misc']['memcacheserver'][$i]		= '127.0.0.1';
$config['Misc']['memcacheport'][$i]			= 11211;
$config['Misc']['memcachepersistent'][$i]	= true;
$config['Misc']['memcacheweight'][$i]		= 1;
$config['Misc']['memcachetimeout'][$i]		= 1;
$config['Misc']['memcacheretry_interval'][$i] = 15;
*/
// ****** 如下选项仅在特别情况下需要修改 ******

	//	****** MySQLI 选项 *****
	// 当您使用 MySQL 4.1+ 时，应该使用 MySQLi 来连接数据库。
	// 如果您使用了 MySQL 4.1 或更高版本，并在安装配置的时候选中了 
	// Best Support For Multilingualism（即默认字符集为 utf8）
	// 那么请在这里填写 utf8。如果选中 Standard Character Set，
	// 那么请在这里填写 latin1
	// 如果您已经通过本配置文件最后一个选项（MySQLI 选项）
	// 并在 ini 文件中配置好了字符集，那么此选项不起作用。
	// *注意:* 如果您使用 MySQL 4.0.x 或是 3.x 版本，请设置为空 ('')。
$config['Mysqli']['charset'] = 'utf8';
	// 另外可选的，PHP 可以从“ini_file”设置的文件中读取并设置
	// 连接参数。请在这里使用文件的绝对路径。
	// 例如:
	// $config['Mysqli']['ini_file'] = 'c:\program files\MySQL\MySQL Server 4.1\my.ini';
$config['Mysqli']['ini_file'] = '';

// 图像处理选项
	// 对于分辨率超过下面设置的图像，vBulletin 将不会为其生成缩略图。如果您想缩小更大的图像，请修改这些设置。
$config['Misc']['maxwidth'] = 2592;
$config['Misc']['maxheight'] = 1944;

/*======================================================================*\
|| ####################################################################
|| # Downloaded: XXXXXXXXXXXXXXXXXXX
|| # CVS: $RCSfile$ - $Revision: 16258 $
|| ####################################################################
\*======================================================================*/
