<?php

namespace App\Interfaces;


use App\Models\Project;

interface ProjectRepositoryInterface
{
    public function all();
    public function create($data);
    public function find($id);
    public function update($id, $data);
    public function delete($id);
}

?>

