<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function telefone(): BelongsTo // Um funcionário pertence a um telefone
    {
        return $this->belongsTo(Telefone::class); // Define a relação
    }

    public function cargo(): BelongsTo // Um funcionário pertence a um cargo
    {
        return $this->belongsTo(Cargo::class); // Define a relação
    }
}