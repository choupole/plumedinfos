<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Création de l'utilisateur admin
        $admin = DB::table('users')->insertGetId([
            'email' => 'sylvia@gmail.com',
            'username' => 'sylvia',
            'password' => Hash::make('sylvia@@243@@'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Ajout du rôle 'admin' à l'utilisateur admin
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Suppression de l'utilisateur admin
        DB::table('users')->where('email', 'admin@gmail.com')->delete();
    }
};
