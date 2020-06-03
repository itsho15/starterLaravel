<?php

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		$roles_array = ['admin', 'user'];
		foreach (Permission::defaultPermissions() as $key => $perm) {
			Permission::firstOrCreate(['name' => $perm]);
		}
		foreach ($roles_array as $role) {
			$roles = Role::firstOrCreate(['name' => $role]);

			if ($roles->name == 'admin') {
				// assign all permissions
				$roles->syncPermissions(Permission::defaultPermissions());
				$this->command->info('Admin granted all the permissions');
			} else {
				// for others by default only read access
				$roles->syncPermissions(Permission::where('name', 'LIKE', 'view_%')->where('guard_name', $role)->get());
			}
		}

	}
}
