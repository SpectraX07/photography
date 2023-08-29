<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'email', 'phone', 'gender', 'status', 'deleted_at', 'updated_at', 'created_at', 'user_name', 'image', 'password_hash'];

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

    public function getDtAdmin(bool $isCount, array $searchData, int $rowperpage,  int $start)
    {
        if ($isCount == 1) {
            return $this->select('id')
                ->when(isset($searchData['name']), static function ($query) use ($searchData) {
                    return $query->where('name', $searchData['name']);
                })->when(isset($searchData['email']), static function ($query) use ($searchData) {
                    return $query->where('email', $searchData['email']);
                })->when(isset($searchData['phone']), static function ($query) use ($searchData) {
                    return $query->where('phone', $searchData['phone']);
                })->where('group_id', 1)->countAllresults();
        } else {
            return $this->select('id, name, email, phone, image, status, gender, created_at')
                ->when($searchData['name'], static function ($query, $name) {
                    $query->where('name', $name);
                })->when($searchData['email'], static function ($query, $email) {
                    $query->where('email', $email);
                })->when($searchData['mobile'], static function ($query, $mobile) {
                    $query->where('mobile', $mobile);
                })->where('group_id', 1)
                ->orderBy('id', 'DESC')
                ->limit((int)$rowperpage, (int)$start)
                ->get()
                ->getResult();
        }
    }
}
