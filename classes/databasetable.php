<?php
	class DatabaseTable{
		public $table;
		
		//insert value into table variable
		function __construct($table){
			$this->table = $table;
		}
		function saveData($record, $pk = ''){
		    try{
		        $returnVal = $this->insertData($record);
		        return $returnVal;
		    }
		    catch(Exception $e){
		        $returnVal = $this->updateData($record, $pk);
		        return $returnVal;
		    }
		}

		function deleteData($records, $data) {
		    global $pdo;
		    $statement = $pdo->prepare("DELETE FROM $this->table WHERE $records = :data");
		    $criteria = [
		            'data' => $data
		    ];
		    $statement->execute($criteria);
		    return true;
		}

		//select statement having where clause
		function select($field, $value) {
		    global $pdo;
		    $stmt = $pdo->prepare("SELECT * FROM $this->table WHERE $field = :value");
		    $criteria = [
		            'value' => $value
		    ];
		    $stmt->execute($criteria);
		    return $stmt;
		}

		//select statement
		function selectAll(){
			global $pdo;
			$stmt = $pdo->prepare("SELECT * FROM $this->table");
			$stmt->execute();
			return $stmt;
		}

		//insert statement
		function insertData($record) {
		    global $pdo;		    
		    $keys = array_keys($record);
		    $implodeKeysWithComma = implode(', ', $keys);
		    $implodeKeysWithCommaColon = implode(', :', $keys);

		    $statement = $pdo->prepare("INSERT INTO $this->table($implodeKeysWithComma) 
		              VALUES (:$implodeKeysWithCommaColon)");
		    $statement->execute($record);
		    return true;
		}
		function updateData($record, $pk){
		    global $pdo;
		    $para = [];
		    foreach ($record as $key => $value) {
		        $para[] = $key . ' = :' . $key;
		    }
		    $paraList = implode(', ', $para);
		    $query = "UPDATE $this->table SET $paraList WHERE $pk = :pk";
		    $record['pk'] = $record[$pk];
		    $statement = $pdo->prepare($query);
		    $statement->execute($record);
		   	return true;
		}
		function selectLast($col_name){
			global $pdo;
			$stmt = $pdo->prepare("SELECT MAX($col_name) FROM $this->table");
			$stmt->execute();
			return $stmt;
		}
		function selectJoin($secondTable, $id){
			global $pdo;
		    $stmt = $pdo->prepare("SELECT * FROM $this->table INNER JOIN $secondTable WHERE $this->table.$id = $secondTable.$id");
		    $stmt->execute();
		    return $stmt;
		}
		function selectJoinWithAnd($secondTable, $pk, $id, $value){
			global $pdo;
		    $stmt = $pdo->prepare("SELECT * FROM $this->table INNER JOIN $secondTable WHERE $this->table.$pk = $secondTable.$pk AND $id = $value");
		    $stmt->execute();
		    return $stmt;
		}

		function selectSum($id, $field, $value){
			global $pdo;
		    $stmt = $pdo->prepare("SELECT COUNT($id) FROM $this->table WHERE $field = $value");
		    $stmt->execute();
		    $fetchValue = $stmt->fetch();
		    return $fetchValue;
		}

	}
 ?>