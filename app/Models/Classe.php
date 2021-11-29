<?php
namespace App\Models;

use App\Models\BaseModel;
use Ramsey\Uuid\Uuid;

class Classe extends BaseModel 
{    
    /**
     * Table's name
     * @var string
     */
    protected $table = 'classes';
    
    
    /**
     * Default keys to return
     * 
     * @var array
     */
    private static $defaultKeysToReturn = [
        'id','uuid','title','description','fields_id'
    ];

    /**
     * Get All
     * 
     * @return mixed
     */
    static function getAll()
    {
        return self::whereNull('deleted_at')->get(static::$defaultKeysToReturn);
    }

    /**
     * Get Find
     * 
     * @param String $uuid
     * @return mixed
     */
    static function find(String $uuid)
    {
        return self::where('uuid', $uuid)->whereNull('deleted_at')->first(static::$defaultKeysToReturn);
    }

    /**
     * Post store
     * 
     * @param array $values
     * @return mixed
     */
    static function store(array $values)
    {
        $create = self::create([
            'uuid' => Uuid::uuid4(),
            'title' => $values['title'],
            'description' => $values['description'],
            'fields_id' => $values['fields_id'],
        ]);
        return ($create ? ['status' => true, 'message' => 'Ajout de  effectué avec succès !', 'data' => self::find($create)] :
            ['status' => false, 'message' => 'Ajout de  Impossible !']);

    }

    /**
     * Post update
     * 
     * @param Classe $uuid
     * @param array $values
     * }
     * @return mixed
     */
    function uptodate(array $values)
    {
        $create = $this->update([
            'title' => $values['title'],
            'description' => $values['description'],
            'fields_id' => $values['fields_id'],

            'updated_at' => gmdate('Y-m-d H:i:s'),
        ]);
        return ($create ? ['status' => true, 'message' => 'Mise à jour de  effectuée avec succès !', 'data' => self::find($create)] :
            ['status' => false, 'message' => 'Mise à jour de  Impossible !']);

    }

}
