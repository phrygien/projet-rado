<?php

namespace App\Repository;
use App\Interfaces\IEleveInterface;
use App\Interfaces\ISalleInterface;
use App\Models\Salle;

class SalleRepository implements ISalleInterface
{

    public function getAll()
    {
        return Salle::paginate(5);
    }

    public function getSingle($id)
    {
        return Salle::findOrFail($id);
    }

    public function createSalle(array $data)
    {
        return Salle::create($data);
    }

    public function editSalle($id)
    {
        return Salle::findOrFail($id);
    }

    public function updateSalle($id, array $data)
    {
        Salle::findOrFail($id)->update([

        ]);
    }

    public function deleteSalle($id)
    {
        return Salle::findOrFail($id)->delete();
    }

}
