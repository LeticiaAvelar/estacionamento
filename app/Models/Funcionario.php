<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Funcionario extends Model
{
    use SoftDeletes; // Habilita soft deletes

    protected $table = 'funcionarios'; // Define o nome da tabela

    public $timestamps = true; // Habilita timestamps (created_at e updated_at)

    protected $fillable = [
        'nome', 
        'cargo_id', 
        'salario', 
        'telefone_id',
        'hora_entrada',
        'hora_saida',
        'email',
        'chave_pix'
    ]; // Campos que podem ser atribuídos em massa

    public function cargo(): HasOne // Um funcionário pertence a um cargo
    {
        return $this->hasOne(Cargo::class); // Define a relação
    }

    public function telefone(): HasOne // Um funcionário pertence a um telefone
    {
        return $this->hasOne(Telefone::class); // Define a relação
    }
}
