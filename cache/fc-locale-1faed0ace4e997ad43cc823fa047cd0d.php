<?php return array (
  'plugins.importexport.doaj.displayName' => 'Plugin Ekspor DOAJ',
  'plugins.importexport.doaj.description' => 'Ekspor Jurnal untuk DOAJ.',
  'plugins.importexport.doaj.export.contact' => 'Kontak DOAJ untuk pencantuman',
  'plugins.importexport.doaj.cliUsage' => 'Kegunaan:
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] articles objectId1 [objectId2] ...
',
  'plugins.importexport.doaj.register.error.mdsError' => 'Registrasi tidak berhasil! API DOAJ memberikan pesan kesalahan: \'{$param}\'.',
  'plugins.importexport.doaj.senderTask.name' => 'Tugas registrasi otomatis DOAJ',
  'plugins.importexport.doaj.settings.form.testMode.description' => 'Gunakan API ujicoba DOAJ (dalam lingkungan ujicoba) untuk pendaftaran. Mohon tidak lupa untuk membuang pilihan ini pada sistem produksi.',
  'plugins.importexport.doaj.settings.form.automaticRegistration.description' => 'OJS akan mendepositokan artikel secara otomatis ke DOAJ. Mohon dicatat bahwa hal ini mungkin membutuhkan sedikit waktu proses (misal, bergantung pada konfigurasi cronjob Anda). Anda dapat melakukan pemeriksaan untuk semua artikel yang belum didaftarkan.',
  'plugins.importexport.doaj.settings.form.apiKey.description' => 'Anda akan menemukan kunci API Anda di halaman pengguna DOAJ.',
  'plugins.importexport.doaj.settings.form.apiKey' => 'Kunci API DOAJ',
  'plugins.importexport.doaj.registrationIntro' => 'Jika Anda ingin mendaftarkan artikel melalui aplikasi OJS, mohon masukkan kunci API DOAJ Anda. Jika tidak dimasukkan, Anda akan tetap dapat mengekspor artikel ke dalam format XML yang digunakan DOAJ namun Anda tidak dapat mendaftarkan artikel secara otomatis melalui aplikasi OJS.',
);