<?php
namespace App\Models;

use App\Models\BaseModel;
use Ramsey\Uuid\Uuid;

class Mark extends BaseModel 
{    
    /**
     * Table's name
     * @var string
     */
    protected $table = 'marks';
    
    protected $guarded = ['id'];
    
    /**
     * Default keys to return
     * 
     * @var array
     */
    private static $defaultKeysToReturn = [
        'id','uuid','mark','observations','tests_id','students_id'
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
            'mark' => $values['mark'],
            'observations' => $values['observations'],
            'tests_id' => $values['tests_id'],
            'students_id' => $values['students_id'],
        ]);
        return ($create ? ['status' => true, 'message' => 'Ajout de Note effectué avec succès !', 'data' => self::find($create)] :
            ['status' => false, 'message' => 'Ajout de Note Impossible !']);

    }

    /**
     * Post update
     * 
     * @param Mark $uuid
     * @param array $values
     * }
     * @return mixed
     */
    function uptodate(array $values)
    {
        $create = $this->update([
            'mark' => $values['mark'],
            'observations' => $values['observations'],
            'tests_id' => $values['tests_id'],
            'students_id' => $values['students_id'],

            'updated_at' => gmdate('Y-m-d H:i:s'),
        ]);
        return ($create ? ['status' => true, 'message' => 'Mise à jour de Note effectuée avec succès !', 'data' => self::find($create)] :
            ['status' => false, 'message' => 'Mise à jour de Note Impossible !']);

    }

}
