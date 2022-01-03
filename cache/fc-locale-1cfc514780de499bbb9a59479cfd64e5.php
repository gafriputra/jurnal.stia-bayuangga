<?php return array (
  'emails.orcidRequestAuthorAuthorization.description' => 'Template surel ini digunakan untuk meminta akses rekaman ORCID penulis.',
  'emails.orcidRequestAuthorAuthorization.body' => 'Yang Kami Hormati {$authorName},<br>
<br>
Anda telah terdaftar sebagai penulis naskah "{$submissionTitle}" pada {$contextName}.
<br>
<br>
Ijinkanlah kami menambahkan id ORCID Anda pada naskah ini serta menambahkan naskah pada profil ORCID Anda pada terbitan.<br>
Buka tautan web ORCID, login dan beri akses sesuai petunjuk berikut.<br>
<a href="{$authorOrcidUrl}"><img id="orcid-id-logo" src="https://orcid.org/sites/default/files/images/orcid_16x16.png" width=\'16\' height=\'16\' alt="ORCID iD icon" style="display: block; margin: 0 .5em 0 0; padding: 0; float: left;"/>Register atau hubungkan iD ORCID Anda</a><br/>
<br>
<br>
<a href="{$orcidAboutUrl}">nformasi selengkapnya tentang ORCID pada {$contextName}</a><br/>
<br>
Bila ada pertanyaan, silakan hubungi kami.<br>
<br>
{$principalContactSignature}<br/>
',
  'emails.orcidRequestAuthorAuthorization.subject' => 'Meminta akses rekaman ORCID',
  'emails.orcidCollectAuthorId.description' => 'Template surel ini digunakan untuk mengumpulkan id ORCID penulis.',
  'emails.orcidCollectAuthorId.body' => 'Yang Kami Hormati {$authorName},<br/>
<br/>
Anda telah terdaftar sebagai penulis naskah{$contextName}.<br/>
Untuk mengonfirmasi kepenulisan tersebut, tambahkanlah id ORCID Anda pada naskah tersebut dengan membuka tautan berikut ini.<br/>
<br/>
<a href="{$authorOrcidUrl}"><img id="orcid-id-logo" src="https://orcid.org/sites/default/files/images/orcid_16x16.png" width=\'16\' height=\'16\' alt="ORCID iD icon" style="display: block; margin: 0 .5em 0 0; padding: 0; float: left;"/>Register atau hubungkan iD ORCID Anda</a><br/>
<br/>
<br>
<a href="{$orcidAboutUrl}">Informasi selengkapnya tentang ORCID pada {$contextName}</a><br/>
<br/>
Bila ada pertanyaan, silakan hubungi kami.<br/>
<br/>
{$principalContactSignature}<br/>
',
  'emails.orcidCollectAuthorId.subject' => 'ORCID Naskah',
);