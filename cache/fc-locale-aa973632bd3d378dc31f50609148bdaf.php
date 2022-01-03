<?php return array (
  'plugins.importexport.native.cliUsage' => 'Usage: {$scriptName} {$pluginName} [command] ...
Perintah:
	impor [xmlFileName] [journal_path] [user_name] ...
	ekspor [xmlFileName] [journal_path] artikel [articleId1] [articleId2] ...
	ekspor [xmlFileName] [journal_path] artikel [articleId]
	ekspor [xmlFileName] [journal_path] issue [issueId1] [issueId2] ...
	ekspor [xmlFileName] [journal_path] issue [issueId]

Parameter tambahan diperlukan untuk mengimpor data sebagai berikut, bergantung
pada  root node dokumen XML.

Jika root node <article> atau <articles>, parameter tambahan diperlukan.
Format berikut dibolehkan:

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_id [sectionId]

{$scriptName} {$pluginName} impor [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_name [name]

{$scriptName} {$pluginName} impor [xmlFileName] [journal_path]
	issue_id [issueId] section_abbrev [abbrev]
',
  'plugins.importexport.native.import.error.publishedDateMissing' => 'Artikel "{$articleTitle}" terdapat dalam issue, tapi tidak memiliki tanggal terbit.',
  'plugins.importexport.native.import.error.issueIdentificationMissing' => 'Elemen identifikasi issue untuk artikel "{$articleTitle}" hilang.',
  'plugins.importexport.native.import.error.issueIdentificationDuplicate' => 'Issue yang ada dengan id {$issueId} sama dengan identifikasi issue yang ada "{$issueIdentification}".  Issue ini tidak akan diubah, tapi akan ditambahkan artikel.',
  'plugins.importexport.native.import.error.issueIdentificationMatch' => 'Tidak ada atau lebih dari satu issue sama dengan identifikasi issue yang diberikan "{$issueIdentification}".',
  'plugins.importexport.native.import.error.sectionAbbrevMatch' => 'Singkatan bagian "{$sectionAbbrev}" dalam issue "{$issueTitle}" sama dengan bagian jurnal yang ada, tapi singkatan lagi pada bagian ini tidak sama dengan singkatan lain dari bagian jurnal yang ada.',
  'plugins.importexport.native.import.error.sectionAbbrevMismatch' => 'Singkatan bagian "{$section1Abbrev}" dan singkatan bagian "{$section2Abbrev}" dari issue "{$issueTitle}" sama dengan bagian jurnal lain yang ada.',
  'plugins.importexport.native.import.error.sectionTitleMatch' => 'Judul bagian "{$sectionTitle}" dalam issue "{$issueTitle}" sesuai dengan bagian jurnal yang ada, tapi judul lain pada bagian ini tidak cocok dengan judul bagian jurnal yang ada.',
  'plugins.importexport.native.import.error.sectionTitleMismatch' => 'Bagian judul "{$section1Title}" dan bagian judul "{$section2Title}" dalam issue "{$issueTitle}" sam dengan bagian jurnal yang ada dan berbeda.',
  'plugins.importexport.native.error.unknownUser' => 'Pengguna yang dimaksud,  "{$userName}", tidak ada.',
  'plugins.importexport.native.error.unknownSection' => 'Bagian Tak Diketahui {$param}',
  'plugins.importexport.native.importComplete' => 'Impor berhasil. Berikut daftar item yang berhasil diimpor:',
  'plugins.inportexport.native.uploadFile' => 'Unggahlah file pada "Impor" untuk melanjutkan.',
  'plugins.importexport.native.results' => 'Hasil',
  'plugins.importexport.native.exportIssues' => 'Ekspor Issue',
  'plugins.importexport.native.exportSubmissions' => 'Ekspor artikel',
  'plugins.importexport.native.exportSubmissionsSelect' => 'Pilih artikel untuk diekspor',
  'plugins.importexport.native.import.instructions' => 'Unggah file XML untuk diimpor',
  'plugins.importexport.native.import' => 'Impor',
  'plugins.importexport.native.description' => 'Impor dan ekspor artikel dan issue dalam format XML Natif OJS.',
  'plugins.importexport.native.displayName' => 'Plugin XML Natif',
);