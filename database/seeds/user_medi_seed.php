<?php

use Illuminate\Database\Seeder;

class user_medi_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\user_medi::create(['name_medi' =>'Acido Tranexámico','precio_med'=>1.23, 'descripcion_medi'=>'Mejora la coagulacion de la sangre', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'120','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Acido Tranexámico','precio_med'=>1.40, 'descripcion_medi'=>'Mejora la coagulacion de la sangre', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'130','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Acido Tranexámico','precio_med'=>1.10, 'descripcion_medi'=>'Mejora la coagulacion de la sangre', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'125','user_space_id'=>'3']);
        App\user_medi::create(['name_medi' =>'Acido Tranexámico','precio_med'=>1.60, 'descripcion_medi'=>'Mejora la coagulacion de la sangre', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'120','user_space_id'=>'4']);
        App\user_medi::create(['name_medi' =>'Adenosina','precio_med'=>3.2, 'descripcion_medi'=>'se utiliza por vía intravenosa', 'tipo_medicamento'=>'Primera necesidad' ,'cantidad'=>'200','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Adenosina','precio_med'=>3.8, 'descripcion_medi'=>'se utiliza por vía intravenosa', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'222','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Adenosina','precio_med'=>3.5, 'descripcion_medi'=>'se utiliza por vía intravenosa','tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'201','user_space_id'=>'3']);
        App\user_medi::create(['name_medi' =>'Adenosina','precio_med'=>3.9, 'descripcion_medi'=>'se utiliza por vía intravenosa','tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'200','user_space_id'=>'4']);
        App\user_medi::create(['name_medi' =>'Alteplasa','precio_med'=>2200.5, 'descripcion_medi'=>' disuelve los coágulos de sangre ', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'46','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Alteplasa','precio_med'=>2150.5, 'descripcion_medi'=>' disuelve los coágulos de sangre ', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'48','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Alteplasa','precio_med'=>2000, 'descripcion_medi'=>' disuelve los coágulos de sangre ', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'44','user_space_id'=>'3']);
        App\user_medi::create(['name_medi' =>'Alteplasa','precio_med'=>2200, 'descripcion_medi'=>' disuelve los coágulos de sangre ', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'40','user_space_id'=>'4']);
        App\user_medi::create(['name_medi' =>'Amfotericina','precio_med'=>23.20, 'descripcion_medi'=>'Una pastilla para nauseas', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'150','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Amfotericina','precio_med'=>25.90, 'descripcion_medi'=>'Una pastilla para nauseas', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'120','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Amfotericina','precio_med'=>25.90, 'descripcion_medi'=>'Una pastilla para nauseas', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'130','user_space_id'=>'3']);
        App\user_medi::create(['name_medi' =>'Amfotericina','precio_med'=>25.90, 'descripcion_medi'=>'Una pastilla para nauseas', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'110','user_space_id'=>'4']);
        App\user_medi::create(['name_medi' =>'Amikacina','precio_med'=>15.1, 'descripcion_medi'=>'Tratamiento de infecciones', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'100','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Amikacina','precio_med'=>16.2, 'descripcion_medi'=>'Tratamiento de infecciones', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'1000','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Amikacina','precio_med'=>14.2, 'descripcion_medi'=>'Tratamiento de infecciones', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'250','user_space_id'=>'3']);
        App\user_medi::create(['name_medi' =>'Amikacina','precio_med'=>19.2, 'descripcion_medi'=>'Tratamiento de infecciones', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'300','user_space_id'=>'5']);
        App\user_medi::create(['name_medi' =>'Amilo Nitrito','precio_med'=>36.2, 'descripcion_medi'=>'Alivia el dolor de pecho', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'120','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Amilo Nitrito','precio_med'=>37.5, 'descripcion_medi'=>'Alivia el dolor de pecho', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'130','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Amilo Nitrito','precio_med'=>39.2, 'descripcion_medi'=>'Alivia el dolor de pecho', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'140','user_space_id'=>'3']);
        App\user_medi::create(['name_medi' =>'Amilo Nitrito','precio_med'=>36.5, 'descripcion_medi'=>'Alivia el dolor de pecho', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'150','user_space_id'=>'4']);
        App\user_medi::create(['name_medi' =>'Aminofilina','precio_med'=>1.20, 'descripcion_medi'=>'Una pastilla para nada5', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'2','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Aminofilina','precio_med'=>1.40, 'descripcion_medi'=>'Una pastilla para nada5', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'2','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Amiodarona Clorhidrato H','precio_med'=>90, 'descripcion_medi'=>'Prevenir la rritmia cardiaca', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'60','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Amiodarona Clorhidrato H','precio_med'=>70, 'descripcion_medi'=>'Prevenir la rritmia cardiaca', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'70','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Amiodarona Clorhidrato H','precio_med'=>80, 'descripcion_medi'=>'Prevenir la rritmia cardiaca', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'90','user_space_id'=>'3']);
        App\user_medi::create(['name_medi' =>'Amiodarona Clorhidrato H','precio_med'=>77, 'descripcion_medi'=>'Prevenir la rritmia cardiaca', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'70','user_space_id'=>'4']);
        
        /*covid*/
        App\user_medi::create(['name_medi' =>'Amoxicilina','precio_med'=>13.6, 'descripcion_medi'=>'Tratamiento para el covid 19', 'tipo_medicamento'=>'Covid', 'cantidad'=>'100','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Amoxicilina','precio_med'=>12.6, 'descripcion_medi'=>'Tratamiento para el covid 19', 'tipo_medicamento'=>'Covid', 'cantidad'=>'120','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Amoxicilina','precio_med'=>14.6, 'descripcion_medi'=>'Tratamiento para el covid 19', 'tipo_medicamento'=>'Covid', 'cantidad'=>'180','user_space_id'=>'3']);
        App\user_medi::create(['name_medi' =>'Amoxicilina','precio_med'=>16.6, 'descripcion_medi'=>'Tratamiento para el covid 19', 'tipo_medicamento'=>'Covid', 'cantidad'=>'190','user_space_id'=>'4']);
        App\user_medi::create(['name_medi' =>'Amoxicilina','precio_med'=>15.6, 'descripcion_medi'=>'Tratamiento para el covid 19', 'tipo_medicamento'=>'Covid', 'cantidad'=>'200','user_space_id'=>'5']);
        /*fcovid*/

        App\user_medi::create(['name_medi' =>'Antitoxina Diftérica','precio_med'=>19.5, 'descripcion_medi'=>'Una pastilla para nada7', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'1','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Antitoxina Diftérica','precio_med'=>15.5, 'descripcion_medi'=>'Una pastilla para nada7', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'1','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Antitoxina Tetánica','precio_med'=>26.9, 'descripcion_medi'=>'Una pastilla para nada8', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'0','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Antitoxina Tetánica','precio_med'=>25.9, 'descripcion_medi'=>'Una pastilla para nada8', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'0','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Atenolol','precio_med'=>25, 'descripcion_medi'=>'Una pastilla para nada9', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'1','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Atenolol','precio_med'=>25, 'descripcion_medi'=>'Una pastilla para nada9', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'1','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Atropina Sulfato','precio_med'=>25, 'descripcion_medi'=>'Una pastilla para nada10', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'0','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Atropina Sulfato','precio_med'=>25, 'descripcion_medi'=>'Una pastilla para nada10', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'0','user_space_id'=>'2']);
        
        /*covid*/
        App\user_medi::create(['name_medi' =>'Azitromicina','precio_med'=>66.7, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'500','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Azitromicina','precio_med'=>55.6, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'600','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Azitromicina','precio_med'=>54.5, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'800','user_space_id'=>'3']);
        App\user_medi::create(['name_medi' =>'Azitromicina','precio_med'=>50.2, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'555','user_space_id'=>'4']);
        App\user_medi::create(['name_medi' =>'Azitromicina','precio_med'=>40.1, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'590','user_space_id'=>'5']);
        /*fcovid*/
        
        App\user_medi::create(['name_medi' =>'Azul de Prusia','precio_med'=>25, 'descripcion_medi'=>'Una pastilla para nada11', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Azul de Prusia','precio_med'=>25, 'descripcion_medi'=>'Una pastilla para nada11', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Baclofeno','precio_med'=>25, 'descripcion_medi'=>'Una pastilla para nada12', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'0','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Baclofeno','precio_med'=>25, 'descripcion_medi'=>'Una pastilla para nada12', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'0','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Bario Sulfato','precio_med'=>25, 'descripcion_medi'=>'Una pastilla para nada13', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'0','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Bario Sulfato','precio_med'=>25, 'descripcion_medi'=>'Una pastilla para nada13', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'0','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Beclometasona Dipropianato','precio_med'=>25, 'descripcion_medi'=>'Descripcion', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'12','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Beclometasona Dipropianato','precio_med'=>25, 'descripcion_medi'=>'Descripcion', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'12','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Biperdeno Lactato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Biperdeno Lactato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Calcio Gluconato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Calcio Gluconato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Calcioedetato Sódico','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Calcioedetato Sódico','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Dantroleno Sódico','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Dantroleno Sódico','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Deferoxamina Mesilato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Deferoxamina Mesilato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        
        /*covid*/
        App\user_medi::create(['name_medi' =>'Dexametasona','precio_med'=>250, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'400','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Dexametasona','precio_med'=>230, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'420','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Dexametasona','precio_med'=>230, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'430','user_space_id'=>'3']);
        App\user_medi::create(['name_medi' =>'Dexametasona','precio_med'=>220, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'440','user_space_id'=>'4']);
        App\user_medi::create(['name_medi' =>'Dexametasona','precio_med'=>240, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'480','user_space_id'=>'5']);
        /*fcovid*/
        
        App\user_medi::create(['name_medi' =>'Diazepam','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Diazepam','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Digoxina','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Digoxina','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Dimercaprol','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Dimercaprol','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Dobutamina','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Dobutamina','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Dopamina Clorhidrato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Dopamina Clorhidrato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Dorzolamina','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Dorzolamina','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'D-Penicelamina','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'D-Penicelamina','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Enalapril Maleato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Enalapril Maleato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Epinefrina','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Epinefrina','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Ergometrina Maleato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Ergometrina Maleato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Fenobarbital','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Fenobarbital','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Fentanilo','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Fentanilo','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Fitomenadiona','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Fitomenadiona','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Flufenazina Decanoato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Flufenazina Decanoato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Flumazenil','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Flumazenil','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Glucosa en Agua','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Glucosa en Agua','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Halotano','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Halotano','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Heparina Sodica','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Heparina Sodica','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        
        /*covid*/ 
        App\user_medi::create(['name_medi' =>'Hidroxicloroquina','precio_med'=>20, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'300','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Hidroxicloroquina','precio_med'=>18, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'320','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Hidroxicloroquina','precio_med'=>17, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'333','user_space_id'=>'3']);
        App\user_medi::create(['name_medi' =>'Hidroxicloroquina','precio_med'=>17.5, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'378','user_space_id'=>'4']);
        App\user_medi::create(['name_medi' =>'Hidroxicloroquina','precio_med'=>14.2, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'158','user_space_id'=>'5']);
        /*fcovid*/
       
        App\user_medi::create(['name_medi' =>'Hidroxocobalamina','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Hidroxocobalamina','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Inmunoglobulina ANTI-D','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Inmunoglobulina ANTI-D','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Inmunoglobulina contra el Tétanos','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Inmunoglobulina contra el Tétanos','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Inmunoglubulina contra la Hepatitis B','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Inmunoglubulina contra la Hepatitis B','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Inmonuglobulina contra la Rabia','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Inmonuglobulina contra la Rabia','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Insulina Humana','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Insulina Humana','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Ipecacuana','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Ipecacuana','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Ipratropio Bromuro','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Ipratropio Bromuro','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Isoflurano','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Isoflurano','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Isosorbida Dinitrato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Isosorbida Dinitrato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        
        /*covid*/
        App\user_medi::create(['name_medi' =>'Ivermectina','precio_med'=>10.2, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'200','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Ivermectina','precio_med'=>11.2, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'220','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Ivermectina','precio_med'=>18.2, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'290','user_space_id'=>'3']);
        App\user_medi::create(['name_medi' =>'Ivermectina','precio_med'=>14.2, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'300','user_space_id'=>'4']);
        App\user_medi::create(['name_medi' =>'Ivermectina','precio_med'=>19.2, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'205','user_space_id'=>'5']);
        /*fcovid*/
        
        App\user_medi::create(['name_medi' =>'Lidocaína Clorhidrato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Lidocaína Clorhidrato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Magnesio Sulfato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Magnesio Sulfato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Manitol','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Manitol','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Metamizol Sódico','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Metamizol Sódico','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Metiltioninio Cloruro','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Metiltioninio Cloruro','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Midazolam','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Midazolam','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Morfina Clorhidrato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Morfina Clorhidrato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Naloxona Clorhidrato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Naloxona Clorhidrato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Neostigmina Bromuro','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Neostigmina Bromuro','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Neostigmina Metilsulfato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2','tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Neostigmina Metilsulfato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Nitroprusiato Sodico','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Nitroprusiato Sodico','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Oxitocina','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Oxitocina','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        
        /*covid*/ 
        App\user_medi::create(['name_medi' =>'Paracetamol 500 mg','precio_med'=>0.30, 'descripcion_medi'=>'Tratamiento del covid ', 'tipo_medicamento'=>'Covid', 'cantidad'=>'300','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Paracetamol 500 mg','precio_med'=>0.10, 'descripcion_medi'=>'tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'400','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Paracetamol 500 mg','precio_med'=>0.20, 'descripcion_medi'=>'tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'420','user_space_id'=>'3']);
        App\user_medi::create(['name_medi' =>'Paracetamol 500 mg','precio_med'=>0.25, 'descripcion_medi'=>'tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'410','user_space_id'=>'4']);
        App\user_medi::create(['name_medi' =>'Paracetamol 500 mg','precio_med'=>0.15, 'descripcion_medi'=>'tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'410','user_space_id'=>'5']);
        /*fcovid*/

        App\user_medi::create(['name_medi' =>'Penicilamina','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Penicilamina','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Piridostigmina Bromuro','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Piridostigmina Bromuro','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Polielectrolítica Solución','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Polielectrolítica Solución','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Poligelina c/s Electrolitos','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Poligelina c/s Electrolitos','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Propofol','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Propofol','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Protamina Sulfato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Protamina Sulfato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Ringer Lactato solución','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Ringer Lactato solución','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Salbutamol','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Salbutamol','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Sales de Rehidratación Oral','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Sales de Rehidratación Oral','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Selvoflurano','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Selvoflurano','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Sodio Bicarbonato','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Sodio Bicarbonato','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Sodio Cloruro','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Sodio Cloruro','precio_med'=>30, 'descripcion_medi'=>'Descripcion2', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'3','user_space_id'=>'2']);
        
        App\user_medi::create(['name_medi' =>'Sodio Nitrito','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Sodio Nitrito','precio_med'=>90, 'descripcion_medi'=>'Descripcion3', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'4','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Succimero','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Succimero','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Suero Antibotrópico','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Suero Antibotrópico','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Suero Anticrotálico','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Suero Anticrotálico','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Suero Antilachésico','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Suero Antilachésico','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Suero Antiloxoscélico','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Suero Antiloxoscélico','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Suero Antirrábico','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Suero Antirrábico','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Sulfadiazina de plata','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Sulfadiazina de plata','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Surfactante pulmonar','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Surfactante pulmonar','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'2']);
        
        /*covid*/
        App\user_medi::create(['name_medi' =>'Tocilizumab','precio_med'=>2463, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'50','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Tocilizumab','precio_med'=>2110, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'20','user_space_id'=>'2']);
        App\user_medi::create(['name_medi' =>'Tocilizumab','precio_med'=>1636.4, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'80','user_space_id'=>'3']);
        App\user_medi::create(['name_medi' =>'Tocilizumab','precio_med'=>1636.4, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'100','user_space_id'=>'4']);
        App\user_medi::create(['name_medi' =>'Tocilizumab','precio_med'=>1636.4, 'descripcion_medi'=>'Tratamiento del covid', 'tipo_medicamento'=>'Covid', 'cantidad'=>'30','user_space_id'=>'5']);
        /*fcovid*/

        App\user_medi::create(['name_medi' =>'Warfarina Sódica','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'1']);
        App\user_medi::create(['name_medi' =>'Warfarina Sódica','precio_med'=>90, 'descripcion_medi'=>'Descripcion4', 'tipo_medicamento'=>'Primera necesidad', 'cantidad'=>'5','user_space_id'=>'2']);

    }
}
