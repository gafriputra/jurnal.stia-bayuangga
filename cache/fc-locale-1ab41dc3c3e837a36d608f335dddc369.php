<?php return array (
  'emails.paypalInvestigatePayment.subject' => 'Kegiatan pembayaran paypal yang tidak biasa',
  'emails.paypalInvestigatePayment.body' => 'Open Journal System telah menemukan kegiatan yang tidak biasa yang terkait dengan bantuan pembayaran paypal untuk jurnal {$contextName}. Kegiatan ini mungkin memerlukan investigasi lebih lanjut atau intervensi manual.<br />
                       <br />
Surel ini dibuat oleh plugin PayPal pada OJS.<br />
<br />
Informasi posting penuh untuk permohonan:<br />
{$postInfo}<br />
<br />
Informasi tambahan (jika tersedia):<br />
{$additionalInfo}<br />
<br />
Server vars:<br />
{$serverVars}<br />
',
  'emails.paypalInvestigatePayment.description' => 'Email ini digunakan untuk memberitahukan narahubung utama jurnal bahwa plugin PayPal menemukan kegiatan mencurigakan atau kegiatan yang membutuhkan intervensi manual.',
);