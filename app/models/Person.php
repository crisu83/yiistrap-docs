<?php
class Person extends CModel
{
	public $id;
	public $firstName;
	public $lastName;
	public $username;

	public function attributeNames()
	{
		return array(
			'id',
			'firstName',
			'lastName',
			'username',
		);
	}

    public function rules()
    {
        return array(
            array('id, firstName, lastName, username', 'safe'),
        );
    }

    public function search()
    {
        $mark = new Person();
        $mark->id = 1;
        $mark->firstName = 'Mark';
        $mark->lastName = 'Otto';
        $mark->username = '@mdo';

        $jacob = new Person();
        $jacob->id = 2;
        $jacob->firstName = 'Jacob';
        $jacob->lastName = 'Thornton';
        $jacob->username = '@fat';

        $larry = new Person();
        $larry->id = 3;
        $larry->firstName = 'Larry';
        $larry->lastName = 'the Bird';
        $larry->username = '@twitter';

        $rawData = array($mark, $jacob, $larry);

        // Cowboy filtering
        foreach ($rawData as $i => $row)
            foreach ($this->attributes as $key => $value)
                if (isset($row[$key]) && !empty($value) && stripos($row[$key], $value) === false)
                    unset($rawData[$i]);

        return new CArrayDataProvider($rawData, array(
			'pagination' => array(
				'pageSize' => 2,
			),
            'sort' => array(
                'attributes' => array('id', 'firstName', 'lastName', 'username'),
            ),
        ));
    }
}
