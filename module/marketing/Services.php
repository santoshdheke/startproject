<?php

namespace Module\Marketing;


trait Services
{
    private $marketingRepository;

    public function getAll()
    {
        return $this->marketingRepository->all();
    }

    public function store($data)
    {
        unset($data["_token"]);
        $this->marketingRepository->store($data);
    }

    public function find($id)
    {
        $bed=$this->marketingRepository->findOrFail($id);
        return $bed;
    }

    public function update($data, $id)
    {
        $this->find($id);
        $this->marketingRepository->update($id,$data);
    }

    public function delete($id)
    {
        $this->find($id);
        $this->marketingRepository->delete($id);
    }

}