<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'pengguna', 
			'label' => 'Pengguna', 
			'icon' => '<i class="fa fa-user "></i>'
		),
		
		array(
			'path' => 'surat_masuk', 
			'label' => 'Surat Masuk', 
			'icon' => '<i class="fa fa-inbox "></i>'
		),
		
		array(
			'path' => 'surat_keluar', 
			'label' => 'Surat Keluar', 
			'icon' => '<i class="fa fa-mail-forward "></i>'
		),
		
		array(
			'path' => '/', 
			'label' => 'Pengaturan', 
			'icon' => '<i class="fa fa-database "></i>','submenu' => array(
		array(
			'path' => 'roles', 
			'label' => 'Wewenang', 
			'icon' => '<i class="fa fa-key "></i>'
		),
		
		array(
			'path' => 'role_permissions', 
			'label' => 'Hak Akses', 
			'icon' => '<i class="fa fa-key "></i>'
		)
	)
		)
	);
		
	
	
}