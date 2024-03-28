<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Entry;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class PageController extends Controller
{
    //

    public function home()
    {
        return view('admin.home');
    }

    public function download()
    {
        $headers = [
            'お名前：姓', 'お名前：名', 'お名前：セイ', 'お名前：メイ',
            'メールアドレス', '性別',
            '生年月日：年', '生年月日：月', '生年月日：日',

            '郵便番号1', '郵便番号2', '都道府県', '市区町村', '番地', '建物・マンション・表札名',

            '電話番号1', '電話番号2', '電話番号3', '職業',
            
            '出産予定日または一番小さいお子様の生年月日',
            'お子様の人数（妊娠中のお子様も含む）',
            '貯蓄や保険で最も該当するもの',

            '応募プレゼント',

            '応募日時',
        ];

        $entriesQuery = Entry::orderBy('id', 'desc');
        
        $response = new StreamedResponse(function() use ($entriesQuery, $headers) {

            set_time_limit( 30 );

            // Open output stream
            $handle = fopen('php://output', 'w');

            // BOM
            fwrite($handle, chr(0xEF) . chr(0xBB) . chr(0xBF));

            // Add CSV headers
            fputcsv($handle, $headers);

            $presents = config('constant.presents');

            // Get all entries
            $entriesQuery->chunk(50, function ($entries) use ($handle, $presents) {
                foreach ($entries as $entry) {
                    // Add a new row with data

                    $birthday_child = sprintf('%04d%02d%02d', $entry->birthday_child_year, $entry->birthday_child_month, $entry->birthday_child_day);
                    $present = @strip_tags( $presents[$entry->present]['text'] );

                    fputcsv($handle, [
                        $entry->name_sei, $entry->name_mei,
                        $entry->name_sei_kana, $entry->name_mei_kana,

                        $entry->email,
                        $entry->sex,
            
                        $entry->birthday_year, $entry->birthday_month, $entry->birthday_day,
            
                        $entry->zipcode_1, $entry->zipcode_2, $entry->pref,
                        $entry->address_1, $entry->address_2,$entry->address_3,
            
                        $entry->tel_1, $entry->tel_2, $entry->tel_3, $entry->job,
                        
                        $birthday_child,
            
                        $entry->num,
                        $entry->ex,

                        $present,

                        $entry->created_at,
                    ]);
                }
            });

            // Close the output stream
            fclose( $handle );
        }, 200, [
            'Content-Encoding' => 'UTF-8',
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="entries.csv"',
        ]);

        return $response;
    }
}
