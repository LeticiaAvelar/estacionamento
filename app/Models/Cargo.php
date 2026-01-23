<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cargo extends Model
{
    use SoftDeletes; // Habilita soft deletes

    protected $table = 'cargos'; // Define o nome da tabela

    public $timestamps = true; // Habilita timestamps (created_at e updated_at)

    protected $fillable = ['descricao']; // Campos que podem ser atribuídos em massa

    // Relação com o modelo Funcionario
    public function funcionarios(): HasMany // Um cargo pode ter muitos funcionários
    {
        return $this->hasMany(Funcionario::class, 'cargo_id'); // Define a relação
    }
}
