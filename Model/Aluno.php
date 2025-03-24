<?php

namespace App\Model;

use App\DAO\AlunoDAO;
use Exception;

final class Aluno extends Model
{
    public ?int $id = null;

    public ?string $Nome
    {
        set
        {
            if(strlen($value) < 3)
                throw new Exception("Nome deve ter no mínimo 3 caracteres.");
            
            $this->Nome = $value; 
        }

        get => $this->Nome ?? null;
    }

    public ?string $RA
    {
        set
        {
            if(empty($value))
                throw new Exception("Preencha o RA.");

            $this->RA = $value; 
        }

        get => $this->RA ?? null;
    }
}