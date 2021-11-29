<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BaseModel extends Model
{
    use SoftDeletes, HasFactory;

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     * [boot Model boot event]
     *
     * @return void [type]  [return description]
     */
    static function boot()
    {
        static::creating(
            function ($model) {
                $model->uuid = (string) Str::uuid();
                /*$model->created_by = Auth::id() ?? 1;
                $model->updated_by = Auth::id() ?? 1;*/
            }
        );

        /*static::updating(
            function ($model) {
                $model->updated_by = Auth::id() ?? 1;
            }
        );

        static::deleting(
            function ($model) {
                $model->update(
                    [
                        'deleted_by' => Auth::id() ?? 1,
                    ]
                );
            }
        );*/

        parent::boot();
    }
}
