<?php


/**
 * Content for the Forum footer navigation block. 
 * Block defined in the malmo_forum module
 */
function malmo_forum_footer_nav() {
	global $user;
	
	// Initialize columns
	$column1 = array( 'add_forum' => '', 'move_forums' => '' );
	$column2 = array( 'todo' => l("TODO", "") );
	$column3 = array( 'todo' => l("TODO", ""));

	// Forum admin + super admin
	if( in_array( "forum admin", $user->roles ) || in_array( "administrator", $user->roles ) ) {
		$column1['add_forum'] = "<li>" . l( "Lägg till forum", "admin/structure/forum/add/forum" ) . "</li>";
		$column1['admin_forums'] = "<li>" . l( "Administrera forum", "admin/structure/forum" ) . "</li>";
	}

	// Serialize columns
	$column1 = implode( "", $column1 );
	$column2 = implode( "", $column2 );
	$column3 = implode( "", $column3 );

	return "
		<nav>
	    <ul class='list-1'>
	      $column1
	    </ul>
	    <ul class='list-2'>
	      $column2
	    </ul>
	    <ul class='list-3'>
	      $column3
	    </ul>
	  </nav>";
}