<?php return array (
  'emails.manualPaymentNotification.subject' => 'Pemberitahuan Pembayaran Manual',
  'emails.manualPaymentNotification.body' => 'Pembayaran manual harus diproses untuk jurnal {$contextName} dan pengguna {$userFullName} (username &quot;{$userName}&quot;).<br />
<br />
Item yang akan dibayar adalah &quot;{$itemName}&quot;.<br />
Biayanya {$itemCost} ({$itemCurrencyCode}).<br />
<br />
Surat elektronik ini dibuat oleh plugin Pembayaran Manual OJS.',
  'emails.manualPaymentNotification.description' => 'Email ini digunakan untuk memberitahukan kontak manajer jurnal bahwa pembayaran manual dibutuhkan.',
);