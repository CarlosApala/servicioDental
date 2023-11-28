<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('servicios')->insert([
            'nombre'=>'Limpieza Dental',
            'descripcion'=>'Desbridamiento de sarro y placa dental.',
            'tarifa'=>90.0
        ]);
        DB::table('servicios')->insert([
            'nombre'=>'Blanqueamiento Dental',
            'descripcion'=>'Tratamientos profesionales para aclarar el color de los dientes.',
            'tarifa'=>200.0
        ]);
        DB::table('servicios')->insert([
            'nombre'=>'Odontología Preventiva',
            'descripcion'=>'Aplicación de fluoruro para fortalecer el esmalte dental',
            'tarifa'=>200.0
        ]);
        DB::table('servicios')->insert([
            'nombre'=>'Ortodoncia',
            'descripcion'=>'Brackets y ortodoncia tradicional',
            'tarifa'=>1500.0
        ]);
        DB::table('servicios')->insert([
            'nombre'=>'Implantes Dentales',
            'descripcion'=>'Colocación de implantes para reemplazar dientes perdidos.',
            'tarifa'=>1800.0
        ]);
        DB::table('servicios')->insert([
            'nombre'=>'Endodoncia',
            'descripcion'=>'Tratamientos de conducto para salvar dientes afectados por caries o lesiones.',
            'tarifa'=>500.0
        ]);
        DB::table('servicios')->insert([
            'nombre'=>'Cirugía Oral',
            'descripcion'=>'Cirugía de muelas del juicio',
            'tarifa'=>500.0
        ]);
        DB::table('servicios')->insert([
            'nombre'=>'Restauraciones Dentales',
            'descripcion'=>'Obturaciones (empastes) de resina o porcelana.',
            'tarifa'=>500.0
        ]);
        DB::table('servicios')->insert([
            'nombre'=>'Estética Dental',
            'descripcion'=>'Carillas dentales para mejorar la apariencia de los dientes.',
            'tarifa'=>500.0
        ]);
        DB::table('servicios')->insert([
            'nombre'=>'Odontopediatría',
            'descripcion'=>'Cuidado dental especializado para niños.',
            'tarifa'=>700.0
        ]);
        DB::table('servicios')->insert([
            'nombre'=>'Periodoncia',
            'descripcion'=>'Tratamientos para enfermedades de las encías.',
            'tarifa'=>800.0
        ]);
        DB::table('servicios')->insert([
            'nombre'=>'Terapia de Articulación Temporomandibular (ATM)',
            'descripcion'=>'Tratamientos para trastornos de la mandíbula y dolor asociado.',
            'tarifa'=>2500.0
        ]);
    }
}
