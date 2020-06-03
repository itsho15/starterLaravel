<?php
namespace App\Models;
class Permission extends \Spatie\Permission\Models\Permission {
	protected $fillable = ['name', 'guard_name'];

	public static function defaultPermissions() {
		return [
			'view_users',
			'add_users',
			'edit_users',
			'delete_users',
			'view_roles',
			'add_roles',
			'edit_roles',
			'delete_roles',
			'view_categories',
			'add_categories',
			'edit_categories',
			'delete_categories',
		];
	}
}
