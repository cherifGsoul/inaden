<?php

namespace app\core\db\records;

use Yii;

/**
 * This is the model class for table "node".
 *
 * @property integer $id
 * @property string $guid
 * @property string $title
 * @property string $body
 * @property string $type
 * @property integer $author_id
 * @property integer $update_author
 * @property integer $lft
 * @property integer $rgt
 * @property integer $root
 * @property integer $depth
 * @property string $created_at
 * @property string $updated_at
 */
class Node extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'node';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['guid', 'title', 'type', 'lft', 'rgt', 'root', 'depth'], 'required'],
            [['body', 'type'], 'string'],
            [['author_id', 'update_author', 'lft', 'rgt', 'root', 'depth'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['guid', 'title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('inaden', 'ID'),
            'guid' => Yii::t('inaden', 'Guid'),
            'title' => Yii::t('inaden', 'Title'),
            'body' => Yii::t('inaden', 'Body'),
            'type' => Yii::t('inaden', 'Type'),
            'author_id' => Yii::t('inaden', 'Author ID'),
            'update_author' => Yii::t('inaden', 'Update Author'),
            'lft' => Yii::t('inaden', 'Lft'),
            'rgt' => Yii::t('inaden', 'Rgt'),
            'root' => Yii::t('inaden', 'Root'),
            'depth' => Yii::t('inaden', 'Depth'),
            'created_at' => Yii::t('inaden', 'Created At'),
            'updated_at' => Yii::t('inaden', 'Updated At'),
        ];
    }

    /**
     * @inheritdoc
     * @return NodeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NodeQuery(get_called_class());
    }
}
