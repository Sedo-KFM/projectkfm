<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property int $id
 * @property string $fio
 * @property string $gender
 * @property string $birthdate
 * @property int $status_id
 * @property string $project_role
 *
 * @property PersonStatus $status
 * @property AssociationPerson-project $id0
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'gender', 'birthdate', 'status_id', 'project_role'], 'required'],
            [['fio', 'gender', 'project_role'], 'string'],
            [['birthdate'], 'safe'],
            [['status_id'], 'integer'],
            /*[['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => PersonStatus::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => AssociationPerson-project::className(), 'targetAttribute' => ['id' => 'person_id']],*/
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'gender' => 'Gender',
            'birthdate' => 'Birthdate',
            'status_id' => 'Status ID',
            'project_role' => 'Project Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(PersonStatus::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(AssociationPerson-project::className(), ['person_id' => 'id']);
    }
}
