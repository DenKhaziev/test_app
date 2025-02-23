<?php

namespace App\Services;

class CommercialService
{
    static public function getAllData($table, $dateFrom, $dateTo = null) {
        $baseUrl = 'http://' . env('IP') . ':' . env('PORT') . '/api/' . $table . '?key=' . env('KEY') . '&dateFrom=' . $dateFrom . '&dateTo=' . $dateTo . '&page=';
        $page = 1;
        $allData = [];

        do {
            $url = $baseUrl . $page;
            $json = file_get_contents($url);
            $data = json_decode($json, true)['data'];

            if (!empty($data)) {
                $allData = array_merge($allData, $data);
                $page++;
            }
        } while (!empty($data));
        return $allData;
    }
}
