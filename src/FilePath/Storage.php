<?php

namespace rsanchez\Deep\FilePath;

use rsanchez\Deep\Db\Db;
use rsanchez\Deep\Common\StorageInterface;

class Storage implements StorageInterface
{
    protected $db;

    protected $uploadPrefs;

    public function __construct(Db $db, $uploadPrefs = array())
    {
        $this->db = $db;

        if (is_array($uploadPrefs)) {
            foreach ($uploadPrefs as $id => $data) {
                $row = new \stdClass();
                $row->id = $id;
                $row->server_path = $data['server_path'];
                $row->url = $data['url'];
                $this->uploadPrefs[] = $row;
            }
        }
    }

    public function __invoke()
    {
        if (!is_null($this->uploadPrefs)) {
            return $this->uploadPrefs;
        }

        return $this->uploadPrefs = $this->db->table('upload_prefs')
                                        ->select('id', 'server_path', 'url')
                                        ->get();
    }
}
