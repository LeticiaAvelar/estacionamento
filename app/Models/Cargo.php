<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cargo extends Model
{
    use SoftDeletes; // Habilita soft deletes

    protected $table = 'cargos'; // Define o nome da tabela

    public $timestamps = true; // Habilita timestamps (created_at e updated_at)

    protected $fillable = ['descricao']; // Campos que podem ser atribuídos em massa

    // Relação com o modelo Funcionario
    public function funcionario(): BelongsTo // Um cargo pode ter muitos funcionários
    {
        return $this->BelongsTo(Funcionario::class); // Define a relação
    }
}
