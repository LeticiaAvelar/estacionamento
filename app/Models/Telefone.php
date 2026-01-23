<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Telefone extends Model
{
    use SoftDeletes; // Habilita soft deletes

    protected $table = 'telefones'; // Define o nome da tabela

    public $timestamps = true; // Habilita timestamps (created_at e updated_at)

    protected $fillable = ['numero']; // Campos que podem ser atribuídos em massa

    // Relação com o modelo Funcionario
    public function funcionario(): BelongsTo // Um telefone pertence a um funcionário
    {
        return $this->belongsTo(Funcionario::class, 'telefone_id'); // Define a relação
    }
}
