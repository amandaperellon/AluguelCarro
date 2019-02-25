<?php

/**
 * This is the model class for table "tb_locacao_carro".
 *
 * The followings are the available columns in table 'tb_locacao_carro':
 * @property integer $id
 * @property integer $locacao_id
 * @property integer $carro_id
 *
 * The followings are the available model relations:
 * @property TbLocacao $locacao
 * @property TbCarro $carro
 */
class LocacaoCarro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_locacao_carro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('locacao_id, carro_id', 'required'),
			array('id, locacao_id, carro_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, locacao_id, carro_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'fk_locacao' => array(self::BELONGS_TO, 'Locacao', 'locacao_id'),
			'fk_carro' => array(self::BELONGS_TO, 'Carro', 'carro_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'locacao_id' => 'Locacao',
			'carro_id' => 'Carro'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('locacao_id',$this->locacao_id);
		$criteria->compare('carro_id',$this->carro_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LocacaoCarro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
