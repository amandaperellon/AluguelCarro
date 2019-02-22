<?php

/**
 * This is the model class for table "tb_carro".
 *
 * The followings are the available columns in table 'tb_carro':
 * @property integer $id
 * @property string $valor_diario
 * @property integer $modelo_id
 * @property string $descricao
 *
 * The followings are the available model relations:
 * @property TbModelo $modelo
 * @property TbLocacao[] $tbLocacaos
 */
class Carro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_carro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('valor_diario, modelo_id', 'required'),
			array('modelo_id', 'numerical', 'integerOnly'=>true),
			array('valor_diario', 'length', 'max'=>10),
			array('descricao', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, valor_diario, modelo_id, descricao', 'safe', 'on'=>'search'),
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
			'fk_modelo' => array(self::BELONGS_TO, 'Modelo', 'modelo_id'),
			'locacaos' => array(self::HAS_MANY, 'Locacao', 'carro_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'valor_diario' => 'Valor Diario',
			'modelo_id' => 'Modelo',
			'descricao' => 'Descricao',
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
		$criteria->compare('valor_diario',$this->valor_diario,true);
		$criteria->compare('modelo_id',$this->modelo_id);
		$criteria->compare('descricao',$this->descricao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Carro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
