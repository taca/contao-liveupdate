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
	'error'       => 'エラーが発生しました',
	'admin'       => 'このスクリプトを実行するには管理者でなければなりません。',
	'smh'         => 'ライブアップデートを使用するためにはセーフモード対処を有効にする必要があります。',
	'enterId'     => '使用する<a href="http://luid.inetrobots.com" target="_blank">ライブアップデートのID</a>を入力してください。',
	'target'      => '目的とするバージョン',
	'curver'      => '現在のContaoのバージョンは%sです。',
	'installed'   => ' (インストール済み)',
	'recommended' => ' (推奨)',
	'run'         => 'アップデートを開始',
	'emptyLuid'   => '使用するライブアップデートのIDを入力してください',
	'noselect'    => '目的とするバージョンを選択してください',
	'uptodate'    => 'インストールしているContaoは既に最新です。',
	'outdated'    => '更新ツールは古くなっています',
	'download'    => '古いバージョンのライブアップデート(バージョン%s)を使用しています。インストールしているContaoを更新するにはバージョン%sにアップグレードしてください。単に「続ける」をクリックするとアップデートを開始します。',
	'connect'     => 'ライブアップデートのサーバーに接続で来ませんでした',
	'statcode'    => 'リクエストに%sの状態コードが返りました。',
	'continue'    => '続ける',
	'beLogin'     => 'バックエンドに戻る',
	'comment'     => 'コメント',
	'notes'       => 'リリースノート',
	'toggle'      => '古いバージョンを表示',
	'stable'      => '現在のバージョン',
	'legacy'      => '古くなったバージョン',
	'noteTitle'   => 'リリースのアナウンスを読む',
	'tooOld'      => 'ライブアップデートを使用するには、少なくともContao 2.5.0が必要です。',
	'moreInfo'    => '詳しい情報',
	'invalidVers' => '正しくないバージョン番号',
	'missingArgs' => 'ライブアップデートのID、または目的とするバージョンがありません',
	'missingFile' => 'ファイルのリストがありません。新しいリクエストを開始してください。',
	'missingZip'  => '更新のアーカイブがありません。新しいリクエストを開始してください。',
	'step'        => 'ステップ',
	'protocol'    => 'Live Update protocol',
	'stats'       => '%s個の不足しているファイルと%s個の異なっているファイルを検出しました。',
	'step_1'      => 'インストールするファイルを検査中',
	'step_2'      => 'データベースのバックアップを作成中',
	'step_3'      => '更新のアーカイブをダウンロード中',
	'step_4'      => '更新のアーカイブを展開中',
	'step_5'      => 'データベースをバックアップから復元中',
	'step_6'      => 'インストールするファイルを再検査中',
	'step_7'      => 'カスタマイズしたテンプレートファイルを検査中',
	'step_7_txt'  => 'カスタマイズしたテンプレートと、その元のバージョンの違いを表示します。',
	'step_8'      => '無関係なファイル',
	'step_8_txt'  => 'Contaoのコア配布に属さないファイルを表示します。',
	'noUnrelated' => '無関係なファイルはありません。',
	'downloaded'  => '正しくアーカイブをダウンロードしました。',
	'extracted'   => '%s個のファイルを展開しました。',
	'failed'      => 'インストールしたContaoをアップデート<b>できません</b>でした。インストールしているサーバーではContaoはセーフモード対処が必要ですが、正しく構成しましたか?',
	'completed'   => '正しくライブアップデートを完了しました。インストールしたContaoは最新です。',
	'dbBackup'    => 'データベースのバックアップ',
	'backupOk'    => 'コマンド: %s と %s',
	'noExec'      => 'PHPの関数<em>exec()</em>または<em>shell_exec()</em>を使用できません。',
	'noMysql'     => 'コマンドの<em>mysql</em>と<em>mysqldump</em>の両方、またはいずれかが見つかりません。',
	'backupVM'    => 'アップデートの元と先のバージョンは同一です、このためバックアップの必要はありません。',
	'backupNA'    => 'バックアップを作成するのに必要なシステム要件を満たしていません。',
	'backupUD'    => 'バックアップのオプションの選択を外しました。',
	'backupOK'    => '%sにバックアップを保存しました。',
	'restoreNA'   => '合致するバックアップのファイルがありません',
	'restoreOK'   => '%sからデータベースを復元しました',
	'noTemplates' => 'カスタマイズしたテンプレートはありません。',
	'v3hint'      => 'さらにContaoのインストールツールでバージョン3アップデートを実行しなければなりません!  <a href="../install.php" target="_blank">インストールツールを開く</a>'
);
