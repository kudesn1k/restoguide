<?php


namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{

    public static function tableName()
    {
        return 'user';
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
    }


    public function getId()
    {
        return $this->id_user;
    }


     */
    public function getAuthKey()
    {
        
    }


    public function validateAuthKey($authKey)
    {
        
    }
}
