<?php
namespace App\Models;

use App\Models\BaseModel;
use Ramsey\Uuid\Uuid;

class TeachersHasCourse extends BaseModel 
{    
    /**
     * Table's name
     * @var string
     */
    protected $table = 'teachers_has_courses';
    
    protected $guarded = ['id'];
    
    /**
     * Default keys to return
     * 
     * @var array
     */
    private static $defaultKeysToReturn = [
        'teachers_id','courses_id','rooms_id','classes_id'
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
            'teachers_id' => $values['teachers_id'],
            'courses_id' => $values['courses_id'],
            'rooms_id' => $values['rooms_id'],
            'classes_id' => $values['classes_id'],
        ]);
        return ($create ? ['status' => true, 'message' => 'Ajout de  effectué avec succès !', 'data' => self::find($create)] :
            ['status' => false, 'message' => 'Ajout de  Impossible !']);

    }

    /**
     * Post update
     * 
     * @param TeachersHasCourse $uuid
     * @param array $values
     * }
     * @return mixed
     */
    function uptodate(array $values)
    {
        $create = $this->update([
            'teachers_id' => $values['teachers_id'],
            'courses_id' => $values['courses_id'],
            'rooms_id' => $values['rooms_id'],
            'classes_id' => $values['classes_id'],

            'updated_at' => gmdate('Y-m-d H:i:s'),
        ]);
        return ($create ? ['status' => true, 'message' => 'Mise à jour de  effectuée avec succès !', 'data' => self::find($create)] :
            ['status' => false, 'message' => 'Mise à jour de  Impossible !']);

    }

}
