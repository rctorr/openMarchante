<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * EntryForm is the model behind the entry form.
 */
class EntryForm extends Model
{
    public $name;
    public $email;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name and email are both required
            [['name', 'email'], 'required'],
            // email is validated by email()
            ['email', 'email'],
        ];
    }
}
