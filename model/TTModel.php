<?php
/**
* модель для тестового модуля
*/
class TT extends ObjectModel
{

    public $id;

    public $t1;

    public $t2;

    public static $definition = array(
        'table' => 'tt',
        'primary' => 'id',
        'fields' => array(
            't1' => array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),
            't2' => array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),
        ),
    );

    public static function getT1()
    {
        $sql = 'SELECT `t1`
                FROM `'._DB_PREFIX_.'tt` 
                WHERE `id`=(
                    SELECT max(`id`) 
                    FROM `'._DB_PREFIX_.'tt`
                    )';
        return Db::getInstance()->getValue($sql);
    }

    public static function getT2()
    {
        $sql = 'SELECT `t2`
                FROM `'._DB_PREFIX_.'tt` 
                WHERE `id`=(
                    SELECT max(`id`) 
                    FROM `'._DB_PREFIX_.'tt`
                    )';
        return Db::getInstance()->getValue($sql);
    }

}