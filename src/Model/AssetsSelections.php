<?php

namespace rsanchez\Deep\Model;

use Illuminate\Database\Eloquent\Model;

class AssetsSelections extends Model
{
    protected $table = 'assets_selections';
    protected $primaryKey = 'entry_id';

    public $incrementing = false;

    public function files()
    {
        return $this->belongsTo('\\rsanchez\\Deep\\Model\\AssetsFiles', 'file_id', 'file_id');
    }
}
