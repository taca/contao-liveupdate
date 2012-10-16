<?php

/**
 * Contao Live Update
 * 
 * Copyright (C) 2012 Leo Feyer
 * 
 * @package LiveUpdate
 * @link    http://www.inetrobots.com
 * @license Proprietary
 */

return array(
	'error'       => 'An error occurred',
	'admin'       => 'You have to be an administrator to run this script.',
	'smh'         => 'You need to activate the Safe Mode Hack to use the Live Update.',
	'enterId'     => 'Please enter your <a href="http://luid.inetrobots.com" target="_blank">Live Update ID</a>.',
	'target'      => 'Target version',
	'curver'      => 'You currently have Contao %s.',
	'installed'   => ' (installed)',
	'recommended' => ' (recommended)',
	'run'         => 'Start update',
	'emptyLuid'   => 'Please enter your Live Update ID',
	'noselect'    => 'Please select the target version',
	'uptodate'    => 'Your Contao installation is already up to date.',
	'outdated'    => 'The update tool is outdated',
	'download'    => 'You are using an old Live Update version (version %s). Please upgrade to version %s to update your Contao installation. Simply click "Continue" to start the update.',
	'connect'     => 'Could not connect to the Live Update server',
	'statcode'    => 'The request returned the status code %s',
	'continue'    => 'Continue',
	'beLogin'     => 'Back to the back end',
	'comment'     => 'Comment',
	'notes'       => 'Release notes',
	'toggle'      => 'Show legacy versions',
	'stable'      => 'Current version',
	'legacy'      => 'Outdated version',
	'noteTitle'   => 'Read the release announcement',
	'tooOld'      => 'You need at least Contao 2.5.0 to use the Live Update.',
	'moreInfo'    => 'More information',
	'invalidVers' => 'Invalid version number',
	'missingArgs' => 'The Live Update ID or target version is missing',
	'missingFile' => 'The file list is missing. Please start a new request.',
	'missingZip'  => 'The update archive is missing. Please start a new request.',
	'step'        => 'Step',
	'stats'       => 'Found %s missing and %s differing files.',
	'step_1'      => 'Checking the installation files',
	'step_2'      => 'Creating the database backup',
	'step_3'      => 'Downloading the update archive',
	'step_4'      => 'Extracting the update archive',
	'step_5'      => 'Restoring the database backup',
	'step_6'      => 'Rechecking the installation files',
	'step_7'      => 'Checking the custom template files',
	'downloaded'  => 'The archive was successfully downloaded.',
	'extracted'   => '%s files have been extracted.',
	'failed'      => 'Your installation could <b>not</b> be updated. Does Contao require the Safe Mode Hack on your server and did you configure it correctly?',
	'completed'   => 'The Live Update has been completed successfully. Your installation is up to date.',
	'dbBackup'    => 'Database backup',
	'backupOk'    => 'Commands: %s and %s',
	'noExec'      => 'The PHP functions <em>exec()</em> or <em>shell_exec()</em> are not available.',
	'noMysql'     => 'The commands <em>mysql</em> and/or <em>mysqldump</em> could not be found.',
	'backupNR'    => 'No backup required when downgrading',
	'backupNA'    => 'The system requirements for creating backups are not met.',
	'backupUD'    => 'The backup option has been deselected',
	'backupOK'    => 'The backup has been stored in %s.',
	'restoreNR'   => 'No restore required when upgrading',
	'restoreNA'   => 'No matching backup file found',
	'restoreOK'   => 'The database has been restored from %s',
	'noTemplates' => 'There are no custom templates.'
);
