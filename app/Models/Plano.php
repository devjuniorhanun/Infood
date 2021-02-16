<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Traits\Uuid;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Spatie\Permission\Traits\HasRoles;

class Plano extends Model
{
    use HasFactory, SoftDeletes;

    use SoftDeletes;
    use LogsActivity;
    use Uuid;
    use CrudTrait;
    use HasRoles;

    // Gravação do Log
    protected static $logName = 'Plano'; // Nome do Log
    protected static $logAttributes = ['*']; // Pega todos os campos da entidade
    protected static $logOnlyDirty = true;
    protected static $submitEmptyLogs = false;

    // Define o nome da tabela
    protected $table = 'planos';

    // Chave Primaria
    protected $primaryKey = 'id';

    // Define o campo deleted_at, ultilizado para exclusão com modo de segurança
    protected $dates = ['deleted_at'];

    //Define os campos da entidade
    protected $fillable = [
        'uuid',
        'nome',
        'url',
        'valor',
        'descricao',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        //'valor' => 'double',
    ];


    public function tenants()
    {
        return $this->hasMany(Tenant::class);
    }

    public function detalhePlanos()
    {
        return $this->hasMany(DetalhePlano::class);
    }
}
