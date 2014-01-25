<?php
$musteri1 = array(
    'ad'=>'Hasan',
    'soyad'=>'Tokatlı',
    'email'=>'cehasan@gmail.com',
    'adres'=>array(
        'ev'=>'Eyüp',
        'fatura'=>'Beşiktaş'
    ),
    'banka'=>array(
        array(
            'bankaadi'=>'Garanti Bank',
            'subekod'=>6523,
            'hesapno'=>61546546,
            'ekbilgi'=>'maas hesabı'
        ),
        array(
            'bankaadi'=>'İş Bankası',
            'subekod'=>9854,
            'hesapno'=>332315,
            'ekbilgi'=>'kişisel hesabı'
        )        
    )
);

//müşreti adı yazdırılır
echo $musteri1['ad'] . '<br>';

//müşteri fatura adresini yazdırma
echo $musteri1['adres']['fatura'] . '<br>';

//2. banka hesap bilgilerine ulaşma
echo $musteri1['banka'][1]['hesapno'];