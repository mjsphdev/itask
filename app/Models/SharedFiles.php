<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SharedFiles extends Model
{   
    protected $table = 'shared_files';

    protected $fillable = [
        'id', 'card_ref', 'file_name', 'file_path'
    ];
}
