<?php return array (
  'plugins.generic.usageStats.settings.statsDisplayOptions.siteWide.omp' => 'Setiap terbitan bisa menimpa pengaturan ini melalui halaman plugin terbitan.',
  'plugins.generic.usageStats.settings.statsDisplayOptions.siteWide.ojs2' => 'Setiap jurnal bisa menimpa pengaturan ini melalui halaman plugin jurnal.',
  'plugins.generic.usageStats.downloads' => 'Unduhan',
  'plugins.generic.usageStats.monthInitials' => 'Jan Feb Mar Apr Mei Jun Jul Agus Sep Okt Nov Des',
  'plugins.generic.usageStats.noStats' => 'Data unduhan belum tersedia.',
  'plugins.generic.usageStats.statsSum' => 'Jumlahkan semua file unduhan',
  'plugins.reports.usageStats.metricType.full' => 'Statistik Public Knowledge Project (COUNTER ready)',
  'plugins.reports.usageStats.metricType' => 'PKP/COUNTER',
  'plugins.generic.usageStats.optout' => 'Di Luar',
  'plugins.generic.usageStats.optin' => 'Di Dalam',
  'plugins.generic.usageStats.optout.shortDesc' => 'Statistik pemakaian tercatat oleh jurnal. Bacalah <a href="{$privacyInfo}">informasi pribadi</a> untuk selengkapnya.',
  'plugins.generic.usageStats.optout.title' => 'Informasi Statistik Pemakaian',
  'plugins.generic.usageStats.optout.description' => 'Informasi Privasi Statistik Pemakaian',
  'plugins.generic.usageStats.optout.displayName' => 'Informasi Privasi Statistik Pemakaian',
  'plugins.reports.usageStats.report.description' => 'Laporan Statistik Pemakaian PKP (COUNTER ready)',
  'plugins.reports.usageStats.report.displayName' => 'Laporan Statistik Pemakaian PKP',
  'plugins.generic.usageStats.displayName' => 'Statistik Pemakaian',
  'plugins.generic.usageStats.pluginNotEnabled' => 'Plugin statistik pemakaian dinonaktifkan. Tidak ada file log yang diproses.',
  'plugins.generic.usageStats.loadDataError' => 'Tidak bisa memut data yang diaktrak dari file {$file}. File tersebut dipindahkan ke tahap lagi.',
  'plugins.generic.usageStats.removeUrlError' => 'Baris {$lineNumber} dari file {$file} mengandung url yang tidak bisa dihapus oleh sistem dari base url.',
  'plugins.generic.usageStats.invalidLogEntry' => 'Baris {$lineNumber} dari file {$file} tidak valid sehingga file ditolak.',
  'plugins.generic.usageStats.openFileFailed' => 'File {$file} tidak bisa dibuka sehingga ditolak.',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType.line' => 'Garis',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType.bar' => 'Bar',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType' => 'Pilih jenis grafik yang menampilkan statistik unduhan',
  'plugins.generic.usageStats.settings.statsDisplayOptions.display' => 'Tampilkan chart statistik naskah kepada pembaca',
  'plugins.generic.usageStats.settings.statsDisplayOptions.contextWide' => 'Pengaturan ini hanya bisa diterapkan pada statistik pemakaian {$contextName}.',
  'plugins.generic.usageStats.settings.statsDisplayOptions' => 'Pilihan tampilan statistik',
  'plugins.generic.usageStats.settings.compressArchives' => 'Kompres arsip',
  'plugins.generic.usageStats.settings.archives' => 'Arsip',
  'plugins.generic.usageStats.settings.optionalColumns.cityRequiresRegion' => 'Kolom pilihan "Kota" membutuhkan kolom pilihan "Wilayah".',
  'plugins.generic.usageStats.settings.optionalColumns' => 'Informasi statistik opsional',
  'plugins.generic.usageStats.settings.dataPrivacyCheckbox' => 'Hormati privasi data',
  'plugins.generic.usageStats.settings.dataPrivacyOption.excludesRegion' => 'Aktivasi privasi data meniadakan Wilayah sebagai statistik opsional.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.excludesCity' => 'Aktivasi privasi data meniadakan Kota sebagai statistik opsional.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requiresSalt' => 'Aktivasi privasi data membutuhkan file salt.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath.invalid' => 'File salt tidak bisa diedit.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath' => 'Alamat file untuk salt anonim',
  'plugins.generic.usageStats.settings.dataPrivacyOption' => 'Opsi privasi data',
  'plugins.generic.usageStats.settings.saved' => 'Pengaturan plugin statstik pemakaian telah disimpan',
  'plugins.generic.usageStats.settings.logParseRegex' => 'Uraikan log files regex',
  'plugins.generic.usageStats.settings.createLogFiles.description' => 'Mengaktifkan opsi ini akan menghasilkan file log akses di direktori file. File tersebut akan digunakan untuk mengekstrak data statstik pemakaian. Jika tidak mau lagi membuat file log, kamu bisa nonaktifkan plugin ini dan gunakan sendiri file log akses server pribadi.',
  'plugins.generic.usageStats.settings.createLogFiles' => 'Buat file log',
  'plugins.generic.usageStats.settings.logging' => 'Akses opsi log',
  'plugins.generic.usageStats.optout.description.long.omp' => '
		<h3>Unformasi Privasi Umum</h3>
		<p>Cermatilah <a href="{$privacyStatementUrl}">pernyataan privasi</a> kami.</p>
		<h3>Statistik Pemakaian</h3>
		<p>Agar bisa menganalisis pemakaian dan dampak publikasi, kami mengumpulkan dan merekam akses ke halaman beranda, kategori, seri, buku, dan file. Dalam prosesnya, semua data dianonimkan. Tidak ada informasi pribadi yang dicatat. Alamat IP dianonimkan dengan metode hash (menggunakan <em>SHA 256</em>) ditambah dengan metode <em>salt 64 karakter yang aman</em> yang secara otomatis<em> dihasilkan secara acak dan ditimpa setiap hari</em>. Oleh karena itu alamat IP tidak dapat direkonstruksi.</p>
		<p>Informasi berikut disimpan setelah alamat IP yang anonim:</p>
		<ul>
		<li>Jenis akses (seperti, administratif)</li>
		<li>Waktu permintaan</li>
		<li>URL yang diakses</li>
		<li>Code status HTTP</li>
		<li>Browser</li>
		</ul>
		<p>Data yang dikumpulkan hanya digunakan untuk keperluan proses evaluasi. Tidak ada alamat IP yang dipetakan pada ID pengguna. Hal yang mustahil untuk melacak seperangkat data tertentu pada alamat IP. </p>',
  'plugins.generic.usageStats.optout.description.long.ojs2' => '
		<h3>Unformasi Privasi Umum</h3>
		<p>Cermatilah <a href="{$privacyStatementUrl}">pernyataan privasi</a> kami.</p>
		<h3>Statistik Pemakaian</h3>
		<p>Agar bisa menganalisis pemakaian dan dampak jurnal dan artikel yang diterbitkan, kami mengumpulkan dan merekam akses ke halaman beranda jurnal, nomor terbitan, artikel, galley dan file tambahan. Dalam prosesnya, semua data dianonimkan. Tidak ada informasi pribadi yang dicatat. Alamat IP dianonimkan dengan metode hash (menggunakan <em>SHA 256</em>) yang digabungkan dengan <em>salt 64 karakter yang aman</em> yang secara otomatis<em> dihasilkan secara acak dan diganti setiap hari</em>. Oleh karena itu alamat IP tidak dapat direkonstruksi.</p>
		<p>Informasi berikut disimpan setelah alamat IP yang anonim:</p>
		<ul>
		<li>Jenis akses (seperti, administratif)</li>
		<li>Waktu permintaan</li>
		<li>URL yang diakses</li>
		<li>Code status HTTP</li>
		<li>Browser</li>
		</ul>
		<p>Data yang dikumpulkan hanya digunakan untuk keperluan proses evaluasi. Tidak ada alamat IP yang dipetakan pada ID pengguna. Hal yang mustahil untuk melacak seperangkat data tertentu pada alamat IP tertentu.</p>',
  'plugins.generic.usageStats.optout.cookie' => '
		<p>Anda bisa memilih berhenti dari peoses pengumpulan data. Dengan mengklik tombol berhenti di bawah ini, Anda bisa memutuskan untuk tidak berpartisipasi dalam analisis statistik. Bila mengklik tombol berhenti, file <em>cookie</em> akan dibuat pada sistem untuk menyimpan pilihan Anda. Jika pengaturan privasi pada browser Anda secara otomatis menghapus file cookie, pilihan berhenti berhenti perlu dilakukan sekali lagi pada saat mengakses website pada waktu berikutnya. File cookie hanya valid untuk satu browser. Jika menggunakan browser berbeda, proses berhenti perlu dilakuka sekali lagi. Informasi privai tidak akan tersimpan pada file cookie ini. Kesepakatan cookie ini valid selama satu tahun setelah akses terakhir.</p>
		<p>Plerlu diingat bahwa general server logs tidak terpengaruh dengan keputusan berhenti dari proses evaluasi ini. Silakan cermati <a href="{$privacyStatementUrl}">pernyataan privasi</a> kami secara umum.</p>',
  'plugins.generic.usageStats.optout.done' => '
		<p>Anda berhasil berhenti dari pengumpulan statistik penggunaan. Bila melihat pesan ini, data statistik pemakaian Anda pada website ini tidak akan disimpan. Klik tombol di bawah untuk kembali pada ke pilihan sebelumnya.</p>',
  'plugins.generic.usageStats.description' => 'Menyajikan statistik pemakaian data objek. Boleh menggunakan file log akses server untuk mengekstrak statistik.',
  'plugins.generic.usageStats.processingPathNotEmpty' => 'Direktori {$direktori} tidak kosong yang menandakan ada proses yang gagal sebelumnya, atau ada proses yang berjalan bersamaan. File ini secara otomatis akan diproses ulang jika Anda juga menggunakan scheduledTasksAutoStage.xml, jika tidak, Anda perlu memindahkan kembali orphaned file secara manual yang ada di dalam direktori pemrosesan ke stage directory.',
  'plugins.generic.usageStats.usageStatsLoaderName' => 'Beban loader file statistik pemakaian',
  'plugins.generic.usageStats.settings.statsDisplayOptions.datasetMaxCount' => 'Tentukan jumlah maksimum data yang akan ditampilkan pada saat bersamaan untuk titik sumbu x tertentu. Nilai yang lebih tinggi dapat menghasilkan grafik yang sulit dipahami. Jumlah yang aman antara 3 dan 5.',
  'plugins.generic.usageStats.settings.compressArchives.description' => 'Aktifkan opsi ini untuk mengompres file log yang diarsipkan menggunakan tool gzip (Anda perlu mengkonfigurasi pengaturan gzip di dalam file config.inc.php). Jika memiliki situs dengan lalu lintas trafik yang tinggi, sebaiknya aktifkan opsi ini untuk menghemat ruang penyimpanan tambahan.',
  'plugins.generic.usageStats.settings.optionalColumns.description' => 'Aktifkan atau Nonaktifkan pengumpulan informasi opsional berikut. Hal ini akan memengaruhi laporan statistik potensial yang dapat Anda ambil kembali, dan juga akan berdampak pada ukuran basis data. JANGAN MENGUBAH kecuali Anda benar-benar mengerti apa yang Anda lakukan.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.description' => 'Aktifkan opsi ini untuk menggunakan versi plugin yang mengikuti aturan privasi, yaitu yang mencatat alamat IP hash, memberi tahu pengguna tentang pelacakan dan memberikan opsi opt-out bagi pengguna. Catatan: bila menggunakan opsi ini Anda tidak akan dapat menggunakan fitur geo dari plugin.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requirements' => 'Untuk memastikan privasi data, Anda harus menentukan file yang readable dan writable oleh pengguna web untuk mengandung salt value yang dihasilkan secara acak. File ini TIDAK mesti dilindungi untuk memastikan perlindungan privasi. Salt tersebut dihasilkan secara acak baik menggunakan: fungsi mcrypt_create_iv, yang membutuhkan PHP mcrypt; fungsi openssl_random_pseudo_bytes, yang membutuhkan PHP openssl; file /dev/urandom, yang hanya berfungsi pada sistem *nix; atau fungsi mt_rand, yang tidak aman secara kriptografis. Jadi, jika Anda menggunakan server Windows, pastikan sudah menginstal PHP mcrypt atau openssl yang diaktifkan agar salt yang dihasilkan aman secara kriptografis.',
  'plugins.generic.usageStats.settings.logParseRegex.description' => 'Regex bawaan yang digunakan dapat memparsing file log akses apache dalam format gabungan serta file log plugin. Jika format file log akses berbeda, Anda perlu memasukkan regex yang mampu menguraikannya dan memberikan value yang diharapkan. Lihat UsageStatsLoader::_getDataFromLogEntry() untuk informasi lebih lanjut.',
);