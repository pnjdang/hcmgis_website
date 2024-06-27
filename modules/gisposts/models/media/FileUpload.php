<?php

namespace app\modules\gisposts\models\media;

use Yii;

/**
 * This is the model class for table "file_upload".
 *
 * @property int $id
 * @property string|null $file_name
 * @property string|null $file_path
 * @property string|null $file_caption
 * @property string|null $file_type
 * @property string|null $file_slug
 * @property string|null $uploaded_at
 */
class FileUpload extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'file_upload';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['file_name', 'file_path', 'file_caption', 'file_slug', 'file_extension'], 'string'],
            [['uploaded_at'], 'safe'],
            [['file_type'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'file_name' => Yii::t('app', 'Tên'),
            'file_path' => Yii::t('app', 'Đường dẫn'),
            'file_caption' => Yii::t('app', 'tiêu đề'),
            'file_type' => Yii::t('app', 'Kiểu file'),
            'file_extension' => Yii::t('app', 'Dạng file'),
            'file_slug' => Yii::t('app', 'File Slug'),
            'uploaded_at' => Yii::t('app', 'Thời gian'),
        ];
    }
}
