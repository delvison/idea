<?php

	include_once $_SERVER['DOCUMENT_ROOT']. '/idea/lib/db_helper.php';
	include_once $_SERVER['DOCUMENT_ROOT']. '/idea/config/db_config.php';

	/**
	*  This script defines all functions responsible for dealing with idea posts.
	*  @author nuwan
	*/



	/**
	* Creates a new Idea
	* @param $username The name of the user who posted the Idea
	* @param $idea The content of the Idea
	* @author nuwan
	*/
	function create_idea($username,$idea)
	{
		// TODO: receive username from session
		// global variables from config/db_config.php

		global $idea_db;
		global $idea_db_table;
		global $db_hostname;
		global $db_user;
		global $db_password;

		//get current date - time
		$date = date("Y-m-d H:i:s");

		//create query : a new Idea has zero likes initially
		$sql = "INSERT INTO $idea_db_table (id, username, post, likes, date_created)"
		. " VALUES('NULL', '$user_name', '0', '$idea', '$date')";

		return send_query($sql, $db_hostname, $db_user, $db_password, $idea_db);
	}

	/**
	* Gets an Idea of a given ID from the database
	* @param $idea_id The ID of the Idea to be fetched
	* @author nuwan
	*/
	function get_idea($idea_id)
	{
		// global variables from config/db_config.php
		global $idea_db;
		global $idea_db_table;
		global $db_hostname;
		global $db_user;
		global $db_password;

		$sql = "SELECT * FROM ideas WHERE id = '$idea_id'";

		return receive_query($sql, $db_hostname, $db_user, $db_password, $idea_db);
	}

	/**
	* Updates an Idea in the database
	* @param $idea_id ID of the Idea to be updated
	* @param $new_idea New Idea to replace the old
	* @author nuwan
	*/
	function update_idea($idea_id, $new_idea)
	{
		// global variables from config/db_config.php
		global $idea_db;
		global $idea_db_table;
		global $db_hostname;
		global $db_user;
		global $db_password;

		// get current date - time
		$date = date("Y-m-d H:i:s");

		$sql = "UPDATE ideas SET post = '$new_idea' WHERE ideas.id = '$idea_id'";

		//called from lib/db_helper.php
		return send_query($sql, $db_hostname, $db_user, $db_passsword, $idea_db);
	}

	/**
	* Removes an Idea of a given ID from the database
	* @param $idea_id The ID of the Idea to be removed
	* @author nuwan
	*/
	function remove_idea($idea_id)
	{
		//global varibales from config/db_config
		global $idea_db;
		global $idea_db_table;
		global $db_hostname;
		global $db_user;
		global $db_password;

	  $sql = "DELETE FROM	ideas WHERE ideas.idea_id = '$idea_id'";

	  return send_query($sql, $db_hostname, $db_user, $db_password, $idea_db);
	}

	/**
	* Gets all ideas from the table
	* @author Delvison Castillo delvisoncastillo@gmail.com
	*/
	function get_all_ideas()
	{
		// global variables from config/db_config.php
		global $idea_db;
		global $idea_db_table;
		global $db_hostname;
		global $db_user;
		global $db_password;

		$sql = "SELECT * FROM ideas;";

		return receive_query($sql, $db_hostname, $db_user, $db_password, $idea_db);
	}
?>
