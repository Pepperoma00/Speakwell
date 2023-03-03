<?php
namespace app\models;

use yii\db\ActiveRecord;

class Logopedista extends ActiveRecord
{
    public static function tableName()
    {
        return 'logopedista';
    }

    public function rules()
    {
        return [
            [['nome', 'cognome', 'email', 'password', 'cellulare', 'indirizzo_studio'], 'required'],
            ['email', 'email'],
            ['email', 'unique'],
        ];
    }
}
