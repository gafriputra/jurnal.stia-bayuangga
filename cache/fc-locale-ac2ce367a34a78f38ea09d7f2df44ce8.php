<?php return array (
  'emails.notification.subject' => 'Notifikasi baru dari {$siteTitle}',
  'emails.notification.body' => 'Anda memperoleh satu notifikasi baru dari {$siteTitle}:<br />
<br />
{$notificationContents}<br />
<br />
Tautan: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.notification.description' => 'Email ini dikirimkan ke pengguna terdaftar yang memilih untuk memperoleh jenis notifikasi ini dikirimkan melalui email.',
  'emails.passwordResetConfirm.subject' => 'Konfirmasi Reset Sandi',
  'emails.passwordResetConfirm.body' => 'Kami menerima permintaan reset sandi untuk akun Anda di website {$siteTitle}.<br />
<br />
Jika Anda tidak merasa mengajukan permintaan ini, abaikan pesan ini dan sandi Anda tidak akan diubah.  Jika Anda memang ingin melakukan reset sandi, klik tautan berikut ini.<br />
<br />
Reset sandi saya: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.passwordResetConfirm.description' => 'Email ini dikirimkan ke pengguna terdaftar ketika lupa sandi atau tidak dapat login. Email ini memberikan URL untuk melakukan reset sandi.',
  'emails.passwordReset.subject' => 'Reset Sandi',
  'emails.passwordReset.body' => 'Sandi akun Anda di website {$siteTitle} telah berhasil di-reset. Silakan simpan nama pengguna dan sandi ini karena akan dibutuhkan untuk semua kegiatan terkait jurnal di website ini.<br />
<br />
Nama pengguna Anda: {$username}<br />
Sandi: {$password}<br />
<br />
{$principalContactSignature}',
  'emails.passwordReset.description' => 'Email ini dikirimkan ke pengguna terdaftar saat proses reset password berhasil sesuai prosedur di email PASSWORD_RESET_CONFIRM.',
  'emails.userRegister.subject' => 'Registrasi Jurnal',
  'emails.userRegister.body' => '{$userFullName}<br />
<br />
Anda sekarang telah terdaftar sebagai pengguna di {$contextName}.  Kami sertakan nama pengguna dan sandi Anda di email ini, keduanya diperlukan untuk semua kegiatan melalui website jurnal ini. Anda dapat keluar dari daftar pengguna jurnal kapan saja dengan menghubungi kami.<br />
<br />
Nama pengguna: {$username}<br />
Sandi: {$password}<br />
<br />
Terimakasih,<br />
{$principalContactSignature}',
  'emails.userRegister.description' => 'Email ini dikirimkan ke pengguna baru untuk menyambut dan memberikan informasi nama pengguna dan sandi.',
  'emails.userValidate.subject' => 'Validasi Akun Anda',
  'emails.userValidate.body' => '{$userFullName}<br />
<br />
Anda telah membuat akun di {$contextName}.  Sebelum dapat menggunakannya, Anda perlu melakukan validasi akun email. Untuk melakukannya, klik tautan berikut ini:<br />
<br />
{$activateUrl}<br />
<br />
Terimakasih,<br />
{$principalContactSignature}',
  'emails.userValidate.description' => 'Email ini dikirim ke pengguna baru agar melakukan validasi email yang mereka gunakan untuk registrasi.',
  'emails.reviewerRegister.subject' => 'Registrasi sebagai Reviewer di {$contextName}',
  'emails.reviewerRegister.body' => 'Dengan mempertimbangkan keahlian Anda, kami memasukkan nama Anda dalam database reviewer di {$contextName}. Hal ini tidak bersifat mengikat, hanya sekedar memudahkan kami untuk mengundang Anda untuk melakukan review terhadap suatu naskah. Ketika memperoleh undangan untuk melakukan review suatu naskah, Anda dapat melihat judul dan abstrak naskah tersebut, dan Anda berhak menentukan apakah akan menerima atau menolak undangan tersebut. Anda juga dapat meminta dihapus dari daftar reviewer kapan saja Anda menghendaki.<br />
<br />
Kami menyertakan nama pengguna dan sandi Anda, yang digunakan dalam semua interaksi dengan jurnal melalui website. Anda dapat melakukan update profil, termasuk minat review Anda.<br />
<br />
Nama pengguna: {$username}<br />
Sandi: {$password}<br />
<br />
Terimakasih,<br />
{$principalContactSignature}',
  'emails.reviewerRegister.description' => 'Email ini dikirimkan ke reviewer baru untuk menyambut dan memberikan informasi nama pengguna dan sandi.',
  'emails.publishNotify.subject' => 'Terbitan Baru',
  'emails.publishNotify.body' => 'Readers:<br />
<br />
{$contextName} baru saja menerbitkan terbitan terbarunya di {$contextUrl}. Kami mengundang Anda untuk membaca Daftar Isi dan selanjutnya mengunjungi website kami untuk membaca artikel yang Anda minati.<br />
<br />
Terimakasih atas perhatian Anda,<br />
{$editorialContactSignature}',
  'emails.publishNotify.description' => 'Email ini dikirimkan ke pembaca terdaftar melalui tautan "Beritahu Pengguna" di Beranda Pengguna Editor. Email ini memberitahu pembaca tentang terbitan baru dan mengundang pembaca untuk mengunjungi jurnal melalui URL yang diberikan.',
  'emails.lockssExistingArchive.subject' => 'Permohonan Pengarsipan untuk {$contextName}',
  'emails.lockssExistingArchive.body' => 'Yang terhormat [Pustakawan Universitas]<br />
<br />
{$contextName} &amp;lt;{$contextUrl}&amp;gt;, merupakan jurnal yang salah satu anggota fakultas Anda, [name of member], menjadi [title of position]. Jurnal ini hendak membuat arsip sesuai LOCKSS (Lots of Copies Keep Stuff Safe) di perpustakaan Anda dan perpustakaan universitas lainnya.<br />
<br />
[Deskripsi singkat jurnal]<br />
<br />
URL Publisher Manifest LOCKSS jurnal kami adalah: {$contextUrl}/gateway/lockss<br />
<br />
Kami memahami bahwa Anda telah bergabung dengan LOCKSS. Jika kami perlu memberikan metadata tambahan untuk mendaftarkan jurnal kami di versi LOCKSS Anda, dengan senang hati kami akan memberikannya.<br />
<br />
Terimakasih,<br />
{$principalContactSignature}',
  'emails.lockssExistingArchive.description' => 'Email ini meminta penjaga arsip LOCKSS untuk mempertimbangkan memasukkan jurnal ini ke dalam arsip mereka. Email ini memberikan URL Publisher Manifest LOCKSS jurnal.',
  'emails.lockssNewArchive.subject' => 'Permohonan Pengarsipan untuk {$contextName}',
  'emails.lockssNewArchive.body' => 'Yang terhormat [University Librarian]<br />
<br />
{$contextName} &amp;lt;{$contextUrl}&amp;gt;, merupakan jurnal yang salah satu anggota fakultas Anda, [name of member], menjadi [title of position]. Jurnal ini hendak membuat arsip sesuai LOCKSS (Lots of Copies Keep Stuff Safe) di perpustakaan Anda dan perpustakaan universitas lainnya.<br />
<br />
[Deskripsi singkat jurnal]<br />
<br />
Program LOCKSS &amp;lt;http://lockss.org/&amp;gt;, suatu gerakan perpustakaan/penerbit internasional, merupakan contoh nyata penyimpanan dan pengarsipan terdistribusi, detail tambahan dapat dilihat di bawah. Piranti lunak ini, yang berjalan di komputer biasa, merupakan piranti lunak yang gratis; sistemnya mudah di-online-kan; tidak membutuhkan banyak perawatan.<br />
<br />
Untuk membantu mengarsipkan jurnal kami, kami mengundang Anda untuk menjadi anggota komunitas LOCKSS, guna membantu mengumpulkan dan menyimpan judul-judul karya anggota fakultas Anda dan ilmuwan lainnya di seluruh dunia. Jika berkenan, silakan mengunjungi website LOCKSS untuk informasi mengenai bagaimana cara kerja sistem ini. Kami berharap Anda berkenan mendukung pengarsipan jurnal ini.<br />
<br />
Terimakasih,<br />
{$principalContactSignature}',
  'emails.lockssNewArchive.description' => 'Email ini mendorong penerima untuk berpartisipasi di gerakan LOCKSS dan memasukkan jurnal ini dalam arsip. Email ini memberikan informasi tentang gerakan LOCKSS dan cara untuk bergabung.',
  'emails.submissionAck.subject' => 'Ucapan Terimakasih atas Penyerahan Naskah',
  'emails.submissionAck.body' => '{$authorName}:<br />
<br />
Terimakasih telah menyerahkan naskah, &quot;{$submissionTitle}&quot; ke {$contextName}. Dengan sistem manajemenn jurnal online yang kami gunakan, Anda dapat memantau kemajuan proses editorial naskah Anda melalui:<br />
<br />
URL Naskah: {$submissionUrl}<br />
Nama pengguna: {$authorUsername}<br />
<br />
Jika ada pertanyaan, silakan hubungi kami. Terimakasih telah mempercayakan publikasi karya Anda di jurnal kami.<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAck.description' => 'Email ini, jika diaktifkan, secara otomatis dikirimkan ke penulis saat menyelesaikan proses penyerahan naskah ke jurnal. Email ini berisi informasi tentang pemantauan kemajuan proses editorial dan ucaan terima kasih atas naskah yang dikirimkan.',
  'emails.submissionAckNotUser.subject' => 'Pemberitahuan Penyerahan Naskah',
  'emails.submissionAckNotUser.body' => 'Hello,<br />
<br />
{$submitterName} telah menyerahkan naskah, &quot;{$submissionTitle}&quot; ke {$contextName}. <br />
<br />
Jika ada pertanyaan, silakan hubungi kami. Terimakasih telah mempercayakan publikasi karya Anda di jurnal kami.<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAckNotUser.description' => 'Email ini, jika diaktifkan, secara otomatis dikirimkan ke penulis saat menyelesaikan proses penyerahan naskah ke jurnal. Email ini memberikan informasi mengenai pemantauan kemajuan proses editorial dan mengucapkan terimakasih atas naskah yang dikirimkan.',
  'emails.editorAssign.subject' => 'Penugasan Editorial',
  'emails.editorAssign.body' => '{$editorialContactName}:<br />
<br />
Naskah, &quot;{$submissionTitle},&quot; di {$contextName} telah ditugaskan kepada Anda sebagai Editor Bagian untuk memastikan selesainya seluruh proses editorial.<br />
<br />
URL Naskah: {$submissionUrl}<br />
Nama pengguna: {$editorUsername}<br />
<br />
Terimakasih.',
  'emails.editorAssign.description' => 'Email ini memberitahu Editor Bagian bahwa Editor telah memberikan tugas untuk mengawasi suatu naskah dalam menyelesaikan proses editorial. Email ini memberikan informasi mengenai naskah dan cara mengaksesnya di website jurnal.',
  'emails.reviewRequest.subject' => 'Permohonan Review Artikel',
  'emails.reviewRequest.body' => '{$reviewerName}:<br />
<br />
Kami memandang bahwa Anda merupakan reviewer yang tepat untuk naskah, &quot;{$submissionTitle},&quot; yang diserahkan ke {$contextName}. Abstrak naskah tersebut disertakan di bawah ini, dan kami berharap Anda berkenan melakukannya.<br />
<br />
Silakan login ke website jurnal sebelum {$responseDueDate} untuk memberitahukan apakah Anda bersedia melakukan review atau tidak, juga untuk mengakses naskah dan menyerahkan review beserta rekomendasi Anda. Website jurnal adalah {$contextUrl}<br />
<br />
Tenggat review ini sendiri adalah {$reviewDueDate}.<br />
<br />
Jika Anda tidak memiliki nama pengguna dan sandi untuk website jurnal ini, Anda dapat menggunakan tautan berikut untuk mereset sandi Anda (yang selanjutnya akan diemailkan kepada Anda bersama nama pengguna Anda). {$passwordResetUrl}<br />
<br />
URL Naskah: {$submissionReviewUrl}<br />
<br />
Terimakasih atas perhatiannya.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequest.description' => 'Email ini dari Editor Bagian kepada Reviewer untuk meminta reviewer memberitahukan apakah menerima atau menolak permohonan review. Email ini memberikan informasi tentang naskah meliputi judul dan abstrak, tenggat review, dan cara mengakses naskah. Pesan ini digunakan saat Proses Review Standar dipilih di Manajemen > Pengaturan > Alur Kerja > Review. (Selain itu lihat di REVIEW_REQUEST_ATTACHED.)',
  'emails.reviewRequestRemindAuto.subject' => 'Pengingat Permintaan Review Artikel',
  'emails.reviewRequestRemindAuto.body' => '{$reviewerName}:<br />
Sekedar mengingatkan tentang permohonan kami untuk melakukan review terhadap naskah, &quot;{$submissionTitle},&quot; untuk {$contextName}. Kami berharap telah menerima respon Anda pada {$responseDueDate}, dan email ini dikirim secara otomatis seiring terlewatinya tanggal tersebut.
<br />
Kami memandang bahwa Anda merupakan reviewer yang tepat untuk naskah tersebut. Abstrak naskah tersebut disertakan di bawah ini, dan kami berharap Anda berkenan melakukannya.<br />
<br />
Silakan login ke website jurnal untuk memberitahukan apakah Anda bersedia melakukan review atau tidak, juga untuk mengakses naskah dan menyerahkan review beserta rekomendasi Anda. Website jurnal adalah {$contextUrl}<br />
<br />
Tenggat review ini sendiri adalah {$reviewDueDate}.<br />
<br />
Jika Anda tidak memiliki nama pengguna dan sandi untuk website jurnal ini, Anda dapat menggunakan tautan berikut untuk mereset sandi Anda (yang selanjutnya akan diemailkan kepada Anda bersama nama pengguna Anda). {$passwordResetUrl}<br />
<br />
URL Naskah: {$submissionReviewUrl}<br />
<br />
Terimakasih atas perhatiannya.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAuto.description' => 'Email ini dikirim otomatis saat tenggat konfirmasi terlewati (lihat Opsi Review di menu Pengaturan > Alur Kerja > Review) dan akses one-click reviewer dinonaktifkan. Scheduled tasks must be enabled and configured (see the site configuration file).',
  'emails.reviewRequestOneclick.subject' => 'Permohonan Review Artikel',
  'emails.reviewRequestOneclick.body' => '{$reviewerName}:<br />
<br />
Kami memandang bahwa Anda merupakan reviewer yang tepat untuk naskah, &quot;{$submissionTitle},&quot; yang diserahkan ke {$contextName}. Abstrak naskah tersebut disertakan di bawah ini, dan kami berharap Anda berkenan melakukannya.<br />
<br />
Silakan login ke website jurnal sebelum {$responseDueDate} untuk memberitahukan apakah Anda bersedia melakukan review atau tidak, juga untuk mengakses naskah dan menyerahkan review beserta rekomendasi Anda. Website jurnal adalah {$contextUrl}<br />
<br />
Tenggat review ini sendiri adalah {$reviewDueDate}.<br />
<br />
URL Naskah: {$submissionReviewUrl}<br />
<br />
Terimakasih atas perhatiannya.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclick.description' => 'Email ini dari Editor Bagian kepada Reviewer  untuk meminta reviewer memberitahukan apakah menerima atau menolak permohonan review. Email ini memberikan informasi tentang naskah meliputi judul dan abstrak, tenggat review, dan cara mengakses naskah. Pesan ini digunakan saat Proses Review Standar dipilih di Manajemen > Pengaturan > Alur Kerja > Review, dan akses one-click reviewer diaktifkan.',
  'emails.reviewRequestRemindAutoOneclick.subject' => 'Permohonan Review Artikel',
  'emails.reviewRequestRemindAutoOneclick.body' => '{$reviewerName}:<br />
Sekedar mengingatkan tentang permohonan kami untuk melakukan review terhadap naskah, &quot;{$submissionTitle},&quot; untuk {$contextName}. Kami berharap telah menerima respon Anda pada {$responseDueDate}, dan email ini dikirim secara otomatis seiring terlewatinya tanggal tersebut.
<br />
Kami memandang bahwa Anda merupakan reviewer yang tepat untuk naskah tersebut. Abstrak naskah tersebut disertakan di bawah ini, dan kami berharap Anda berkenan melakukannya.<br />
<br />
Silakan login ke website jurnal untuk memberitahukan apakah Anda bersedia melakukan review atau tidak, juga untuk mengakses naskah dan menyerahkan review beserta rekomendasi Anda. Website jurnal adalah {$contextUrl}<br />
<br />
Tenggat review ini sendiri adalah {$reviewDueDate}.<br />
<br />
URL Naskah: {$submissionReviewUrl}<br />
<br />
Terimakasih atas perhatiannya.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAutoOneclick.description' => 'Email ini dikirim otomatis saat tenggat konfirmasi reviewer terlewati (lihat Opsi Review di menu Pengaturan > Alur Kerja > Review) dan akses one-click reviewer diaktifkan. Tugas Terjadwal harus diaktifkan dan diatur (lihat file konfigurasi website).',
  'emails.reviewRequestAttached.subject' => 'Permohonan Review Artikel',
  'emails.reviewRequestAttached.body' => '{$reviewerName}:<br />
<br />
Kami memandang bahwa Anda merupakan reviewer yang tepat untuk naskah, &quot;{$submissionTitle},&quot; dan kami mengharapkan Anda berkenan melakukan review. Panduan Review untuk jurnal ini disertakan di bawah, dan naskah telah dilampirkan bersama email ini. Review beserta rekomendasi Anda, kami harap telah diemailkan sebelum tenggat review {$reviewDueDate}.<br />
<br />
Mohon sampaikan dalam email balasan sebelum {$responseDueDate} tentang kesediaan Anda untuk melakukan review.<br />
<br />
Terimakasih atas perhatiannya.<br />
<br />
{$editorialContactSignature}<br />
<br />
<br />
Panduan Review<br />
<br />
{$reviewGuidelines}<br />
',
  'emails.reviewRequestAttached.description' => 'Email ini dari Editor Bagian kepada Reviewer untuk meminta reviewer memberitahukan apakah menerima atau menolak permohonan review. Email disertai naskah terlampir bersama email. Pesan ini digunakan saat Proses Review Lampiran Email dipilih di Manajemen > Pengaturan > Alur Kerja > Review. (Selain itu lihat REVIEW_REQUEST.)',
  'emails.reviewRequestSubsequent.subject' => 'Permohonan Review Artikel',
  'emails.reviewRequestSubsequent.body' => '{$reviewerName}:<br />
<br />
Email ini terkait naskah &quot;{$submissionTitle},&quot; yang sedang dalam pertimbangan di {$contextName}.<br />
<br />
Setelah review untuk versi naskah sebelumnya, penulis saat ini telah menyerahkan versi revisi naskahnya.  Kami berharap Anda dapat membantu mengevaluasinya.<br />
<br />
Silakan login ke website jurnal sebelum {$responseDueDate} untuk memberitahukan apakah Anda bersedia melakukan review atau tidak, juga untuk mengakses naskah dan menyerahkan review beserta rekomendasi Anda. Website jurnal adalah {$contextUrl}<br />
<br />
Tenggat review ini sendiri adalah {$reviewDueDate}.<br />
<br />
Jika Anda tidak memiliki nama pengguna dan sandi untuk website jurnal ini, Anda dapat menggunakan tautan berikut untuk mereset sandi Anda (yang selanjutnya akan diemailkan kepada Anda bersama nama pengguna Anda). {$passwordResetUrl}<br />
<br />
URL Naskah: {$submissionReviewUrl}<br />
<br />
Terimakasih atas perhatiannya.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestSubsequent.description' => 'Email ini dari Editor Bagian kepada Reviewer untuk meminta reviewer memberitahukan apakah menerima atau menolak permohonan review untuk ronde kedua atau berikutnya. Email ini memberikan informasi tentang naskah meliputi judul dan abstrak, tenggat review, dan cara mengakses naskah. Pesan ini digunakan saat Proses Review Standar dipilih di Manajemen > Pengaturan > Alur Kerja > Review. (Selain itu lihat REVIEW_REQUEST_ATTACHED_SUBSEQUENT.)',
  'emails.reviewRequestOneclickSubsequent.subject' => 'Permohonan Review Artikel',
  'emails.reviewRequestOneclickSubsequent.body' => '{$reviewerName}:<br />
<br />
Email ini terkait naskah &quot;{$submissionTitle},&quot; yang sedang dalam pertimbangan di {$contextName}.<br />
<br />
Setelah review untuk versi naskah sebelumnya, penulis saat ini telah menyerahkan versi revisi naskahnya.  Kami berharap Anda dapat membantu mengevaluasinya.<br />
<br />
Silakan login ke website jurnal sebelum {$responseDueDate} untuk memberitahukan apakah Anda bersedia melakukan review atau tidak, juga untuk mengakses naskah dan menyerahkan review beserta rekomendasi Anda.<br />
<br />
Tenggat review ini sendiri adalah {$reviewDueDate}.<br />
<br />
URL Naskah: {$submissionReviewUrl}<br />
<br />
Terimakasih atas perhatiannya.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclickSubsequent.description' => 'Email ini dari Editor Bagian kepada Reviewer untuk meminta reviewer memberitahukan apakah menerima atau menolak permohonan review untuk ronde kedua atau berikutnya. Email ini memberikan informasi tentang naskah meliputi judul dan abstrak, tenggat review, dan cara mengakses naskah. Pesan ini digunakan saat Proses Review Standar dipilih di Manajemen > Pengaturan > Alur Kerja > Review, dan akses one-click reviewer diaktifkan.',
  'emails.reviewRequestAttachedSubsequent.subject' => 'Permohonan Review Artikel',
  'emails.reviewRequestAttachedSubsequent.body' => '{$reviewerName}:<br />
<br />
Email ini terkait naskah &quot;{$submissionTitle},&quot; yang sedang dalam pertimbangan di {$contextName}.<br />
<br />
Setelah review untuk versi naskah sebelumnya, penulis saat ini telah menyerahkan versi revisi naskahnya.  Kami berharap Anda dapat membantu mengevaluasinya.<br />
<br />
Panduan Review untuk jurnal ini disertakan di bawah, dan naskah dilampirkan bersama email ini. Review dan rekomendasi Anda, mohon dapat diemailkan ke kami pada {$reviewDueDate}.<br />
<br />
Mohon sampaikan di email balasan sebelum {$responseDueDate} tentang kesediaan Anda untuk melakukan review.<br />
<br />
Terimakasih atas perhatiannya.<br />
<br />
{$editorialContactSignature}<br />
<br />
<br />
Panduan Review<br />
<br />
{$reviewGuidelines}<br />
',
  'emails.reviewRequestAttachedSubsequent.description' => 'Email ini dari Editor Bagian kepada Reviewer untuk meminta reviewer memberitahukan apakah menerima atau menolak permohonan review untuk ronde kedua atau berikutnya.  Email disertai naskah terlampir bersama email. Pesan ini digunakan saat Proses Review Lampiran Email dipilih di Manajemen > Pengaturan > Alur Kerja > Review. (Selain itu lihat REVIEW_REQUEST_SUBSEQUENT.)',
  'emails.reviewCancel.subject' => 'Permohonan Review Dibatalkan',
  'emails.reviewCancel.body' => '{$reviewerName}:<br />
<br />
Kami memutuskan untuk membatalkan permohonan review kami kepada Anda untuk naskah, &quot;{$submissionTitle},&quot; di {$contextName}. Kami mohon maaf sebesar-besarnya untuk ketidaknyamanan ini dan kami harap di masa mendatang Anda dapat membantu proses review di jurnal ini.<br />
<br />
Jika ada pertanyaan, silakan hubungi kami.',
  'emails.reviewCancel.description' => 'Email ini dikirimkan Editor Bagian kepada Reviewer yang sedang melakukan review untuk memberitahukan pembatalan review.',
  'emails.reviewConfirm.subject' => 'Dapat Melakukan Review',
  'emails.reviewConfirm.body' => 'Editor:<br />
<br />
Saya dapat dan bersedia melakukan review terhadap naskah, &quot;{$submissionTitle},&quot; untuk {$contextName}. Terimakasih telah mempercayakan kepada saya, dan saya berencana untuk menyelesaikan review ini sesuai tenggat, {$reviewDueDate}, atau sebelumnya.<br />
<br />
{$reviewerName}',
  'emails.reviewConfirm.description' => 'Email ini dikirimkan Reviewer kepada Editor Bagian sebagai respon terhadap permohonan review untuk memberitahu Editor Bagian bahwa permohonan review diterima dan akan diselesaikan pada tanggal yang ditetapkan.',
  'emails.reviewDecline.subject' => 'Tidak Dapat Melakukan Review',
  'emails.reviewDecline.body' => 'Editor:<br />
<br />
Mohon maaf saat ini saya tidak dapat melakukan review terhadap naskah, &quot;{$submissionTitle},&quot; untuk {$contextName}. Terimakasih telah mempercayakann kepada saya, dan lain waktu silakan menghubungi saya lagi.<br />
<br />
{$reviewerName}',
  'emails.reviewDecline.description' => 'Email ini dikirimkan Reviewer kepada Editor Bagian sebagai respon terhadap permohonan review untuk memberitahu Editor Bagian bahwa permohonan review ditolak.',
  'emails.reviewAck.subject' => 'Ucapan Terimakasih atas Review Artikel',
  'emails.reviewAck.body' => '{$reviewerName}:<br />
<br />
Terimakasih telah menyelesaikan review terhadap naskah, &quot;{$submissionTitle},&quot; untuk {$contextName}. Kami sangat menghargai kontribusi Anda terhadap kualitas karya yang kami publikasikan.',
  'emails.reviewAck.description' => 'Email ini dikirimkan Editor Bagian untuk mengkonfirmasi penerimaan review dan mengucapkan terimakasih atas kontribusinya.',
  'emails.reviewRemind.subject' => 'Pengingat Review Naskah',
  'emails.reviewRemind.body' => '{$reviewerName}:<br />
<br />
Sekedar mengingatkan tentang permohonan kami untuk melakukan review terhadap naskah, &quot;{$submissionTitle},&quot; untuk {$contextName}. Kami mengharapkan telah menerima review ini pada {$reviewDueDate}, dan akan sangat berbahagia untuk dapat menerimanya segera setelah Anda menyelesaikannya.<br />
<br />
Jika Anda tidak memiliki nama pengguna dan sandi untuk website jurnal ini, Anda dapat menggunakan tautan berikut untuk mereset sandi Anda (yang selanjutnya akan diemailkan kepada Anda bersama nama pengguna Anda). {$passwordResetUrl}<br />
<br />
URL Naskah: {$submissionReviewUrl}<br />
<br />
Mohon konfirmasi kesanggupan Anda untuk menyelesaikan kontribusi penting ini.  Kami menunggu balasan Anda.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemind.description' => 'Email ini dikirimkan Editor Bagian untuk mengingatkan reviewer bahwa review telah mencapai tenggat.',
  'emails.reviewRemindOneclick.subject' => 'Pengingat Review Naskah',
  'emails.reviewRemindOneclick.body' => '{$reviewerName}:<br />
<br />
Sekedar mengingatkan tentang permohonan kami untuk melakukan review terhadap naskah, &quot;{$submissionTitle},&quot; untuk {$contextName}. Kami mengharapkan telah menerima review ini pada {$reviewDueDate}, dan akan sangat berbahagia untuk dapat menerimanya segera setelah Anda menyelesaikannya.<br />
<br />
URL Naskah: {$submissionReviewUrl}<br />
<br />
Mohon konfirmasi kesanggupan Anda untuk menyelesaikan kontribusi penting ini.  Kami menunggu balasan Anda.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindOneclick.description' => 'Email ini dikirimkan Editor Bagian untuk mengingatkan reviewer bahwa review telah mencapai tenggat.',
  'emails.reviewRemindAuto.subject' => 'Pengingat Otomatis Review Naskah',
  'emails.reviewRemindAuto.body' => '{$reviewerName}:<br />
<br />
Sekedar mengingatkan tentang permohonan kami untuk melakukan review terhadap naskah, &quot;{$submissionTitle},&quot; untuk {$contextName}. Kami mengharapkan telah menerima review ini pada {$reviewDueDate}, dan email ini dikirim secara otomatis seiring terlewatinya tanggal tersebut. Kami masih tetap menanti review tersebut segera setelah Anda dapat menyelesaikannya.<br />
<br />
Jika Anda tidak memiliki nama pengguna dan sandi untuk website jurnal ini, Anda dapat menggunakan tautan berikut untuk mereset sandi Anda (yang selanjutnya akan diemailkan kepada Anda bersama nama pengguna Anda). {$passwordResetUrl}<br />
<br />
URL Naskah: {$submissionReviewUrl}<br />
<br />
Mohon konfirmasi kesanggupan Anda untuk menyelesaikan kontribusi penting ini.  Kami menunggu balasan Anda.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindAuto.description' => 'Email ini dikirimkan otomatis saat tenggat waktu review terlewati (lihat Opsi Review di menu Pengaturan > Alur Kerja > Review) and one-click reviewer access is disabled. Scheduled tasks must be enabled and configured (see the site configuration file).',
  'emails.reviewRemindAutoOneclick.subject' => 'Pengingat Review Naskah Otomatis',
  'emails.reviewRemindAutoOneclick.body' => '{$reviewerName}:<br />
<br />
Sekedar mengingatkan tentang permohonan kami untuk melakukan review terhadap naskah, &quot;{$submissionTitle},&quot; untuk {$contextName}. We were hoping to have this review by {$reviewDueDate}, dan email ini dikirim secara otomatis seiring terlewatinya tanggal tersebut. We would still be pleased to receive it as soon as you are able to prepare it.<br />
<br />
URL Naskah: {$submissionReviewUrl}<br />
<br />
Mohon konfirmasi kesanggupan Anda untuk menyelesaikan kontribusi penting ini.  Kami menunggu balasan Anda.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindAutoOneclick.description' => 'Email ini dikirimkan otomatis saat tenggat waktu review terlewati (lihat Opsi Review di menu Pengaturan > Alur Kerja > Review) dan akses one-click reviewer diaktifkan. Tugas terjadwal harus diaktifkan dan diatur (lihat file konfigurasi website).',
  'emails.editorDecisionAccept.subject' => 'Keputusan Editor',
  'emails.editorDecisionAccept.body' => '{$authorName}:<br />
<br />
Kami telah membuat keputusan terkait naskah yang Anda kirimkan ke {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
Keputusan kami adalah: Naskah Diterima',
  'emails.editorDecisionAccept.description' => 'Email ini dari Editor atau Editor Bagian kepada Penulis memberitahukan keputusan final "Naskah Diterima".',
  'emails.editorDecisionSendToExternal.subject' => 'Keputusan Editor',
  'emails.editorDecisionSendToExternal.body' => '{$authorName}:<br />
<br />
Kami telah membuat keputusan terkait naskah yang Anda kirimkan ke {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
Keputusan kami adalah: Dikirimkan ke Reviewer Eksternal<br />
<br />
URL Naskah: {$submissionUrl}',
  'emails.editorDecisionSendToExternal.description' => 'Email ini dari Editor atau Editor Bagian kepada Penulis memberitahukan bahwa naskah dikirimkan ke reviewer eksternal.',
  'emails.editorDecisionSendToProduction.subject' => 'Keputusan Editor',
  'emails.editorDecisionSendToProduction.body' => '{$authorName}:<br />
<br />
Proses editing naskah Anda, &quot;{$submissionTitle},&quot; telah selesai.  Kami sekarang mengirimkannya ke produksi.<br />
<br />
URL Naskah: {$submissionUrl}',
  'emails.editorDecisionSendToProduction.description' => 'Email ini dari Editor atau Editor Bagian kepada Penulis memberitahukan bahwa naskah dikirim ke produksi.',
  'emails.editorDecisionRevisions.subject' => 'Keputusan Editor',
  'emails.editorDecisionRevisions.body' => '{$authorName}:<br />
<br />
Kami telah membuat keputusan terkait naskah yang Anda kirimkan ke {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
Keputusan kami adalah: Perlu Revisi',
  'emails.editorDecisionRevisions.description' => 'Email ini dari Editor atau Editor Bagian kepada Penulis memberitahukan keputusan final "Perlu Revisi".',
  'emails.editorDecisionResubmit.subject' => 'Keputusan Editor',
  'emails.editorDecisionResubmit.body' => '{$authorName}:<br />
<br />
Kami telah membuat keputusan terkait naskah yang Anda kirimkan ke {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
Keputusan kami adalah: Kirim Ulang untuk Review',
  'emails.editorDecisionResubmit.description' => 'Email ini dari Editor atau Editor Bagian kepada Penulis memberitahukan bahwa Penulis perlu mengirim ulang naskahnya.',
  'emails.editorDecisionDecline.subject' => 'Keputusan Editor',
  'emails.editorDecisionDecline.body' => '{$authorName}:<br />
<br />
Kami telah membuat keputusan terkait naskah yang Anda kirimkan ke {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
Keputusan kami adalah: Naskah Ditolak',
  'emails.editorDecisionDecline.description' => 'Email ini dari Editor atau Editor Bagian kepada Penulis memberitahukan keputusan final "Naskah Ditolak".',
  'emails.copyeditRequest.subject' => 'Permohonan Copyediting',
  'emails.copyeditRequest.body' => '{$participantName}:<br />
<br />
Kami meminta Anda melakukan copyediting terhadap &quot;{$submissionTitle}&quot; untuk {$contextName} mengikuti langkah-langkah berikut.<br />
1. Klik URL Naskah di bawah.<br />
2. Buka semua file yang ada di file Draft dan lakukan copyediting, tambahkan Diskusi Copyediting sesuai kebutuhan.<br />
3. Simpan file yang telah di-copyedit, dan unggah ke panel Sudah Copyedit.<br />
4. Beritahu Editor bahwa semua file telah siap, dan bahwa proses Produksi dapat dimulai.<br />
<br />
{$contextName} URL: {$contextUrl}<br />
URL Naskah: {$submissionUrl}<br />
Nama pengguna: {$participantUsername}',
  'emails.copyeditRequest.description' => 'Email ini dari Editor Bagian ke Copyeditor naskah agar memulai proses copyediting.  Email ini memuat informasi terkait penyerahan naskah dan bagaimana mengaksesnya.',
  'emails.layoutRequest.subject' => 'Permohonan Galley',
  'emails.layoutRequest.body' => '{$participantName}:<br />
<br />
Naskah &quot;{$submissionTitle}&quot; di {$contextName} memerlukan pembuatan galley dengan mengikuti langkah-langkah berikut.<br />
1. Klik URL Naskah di bawah.<br />
2. Login ke jurnal dan gunakan file Siap Produksi untuk membuat galley sesuai standar jurnal.<br />
3. Unggah galley ke bagian File Galley.<br />
4. Beritahu Editor menggunakan Diskusi Produksi bahwa galley telah diunggah dan siap digunakan.<br />
<br />
{$contextName} URL: {$contextUrl}<br />
URL Naskah: {$submissionUrl}<br />
Nama pengguna: {$participantUsername}<br />
<br />
Jika Anda tidak dapat melakukan tugas ini saat ini atau mempunyai pertanyaan, silakan hubungi kami.  Terimakasih atas kontribusi Anda ke jurnal ini.',
  'emails.layoutRequest.description' => 'Email dari Editor Bagian kepada Layout Editor memberitahukan bahwa mereka telah ditugaskan untuk melakukan layout editing terhadap suatu naskah.  Email ini memuat informasi terkait penyerahan naskah dan bagaimana mengaksesnya.',
  'emails.layoutComplete.subject' => 'Galley Selesai',
  'emails.layoutComplete.body' => '{$editorialContactName}:<br />
<br />
Galley telah dipersiapkan bagi naskah, &quot;{$submissionTitle},&quot; di {$contextName} dan siap untuk proofreading.<br />
<br />
Jika ada pertanyaan, silakan hubungi kami.<br />
<br />
{$participantName}',
  'emails.layoutComplete.description' => 'Email from the Layout Editor kepada Editor Bagian memberitahukan bahwa proses layout telah selesai.',
  'emails.emailLink.subject' => 'Artikel Menarik',
  'emails.emailLink.body' => 'Anda mungkin tertarik dengan &quot;{$submissionTitle}&quot; oleh {$authorName} diterbitkan di Vol {$volume}, No {$number} ({$year}) {$contextName} yang tersedia di &quot;{$articleUrl}&quot;.',
  'emails.emailLink.description' => 'Template email ini memungkinkan pembaca terdaftar mengirimkan informasi tentang suatu artikel kepada seseorang yang mungkin akan tertarik. Email ini tersedia di Alat Baca dan harus diaktifkan oleh Manajer Jurnal di halaman Administrasi Alat Baca.',
  'emails.subscriptionNotify.subject' => 'Pemberitahuan Langganan',
  'emails.subscriptionNotify.body' => '{$subscriberName}:<br />
<br />
Anda sekarang telah terdaftar sebagai pelanggan di sistem manajemen jurnal online kami, {$contextName}, dengan jenis langganan:<br />
<br />
{$subscriptionType}<br />
<br />
Untuk mengakses konten yang hanya tersedia bagi pelanggan, silakan login ke sistem dengan menggunakan nama pengguna Anda, &quot;{$username}&quot;.<br />
<br />
Setelah login, Anda dapat mengubah detail profil Anda dan sandi Anda kapanpun Anda kehendaki.<br />
<br />
Jika Anda memiliki langganan institusi, pengguna di institusi Anda tidak perlu login karena semua akses secara otomatis diotentikasi oleh sistem.<br />
<br />
Jika ada pertanyaan, silakan hubungi kami.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionNotify.description' => 'Email ini memberitahu pembaca terdaftar bahwa Manajer telah membuat akses langganan untuk mereka.  Email ini memberikan URL jurnal beserta petunjuk aksesnya.',
  'emails.openAccessNotify.subject' => 'Terbitan Sudah Open Access',
  'emails.openAccessNotify.body' => 'Readers:<br />
<br />
{$contextName} telah menjadikan terbitan berikut Open Access. Kami mengundang Anda untuk menelaah Daftar Isi berikut dan mengunjungi website kami ({$contextUrl}) untuk membaca artikel dan item yang Anda minati.<br />
<br />
Terimakasih atas perhatiannya,<br />
{$editorialContactSignature}',
  'emails.openAccessNotify.description' => 'Email ini dikirimkan ke pembaca terdaftar yang meminta untuk dikirimkan email pemberitahuan saat suatu terbitan menjadi Open Access.',
  'emails.subscriptionBeforeExpiry.subject' => 'Pemberitahuan Tanggal Berakhir Langganan',
  'emails.subscriptionBeforeExpiry.body' => '{$subscriberName}:<br />
<br />
Langganan {$contextName} Anda hampir berakhir.<br />
<br />
{$subscriptionType}<br />
Tanggal berakhir: {$expiryDate}<br />
<br />
Untuk terus memperoleh akses ke jurnal ini, silakan kunjungi website jurnal dan perbaharui langganan Anda. Anda dapat login menggunakan nama pengguna Anda, &quot;{$username}&quot;.<br />
<br />
Jika ada pertanyaan, silakan hubungi kami.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionBeforeExpiry.description' => 'Email ini memberitahu seorang pelanggan bahwa langganannya hampir berakhir.  Email ini memberikan URL jurnal beserta petunjuk aksesnya.',
  'emails.subscriptionAfterExpiry.subject' => 'Langganan Berakhir',
  'emails.subscriptionAfterExpiry.body' => '{$subscriberName}:<br />
<br />
Langganan {$contextName} Anda telah berakhir.<br />
<br />
{$subscriptionType}<br />
Tanggal berakhir: {$expiryDate}<br />
<br />
Untuk memperbaharui langganan Anda, silakan kunjungi website jurnal.  Anda dapat login dengan menggunakan nama pengguna Anda, &quot;{$username}&quot;.<br />
<br />
Jika ada pertanyaan, silakan hubungi kami.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiry.description' => 'Email ini memberitahu seorang pelanggan bahwa langganannya telah berakhir.  Email ini memberikan URL jurnal beserta petunjuk aksesnya.',
  'emails.subscriptionAfterExpiryLast.subject' => 'Langganan Berakhir - Pengingat Terakhir',
  'emails.subscriptionAfterExpiryLast.body' => '{$subscriberName}:<br />
<br />
Langganan {$contextName} Anda telah berakhir.<br />
Ini adalah pengingat terakhir yang diemailkan kepada Anda.<br />
<br />
{$subscriptionType}<br />
Tanggal berakhir: {$expiryDate}<br />
<br />
Untuk memperbaharui langganan Anda, silakan kunjungi website jurnal.  Anda dapat login dengan menggunakan nama pengguna Anda, &quot;{$username}&quot;.<br />
<br />
Jika ada pertanyaan, silakan hubungi kami.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiryLast.description' => 'Email ini memberitahu seorang pelanggan bahwa langganannya telah berakhir.  Email ini memberikan URL jurnal beserta petunjuk aksesnya.',
  'emails.subscriptionPurchaseIndl.subject' => 'Pembelian Langganan: Individu',
  'emails.subscriptionPurchaseIndl.body' => 'Sebuah langganan individu telah dibeli online untuk {$contextName} dengan rincian berikut.<br />
<br />
Jenis Langganan:<br />
{$subscriptionType}<br />
<br />
Pengguna:<br />
{$userDetails}<br />
<br />
Informasi Keanggotaan (jika ada):<br />
{$membership}<br />
<br />
Untuk melihat atau mengubah langganan ini, silakan gunakan URL berikut ini.<br />
<br />
URL Langganan: {$subscriptionUrl}<br />
',
  'emails.subscriptionPurchaseIndl.description' => 'Email ini memberitahu Manajer Langganan bahwa sebuah langganan individu telah dibeli online.  Email ini memberikan ringkasan informasi tentang langganan tersebut beserta tautan untuk mengakses langganan yang dibeli.',
  'emails.subscriptionPurchaseInstl.subject' => 'Pembelian Langganan: Institusi',
  'emails.subscriptionPurchaseInstl.body' => 'Sebuah langganan institusi telah dibeli online untuk {$contextName} dengan rincian berikut. Untuk mengaktifkan langganan ini, silakan gunakan URL Langganan dan jadikan status langganan ke \'Aktif\'.<br />
<br />
Jenis Langganan:<br />
{$subscriptionType}<br />
<br />
Institusi:<br />
{$institutionName}<br />
{$institutionMailingAddress}<br />
<br />
Domain (jika ada):<br />
{$domain}<br />
<br />
IP Ranges (jika ada):<br />
{$ipRanges}<br />
<br />
Contact Person:<br />
{$userDetails}<br />
<br />
Informasi Keanggotaan (jika ada):<br />
{$membership}<br />
<br />
Untuk melihat atau mengubah langganan ini, silakan gunakan URL berikut ini.<br />
<br />
URL Langganan: {$subscriptionUrl}<br />
',
  'emails.subscriptionPurchaseInstl.description' => 'Email ini memberitahu Manajer Langganan bahwa sebuah langganan institusi telah dibeli online.  Email ini memberikan ringkasan informasi tentang langganan tersebut beserta tautan untuk mengakses langganan yang dibeli.',
  'emails.subscriptionRenewIndl.subject' => 'Pembaharuan Langganan: Individu',
  'emails.subscriptionRenewIndl.body' => 'Sebuah langganan individu telah diperbaharui online untuk {$contextName} dengan rincian berikut.<br />
<br />
Jenis Langganan:<br />
{$subscriptionType}<br />
<br />
Pengguna:<br />
{$userDetails}<br />
<br />
Informasi Keanggotaan (jika ada):<br />
{$membership}<br />
<br />
Untuk melihat atau mengubah langganan ini, silakan gunakan URL berikut ini.<br />
<br />
URL Langganan: {$subscriptionUrl}<br />
',
  'emails.subscriptionRenewIndl.description' => 'Email ini memberitahu Manajer Langganan bahwa sebuah langganan individu telah diperbaharui online.  Email ini memberikan ringkasan informasi tentang langganan tersebut beserta tautan untuk mengakses langganan yang diperbaharui.',
  'emails.subscriptionRenewInstl.subject' => 'Pembaharuan Langganan: Institusi',
  'emails.subscriptionRenewInstl.body' => 'Sebuah langganan institusi telah diperbaharui online untuk {$contextName} dengan rincian berikut.<br />
<br />
Jenis Langganan:<br />
{$subscriptionType}<br />
<br />
Institusi:<br />
{$institutionName}<br />
{$institutionMailingAddress}<br />
<br />
Domain (jika ada):<br />
{$domain}<br />
<br />
IP Ranges (jika ada):<br />
{$ipRanges}<br />
<br />
Contact Person:<br />
{$userDetails}<br />
<br />
Informasi Keanggotaan (jika ada):<br />
{$membership}<br />
<br />
Untuk melihat atau mengubah langganan ini, silakan gunakan URL berikut ini.<br />
<br />
URL Langganan: {$subscriptionUrl}<br />
',
  'emails.subscriptionRenewInstl.description' => 'Email ini memberitahu Manajer Langganan bahwa sebuah langganan institusi telah diperbaharui online.  Email ini memberikan ringkasan informasi tentang langganan tersebut beserta tautan untuk mengakses langganan yang diperbaharui.',
  'emails.citationEditorAuthorQuery.subject' => 'Penyuntingan Sitiran',
  'emails.citationEditorAuthorQuery.body' => '{$authorFirstName},<br />
<br />
Mohon verifikasi atau berikan sitasi yang benar untuk rujukan berikut dari artikel Anda, {$submissionTitle}:<br />
<br />
{$rawCitation}<br />
<br />
Terimakasih!<br />
<br />
{$userFirstName}<br />
Copy-Editor, {$contextName}<br />
',
  'emails.citationEditorAuthorQuery.description' => 'Email ini memungkinkan copyeditor untuk meminta informasi tambahan tentang rujukan dari penulis.',
  'emails.revisedVersionNotify.subject' => 'Versi Revisi telah Diunggah',
  'emails.revisedVersionNotify.body' => 'Editor:<br />
<br />
Versi revisi dari &quot;{$submissionTitle}&quot; telah diunggah oleh penulis {$authorName}.<br />
<br />
URL naskah: {$submissionUrl}<br />
<br />
{$editorialContactSignature}',
  'emails.revisedVersionNotify.description' => 'Email ini dikirim secara otomatis ke editor yang ditugaskan saat penulis mengunggah naskah versi revisi.',
  'emails.notificationCenterDefault.subject' => 'Pesan terkait {$contextName}',
  'emails.notificationCenterDefault.body' => 'Silakan tuliskan pesan Anda.',
  'emails.notificationCenterDefault.description' => 'Pesan default (kosong) yang digunakan di Pengelola Pesan Pusat Notifikasi.',
  'emails.editorDecisionInitialDecline.description' => 'Email ini dikirim kepada penulis jika naskah mereka ditolak oleh editor lebih awal, sebelum masuk ke tahap review',
  'emails.editorDecisionInitialDecline.body' => '
			{$authorName}:<br />
<br />
Kami telah sampai pada keputusan mengenai naskah Anda {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
Keputusannya adalah: Menolak Naskah',
  'emails.editorDecisionInitialDecline.subject' => 'Keputusan Penyunting',
  'emails.editorRecommendation.description' => 'Email ini berasal dari Editor atau Editor Bagian kepada Editor pengambilan keputusan atau Editor Bagian memberi tahu mereka tentang rekomendasi akhir mengenai naskah tersebut.',
  'emails.editorRecommendation.body' => '{$editors}:<br />
<br />
Rekomendasi berkaitan dengan  naskah {$contextName}, &quot;{$submissionTitle}&quot; adalah: {$recommendation}',
  'emails.editorRecommendation.subject' => 'Rekomendasi Penyunting',
  'emails.reviewReinstate.description' => 'Email ini dikirim oleh Editor Bagian kepada Mitra Bestari yang sedang mereview naskah untuk memberi tahu bahwa ulasan mereka yang dibatalkan telah dipulihkan.',
  'emails.reviewReinstate.body' => '{$reviewerName}:<br />
<br />
Kami ingin memulihkan permintaan kami kepada Anda untuk mereview naskah, &quot;{$submissionTitle},&quot; untuk {$contextName}. Kami berharap Anda dapat membantu proses review jurnal kami.<br />
<br />
Jika ada pertanyaan, silakan hubungi saya.',
  'emails.reviewReinstate.subject' => 'Meminta Pemulihan Review',
  'emails.statisticsReportNotification.body' => '
{$name}, <br />
<br />
Laporan kondisi jurnal Anda untuk {$month}, {$year} sudah tersedia. Statistik utama Anda bulan ini tersaji sebagai berikut.<br />
<ul>
	<li>Naskah baru yang masuk bulan ini: {$newSubmissions}</li>
	<li>Naskah ditolak bulan ini: {$declinedSubmissions}</li>
	<li>Naskah yang diterima bulan ini: {$acceptedSubmissions}</li>
	<li>Total naskah dalam sistem: {$totalSubmissions}</li>
</ul>
Login untuk melihat lebih rinci <a href="{$editorialStatsLink}">trend editorial</a> dan <a href="{$publicationStatsLink}">statistik artikel yang dipublikasikan</a>. Salinan lengkap trend bulan ini terlampir.<br />
<br />
Salam Hormat,<br />
{$principalContactSignature}',
  'emails.statisticsReportNotification.description' => 'Email ini dikirim secara otomatis setiap bulan kepada editor dan manajer jurnal untuk menyediakan pratinjau kestabilan sistem.',
  'emails.statisticsReportNotification.subject' => 'Kagiatan redaksi selama {$month}, {$year}',
  'emails.announcement.subject' => '{$title}',
  'emails.announcement.description' => 'Surel ini dikirim ketika terdapat pengumuman baru.',
  'emails.announcement.body' => '<b>{$title}</b><br />
<br />
{$summary}<br />
<br />
Kunjungi website kami untuk melihat <a href="{$url}">pengumuman selengkapnya</a>.',
);