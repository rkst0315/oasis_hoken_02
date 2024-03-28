以下の内容で応募を受付しました。

- お名前: {{ $entry->name_sei . $entry->name_mei }}
- フリガナ: {{ $entry->name_sei_kana . $entry->name_mei_kana }}
- 生年月日:  {{ $entry['birthday_year'] }}/{{ $entry['birthday_month'] }}/{{ $entry['birthday_day'] }}
- 住所: {{ $entry->zipcode_1 . $entry->pref . $entry->address_1 . $entry->address_2 . $entry->address_3 }}
- 電話番号: {{ $entry['tel_1'] }}
- メールアドレス: {{ $entry['email'] }}
- ご出産予定日: {{ $entry['birthday_child_year'] }}/{{ $entry['birthday_child_month'] }}/{{ $entry['birthday_child_day'] }}

