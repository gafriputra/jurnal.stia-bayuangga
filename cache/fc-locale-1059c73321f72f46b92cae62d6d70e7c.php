<?php return array (
  'plugins.importexport.users.uploadFile' => 'Unggahlah file pada "Impor" untuk melanjutkan.',
  'plugins.importexport.users.results' => 'Hasil',
  'plugins.importexport.users.importComplete' => 'Impot berhasil. Pengguna dengan usernames dan alamat email yang belum digunakan telah diimpor, bersama dengan grup pengguna.',
  'plugins.importexport.users.export.errorsOccurred' => 'Terjadi galat selama proses ekspor',
  'plugins.importexport.users.export.exportAllUsers' => 'Ekspor Semua',
  'plugins.importexport.users.export.exportByRole' => 'Ekspor Berdasarkan Peran',
  'plugins.importexport.users.export.exportUsers' => 'Ekspor Pengguna',
  'plugins.importexport.users.unknownPress' => 'Alamat jurnal "{$journalPath}" tidak dikenali.',
  'plugins.importexport.users.import.encryptionMismatch' => 'Tidak bisa menggunakan password hashed dengan {$importHash}; OJS disetting untuk memakai {$ojsHash}. Jika tetap lanjut, Anda peelu mereset password pengguna yang diimpor.',
  'plugins.importexport.users.import.warning' => 'Peringatan',
  'plugins.importexport.users.import.confirmUsers' => 'Konfirmasi jika pengguna ini ingin Anda impor ke dalam sistem',
  'plugins.importexport.users.import.errorsOccurred' => 'Terjadi galat dalam mengimpor',
  'plugins.importexport.users.import.usersWereImported' => 'Pengguna berikut ini berhasil diimpor ke dalam sistem',
  'plugins.importexport.users.import.continueOnError' => 'Lanjutkan mengimpor pengguna lain jika terjadi kegagalan.',
  'plugins.importexport.users.import.sendNotify' => 'Kirim email pemberitahuan kepada setiap pengguna yang diimpor yabg mengandung username dan password.',
  'plugins.importexport.users.import.dataFile' => 'File data pengguna',
  'plugins.importexport.users.import.instructions' => 'Pilih file data XML yang berisi informasi pengguna untuk diimpor ke dalam jurnal ini. Baca bantuan jurnal untuk selengkapnya dalam format yang dimaksud.<br /><br />Perku diketahui bahwa file yang diimpor mengandung username atau alamat email yang ada dalam sistem, data pengguna tersebut tidak akan diimpor dan setiap peran baru yang akan diberikan akan ditetapkan pda pengguna yang ada.',
  'plugins.importexport.users.import.importUsers' => 'Impor Pengguna',
  'plugins.importexport.users.cliUsage.examples' => '
Contoh:
	Impor pengguna ke myJournal dari myImportFile.xml:
	{$scriptName} {$pluginName} impor myImportFile.xml myJournal

	Ekspor semua pengguna dari myJournal:
	{$scriptName} {$pluginName} ekspor myExportFile.xml myJournal

	Ekspor pengguna berdasarkan ID:
	{$scriptName} {$pluginName} ekspor myExportFile.xml myJournal 1 2
',
  'plugins.importexport.users.cliUsage' => 'Penggunaan: {$scriptName} {$pluginName} [command] ...
Perintah:
	import [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path] [userId1] [userId2] ...
',
  'plugins.importexport.users.description' => 'Impor dan ekspor pengguna',
  'plugins.importexport.users.displayName' => 'Plugin XML Pengguna',
);