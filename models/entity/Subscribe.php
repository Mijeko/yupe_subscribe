<?php

class Subscribe extends yupe\models\YModel
{
	public function tableName()
	{
		return "alttur_subscribe";
	}

	public function rules()
	{
		return [
			['email', 'required'],
			['email', 'unique'],
		];
	}


}