<?php
	$lang = array(
	'upgrade' => array(
		'between' => 'Invalid input data. It can either be 0 for No and 1 for Yes.',
	),
	'upgrade_automatic' => 'Automatic Upgrade',
	'upgrade_available' => 'Available Updates',
	'upgrade_continue_btn_text' => 'Continue',
	'upgrade_db_btn_text' => 'Upgrade',
	'upgrade_db_text_1' => 'So, I\'m going to upgrade your database from version',
	'upgrade_db_text_2' => 'to the newest database version',
	'upgrade_db_text_3' => 'Click on the "Upgrade" button and just chilax as I perform the magic.',
	'upgrade_db_text_4' => 'Oh, also if you want me to backup your database, just tick the check button below and I will do that for you in a breeze.',
	'upgrade_db_text_5' => 'Backup database before upgrade? (<strong style="color:#FF0000;">Highly recommended</strong>)',
	'upgrade_db_title' => 'Ushahidi database upgrade',
	'upgrade_failed' => 'Upgrade failed at some point',
	'upgrade_manual' => 'Manual Upgrade',
	'upgrade_status' => 'Ushahidi upgrade status',
    'upgrade_text_1' => 'The instructions below details how to manually upgrade your Ushahidi deployment',
    'upgrade_text_2' => '<dl><dt><strong>Download</strong></dt>',
	'upgrade_text_3' => '<dd>- Download the most recent Ushahidi build from',
	'upgrade_text_4' => '<dt><strong>Backup</strong></dt><dd>- .htaccess, ./applications/config/config.php, ./applications/config/database.php and ./applications/config/auth.php files. </dd><dd>- Just in case something goes wrong, it\'s recommended you make an entire backup of your Ushahidi deployment.</dd><dt><strong>Copy files</strong></dt><dd>- Extract the downloaded zip file</dd><dd>- Depending on the operating system running the web server, use your preferred tool/mode (i.e: telnet, ftp, ssh) to login to the webserver and replace the contents of all the folders with the newest from the recent build.</dd><dt><strong>Upgrde database</strong></dt><dd>- First determine your database schema version by looking at the <strong>db_version</strong> value in the settings table or look at the Ushahidi upgrade information at the top of this page. </dd><dd>- If you are at version 25, you need to upgrade from 25-26, 26-27, 27-28 and so on up to the latest sql file in your <strong>/sql</strong> directory.</dd><dd>- With your database client, upgrade the database by executing the appropriate upgradex-x.sql file.</dd></dl>',
    'upgrade_tables' => '<strong>Step 3:</strong> Look inside the <strong>sql</strong> folder. Manuall run the upgrade<xx>-<xx>.sql file starting from the current db version of your install through to the final sql upgrade file.',
    'upgrade_text_5' => '<strong>Step 4:</strong> Click on the <strong>"Continue"</strong> button to upgrade the necessary tables.',
	'upgrade_text_6' => 'For automatic upgrade, click on the button below.',
    'upgrade_title_text_1' => 'You are currently using Ushahidi v',
    'upgrade_title_text_2' => 'with database version ',
	'upgrade_title_text_3' => 'running on',
    'upgrading' => 'Upgrading',
    'upgrade_ftp_text' => 'To Continue with the easy upgrade, the following information is required for the FTP server that your website is hosted on.',
    'upgrade_ftp_hostname' => 'FTP Hostname: <span>Example: "localhost"</span>',
    'upgrade_ftp_password' => 'FTP Password:',
    'upgrade_ftp_username' => 'FTP User Name:',
    'upgrade_status_info' => 'You have the latest version of Ushahidi.',
);
?>
