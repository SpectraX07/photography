<?php

namespace App\Models;

use CodeIgniter\Model;

class AdvertisementModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'advertisements';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'description', 'status', 'image', 'created_at', 'updated_at', 'deleted_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'int';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAdPosts(bool $isCount, array $searchData, int $rowperpage,  int $start)
    {
        if ($isCount == 1) {
            return $this->select('id')->where('deleted_at', null)->countAllresults();
        } else {
            return $this->select('id, title, image, status, created_at')->orderBy('id', 'DESC')
                ->where('deleted_at', null)
                ->limit((int)$rowperpage, (int)$start)
                ->get()->getResult();
        }
    }
}
