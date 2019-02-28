<?php

/**
 * This is the model class for table "tb_locacao".
 *
 * The followings are the available columns in table 'tb_locacao':
 * @property integer $id
 * @property string $data_inicial
 * @property string $data_final
 * @property string $valor_total
 * @property integer $carro_id
 * @property integer $cliente_id
 *
 * The followings are the available model relations:
 * @property TbCarro $carro
 * @property TbCliente $cliente
 */
class Locacao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_locacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('data_inicial, data_final, valor_total, cliente_id', 'required'),
			array( 'cliente_id', 'numerical', 'integerOnly'=>true),
			array('valor_total', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, data_inicial, data_final, valor_total, cliente_id', 'safe', 'on'=>'search'),
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
			'fk_cliente' => array(self::BELONGS_TO, 'Cliente', 'cliente_id'),
			'fk_locacaocarro' => array(self::HAS_MANY, 'LocacaoCarro', 'locacao_id')
	);}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'data_inicial' => 'Data Inicial',
			'data_final' => 'Data Final',
			'valor_total' => 'Valor Total',
			'cliente_id' => 'Cliente',
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
		$criteria->compare('data_inicial',$this->data_inicial,true);
		$criteria->compare('data_final',$this->data_final,true);
		$criteria->compare('valor_total',$this->valor_total,true);
		$criteria->compare('cliente_id',$this->cliente_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Locacao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function afterFind()
	{
	    $newDate = DateTime::createFromFormat('Y-m-d', $this->data_inicial);
	    $this->data_inicial = $newDate->format('d/m/Y');

	    $newDate = DateTime::createFromFormat('Y-m-d', $this->data_final);
	    $this->data_final = $newDate->format('d/m/Y');

	    return parent::afterFind();
	}

	public function beforeSave()
	{

		if(strpos($this->data_inicial, '/') !== false){

	    $newDate = DateTime::createFromFormat('d/m/Y', $this->data_inicial);

	    $this->data_inicial = $newDate->format('Y-m-d');
		
		}

		if(strpos($this->data_final, '/') !== false){

	    $newDate = DateTime::createFromFormat('d/m/Y', $this->data_final);

	    $this->data_final = $newDate->format('Y-m-d');
		
		}

	    return parent::beforeSave();
	}

	public function beforeDelete(){

		foreach ($this->fk_locacaocarro as $locacaoCarro) {
			
			if($locacaoCarro->locacao_id == $this->id){

				$locacaoCarro->delete();
			}

		}

		return parent::beforeDelete();
	}

}
