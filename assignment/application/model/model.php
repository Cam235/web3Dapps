<?php
class Model {

	public $dbhandle;
	

	public function __construct()
	{

		$dsn = 'sqlite:./db/test1.db';
		

		try {	

			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));

		}
		catch (PDOEXception $e) {
			echo "I'm sorry, Martin. I'm afraid I can't connect to the database!";

        	print new Exception($e->getMessage());
    	}
	}
	
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, brand TEXT, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetBrand()
	{

		return array("-", "Agua Montana", "Agua Limon","Agua Fresa");
	}

	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (1, 'Aqua Montana', 'X3D Aqua Montana Model', 'string_2', 'string_3','string_4','string_5'); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (2, 'Aqua Limon', 'X3D Aqua Limon Model', 'string_2', 'string_3','string_4','string_5'); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (3, 'Aqua Fresa', 'X3D Aqua Fresa Model', 'string_2', 'string_3','string_4','string_5'); ");
			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{

			$sql = 'SELECT * FROM Model_3D';

			$stmt = $this->dbhandle->query($sql);

			$result = null;

			$i=-0;

			while ($data = $stmt->fetch()) {

				$result[$i]['brand'] = $data['brand']; 
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				$result[$i]['modelTitle'] = $data['modelTitle'];
				$result[$i]['modelSubtitle'] = $data['modelSubtitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];

				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}

		$this->dbhandle = NULL;

		return $result;
	}
	

	public function model3D_info()
	{

		return array(
			'model_1' => 'Agua Montana 3D Image 1',
			'image3D_1' => 'montana_1',

			'model_2' => 'Agua Montana 3D Image 2',
			'image3D_2' => 'montana_2',

			'model_3' => 'Agua Limon 3D Image 1',
			'image3D_3' => 'limon_1',

			'model_4' => 'Agua Limon 3D Image 2',
			'image3D_4' => 'limon_2',

			'model_5' => 'Agua Fresa 3D Image 1',
			'image3D_5' => 'fresa_1',

			'model_6' => 'Agua Fresa 3D Image 2',
			'image3D_6' => 'fresa_2'
		);
	}
}
?>