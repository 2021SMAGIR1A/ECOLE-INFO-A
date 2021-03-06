<?php
namespace App\Models;

use App\Models\BaseModel;
use Ramsey\Uuid\Uuid;

class Test extends BaseModel 
{    
    /**
     * Table's name
     * @var string
     */
    protected $table = 'tests';
    
    protected $guarded = ['id'];
    
    /**
     * Default keys to return
     * 
     * @var array
     */
    private static $defaultKeysToReturn = [
        'id','uuid','title','coef','datetest','courses_id','classes_id'
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
            'coef' => $values['coef'],
            'datetest' => $values['datetest'],
            'courses_id' => $values['courses_id'],
            'classes_id' => $values['classes_id'],
        ]);
        return ($create ? ['status' => true, 'message' => 'Ajout de Evaluation effectué avec succès !', 'data' => self::find($create)] :
            ['status' => false, 'message' => 'Ajout de Evaluation Impossible !']);

    }

    /**
     * Post update
     * 
     * @param Test $uuid
     * @param array $values
     * }
     * @return mixed
     */
    function uptodate(array $values)
    {
        $create = $this->update([
            'title' => $values['title'],
            'coef' => $values['coef'],
            'datetest' => $values['datetest'],
            'courses_id' => $values['courses_id'],
            'classes_id' => $values['classes_id'],

            'updated_at' => gmdate('Y-m-d H:i:s'),
        ]);
        return ($create ? ['status' => true, 'message' => 'Mise à jour de Evaluation effectuée avec succès !', 'data' => self::find($create)] :
            ['status' => false, 'message' => 'Mise à jour de Evaluation Impossible !']);

    }

}
