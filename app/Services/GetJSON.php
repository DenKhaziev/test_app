<?php

namespace App\Services;

class GetJSON
{
    static public function getTable($table, $dateFrom, $dateTo = null) {
        $baseUrl = 'http://89.108.115.241:6969/api/' . $table . '?key=E6kUTYrYwZq2tN4QEtyzsbEBk3ie&dateFrom=' . $dateFrom . '&dateTo=' . $dateTo . '&page=';
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
