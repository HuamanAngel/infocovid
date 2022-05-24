<?php

use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {            
        App\User::create(['id'=>1,'usuario' =>'Pedro','password'=>bcrypt('mantecoso'), 'correo_recu'=>'mandarina@unmsm.edu','distrito'=>'San Martin de porres','latitude'=>-11.98142,'longitude'=>-77.09561,'sexo'=>'masculino']);
     
        App\User::create(['id'=>2,'usuario' =>'Juan','password'=>bcrypt('mantequilla'), 'correo_recu'=>'manzanita@unmsm.edu','distrito'=>'San Miguel','latitude'=>-12.07258,'longitude'=>-77.09767,'sexo'=>'masculino']);
     
     
        App\User::create(['id'=>3,'usuario' =>'Alvarado','password'=>bcrypt('vacaperro'), 'correo_recu'=>'festividad@unmsm.edu','distrito'=>'San Juan de Lurigancho','latitude'=>-12.00274,'longitude'=>-77.00841,'sexo'=>'masculino',
        'telefono'=>76832184,'ubicacion_establecimiento'=>'Mz.A Lt.34 A-X','video_muestra'=>'/Pedro/muestra.webm','documentos'=>'/Pedro/muestra.pdf','tipo'=>'botica']);
        App\User::create(['id'=>4,'usuario' =>'Andres','password'=>bcrypt('vaca'), 'correo_recu'=>'festividad@unmsm.edu','distrito'=>'San Martin de porres','latitude'=>-11.98142,'longitude'=>-77.09561,'sexo'=>'femenino',
        'telefono'=>88832184,'ubicacion_establecimiento'=>'Mz.A Lt.34 A-X','video_muestra'=>'/Pedro/muestra.webm','documentos'=>'/Pedro/muestra.pdf','tipo'=>'botica']);
        App\User::create(['id'=>5,'usuario' =>'Marco','password'=>bcrypt('perro'), 'correo_recu'=>'festividad@unmsm.edu','distrito'=>'San Juan de Lurigancho','latitude'=>-12.00274,'longitude'=>-77.00841,'sexo'=>'masculino',
        'telefono'=>12832184,'ubicacion_establecimiento'=>'Mz.A Lt.34 A-X','video_muestra'=>'/Pedro/muestra.webm','documentos'=>'/Pedro/muestra.pdf','tipo'=>'farmacia']);
        App\User::create(['id'=>6,'usuario' =>'Juan','password'=>bcrypt('vacaperro'), 'correo_recu'=>'festividad@unmsm.edu','distrito'=>'San Juan de Lurigancho','latitude'=>-12.00274,'longitude'=>-77.00841,'sexo'=>'femenino',
        'telefono'=>15832184,'ubicacion_establecimiento'=>'Mz.A Lt.34 A-X','video_muestra'=>'/Pedro/muestra.webm','documentos'=>'/Pedro/muestra.pdf','tipo'=>'farmacia']);
        App\User::create(['id'=>7,'usuario' =>'Joe','password'=>bcrypt('vacaperro'), 'correo_recu'=>'festividad@unmsm.edu','distrito'=>'San Martin de porres','latitude'=>-11.98142,'longitude'=>-77.09561,'sexo'=>'masculino',
        'telefono'=>30832184,'ubicacion_establecimiento'=>'Mz.A Lt.34 A-X','video_muestra'=>'/Pedro/muestra.webm','documentos'=>'/Pedro/muestra.pdf','tipo'=>'botica']);
        App\User::create(['id'=>8,'usuario' =>'Nicolas','password'=>bcrypt('vacaperro'), 'correo_recu'=>'festividad@unmsm.edu','distrito'=>'San Martin de porres','latitude'=>-11.98142,'longitude'=>-77.09561,'sexo'=>'masculino',
        'telefono'=>32832184,'ubicacion_establecimiento'=>'Mz.A Lt.34 A-X','video_muestra'=>'/Pedro/muestra.webm','documentos'=>'/Pedro/muestra.pdf','tipo'=>'botica']);

    }
}
