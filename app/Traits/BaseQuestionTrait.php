<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait BaseQuestionTrait
{
    public static function bootBaseQuestionTrait()
    {
        // when the attribute type is not set, set it to the current classname
        // optionally, you can skip the step for checking if the value is not
        // so you can force the type to be the current class.
        static::creating(function (Model $model) {
            if (!array_key_exists('type', $model->getAttributes()) || ! $model->getAttribute('type')) {
                $model->forceFill([
                    'type' => get_class(new static)
                ]);
            }
        });
    }

    /**
     * @param array $attributes
     * @param null $connection
     * @return mixed
     */
    public function newFromBuilder($attributes = [], $connection = null)
    {
        if ( property_exists($attributes, 'type') && class_exists($attributes->type) ) {
            $model = new $attributes->type;
            $model->exists = true;

            // still use the table from the main model
            $model->setTable($this->getTable());
        } else {
            $model = $this->newInstance([], true);
        }

        $model->setRawAttributes((array) $attributes, true);

        $model->setConnection($connection ?: $this->getConnectionName());

        $model->fireModelEvent('retrieved', false);

        return $model;
    }
}