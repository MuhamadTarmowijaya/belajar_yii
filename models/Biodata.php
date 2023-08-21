<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "biodata".
 *
 * @property int $id_biodata
 * @property string $nama
 * @property string $alamat
 */
class Biodata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'biodata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat'], 'required'],
            [['id_biodata'], 'integer'],
            [['nama', 'alamat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_biodata' => 'Id Biodata',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
        ];
    }
}
