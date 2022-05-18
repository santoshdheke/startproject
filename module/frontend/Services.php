<?php

namespace Module\Frontend;

use Illuminate\Foundation\Application;

trait Services
{
    private $adminRepository;

    public function getAll()
    {
        return $this->adminRepository->all();
    }

    public function store($data)
    {
        unset($data["_token"]);
        $this->adminRepository->store($data);
    }

    public function find($id)
    {
        $bed=$this->adminRepository->findOrFail($id);
        return $bed;
    }

    public function update($data, $id)
    {
        $this->find($id);
        $this->adminRepository->update($id,$data);
    }

    public function delete($id)
    {
        $this->find($id);
        $this->adminRepository->delete($id);
    }

}