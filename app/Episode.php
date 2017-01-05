<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Episode extends Model
{
    public $supportedFileTypes = [
        'opus',
        'm4a',
    ];

    public function getStoredEpisodes()
    {
        return array_filter(Storage::allFiles(), function($file) {
            return in_array(pathinfo($file)['extension'], $this->supportedFileTypes);
        });
    }
}
