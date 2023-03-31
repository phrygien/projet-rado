<?php

namespace App\Interfaces;

interface ISalleInterface
{
    public function getAll();

    public function getSingle($id);

    public function createSalle(array $data);

    public function editSalle($id);

    public function updateSalle($id, array $data);

    public function deleteSalle($id);
}
