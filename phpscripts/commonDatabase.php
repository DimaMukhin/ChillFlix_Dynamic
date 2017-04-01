<?php
	// execute query and return rows
	function execute_query($conn, $sql)
	{
		return $conn->query($sql);
	}
	
	// execute query and return row
	function get_row($conn, $table, $condition)
	{
		$sql = "SELECT * FROM $table WHERE $condition";
		return execute_query($conn, $sql)->fetch_assoc();
	}
	
	// execute query and return column
	function get_column($conn, $column, $table, $condition)
	{
		$row = get_row($conn, $table, $condition);
		return $row[$column];
	}
?>