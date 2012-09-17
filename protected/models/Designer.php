<?php

/**
 * This is the model class for table "designer".
 *
 * The followings are the available columns in table 'designer':
 * @property integer $id
 * @property string $email
 * @property string $education
 * @property string $bio
 * @property string $link
 * @property string $userid
 * @property string $password
 *
 * The followings are the available model relations:
 * @property Portfolio[] $portfolios
 */
class Designer extends ImageHaver {
        public $password_repeat;
        public $password_new;
	public $passwordUnHashed;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Designer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'designer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, displayname', 'required'),
			array('email, userid, password', 'length', 'max'=>64),
			array('email', 'email'),
			array('email', 'unique'),
			array('layout', 'required', 'on'=>'update'),
			array('password', 'required', 'on'=>'insert'),
			array('password', 'checkPassword', 'on'=>'update'),
			array('password', 'unsafe'),

			array('education, link', 'length', 'max'=>128),
			array('bio', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, email, education, bio, link, userid, password', 'safe', 'on'=>'search'),
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
			'portfolios' => array(self::HAS_MANY, 'Portfolio', 'designer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
                        'password_repeat' => 'Confirm Password',
			'email' => 'Email',
			'education' => 'Education',
			'bio' => 'About me',
			'link' => 'Link',
			'userid' => 'Userid',
			'password' => 'Password',
		);
	}

	public function save($saveImage = true) {
	  if (!parent::save()) return false;
	  if ($saveImage) {
            $this->updateImage('cover_photo');
            $this->updateImage('bg_photo');
            $this->updateImage('avatar_photo');
	  }
	  return true;
	}

	public function generatePassword($length=8) {
	  $chars = "abcdefghijkmnopqrstuvwxyz023456789";
	  srand((double)microtime()*1000000);
	  $i = 0;
	  $pass = '' ;

	  while ($i <= $length) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass .= $tmp;
            $i++;
	  }
	  return $pass;
	}

	public function encryptPassword() {
            $this->passwordUnHashed = $this->password;
            $this->password = md5($this->password);
        }

	public function checkPassword($attribute, $params) {
            $password = $this->password_new;
            $password_repeat = $this->password_repeat;

	    if ($password != '') {
                $password_repeat = $this->password_repeat;
                if ($password != $password_repeat) {
                    $this->addError('password',"Password and confirm don't match");
                    return false;
                } else {
                    #Yii::log(__FUNCTION__."> match", 'debug');
                }

                $this->password = $this->password_new;
            }
            return true;
        }

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('bio',$this->bio,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('userid',$this->userid,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}