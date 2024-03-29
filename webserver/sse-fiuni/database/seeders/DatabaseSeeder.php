<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Carreras;
use App\Models\Laboral;

use App\Models\Encuestas;
use App\Models\Preguntas;
use App\Models\OpcionesPregunta;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //creacion de Carreras
        $carrera1 = Carreras::create([
                'carrera' => 'Ingenieria Informatica'
        ]);

        $carrera2 = Carreras::create([
                'carrera' => 'Ingenieria Electromecanica'
        ]);

        $carrera3 = Carreras::create([
                'carrera' => 'Ingenieria Civil'
        ]);

        $role = Role::create(['name' => 'visitante']);

        // roles y permisos
        $role = Role::create(['name' => User::ROLE_ADMINISTRADOR]);
        $role->givePermissionTo(Permission::create(['name' => 'Generar Reportes']));
        $ver_empresa_permiso = Permission::create(['name' => 'Ver Empresas']);
        $role->givePermissionTo($ver_empresa_permiso);
        $role->givePermissionTo(Permission::create(['name' => 'Administrar Administradores']));
        $role->givePermissionTo(Permission::create(['name' => 'Administrar Empleador']));
        $role->givePermissionTo(Permission::create(['name' => 'Administrar Egresados']));

        //        $role->givePermissionTo(Permission::all());
        $role = Role::create(['name' => User::ROLE_EGRESADO]);
        $role->givePermissionTo($ver_empresa_permiso);
        $role->givePermissionTo(Permission::create(['name' => 'Administrar Perfil de Egresados']));
        $role->givePermissionTo(Permission::create(['name' => 'Completar Encuesta de Egresados']));


        $role = Role::create(['name' => User::ROLE_EMPLEADOR]);
        $role->givePermissionTo(Permission::create(['name' => 'Completar Encuesta de Empleador']));

        //usuario - administrador para pruebas
        $user = User::create([
                'nombre' => 'Administrador',
                'apellido' => 'FIUNI',
                'ci' => 0000001,
                'confirmado' => true,
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
        ]);

        $user->assignRole(User::ROLE_ADMINISTRADOR);

        //usuario - Egresado para pruebas
        $user = User::create([
                'nombre' => 'Juan',
                'apellido' => 'Perez',
                'ci' => 5433233,
                'confirmado' => true,
                'carrera_id' => $carrera1->id,
                'email' => 'egresado@gmail.com',
                'password' => bcrypt('egresado'),
        ]);
        $user->assignRole(User::ROLE_EGRESADO);
        //usuario - Egresado para pruebas
        $user = User::create([
                'nombre' => 'Carlos',
                'apellido' => 'Gomez',
                'ci' => 3456668,
                'confirmado' => true,
                'carrera_id' => $carrera1->id,
                'email' => 'egresado2@gmail.com',
                'password' => bcrypt('egresado'),
        ]);
        $user->assignRole(User::ROLE_EGRESADO);
        //usuario - Egresado para pruebas
        $user = User::create([
                'nombre' => 'Lorena',
                'apellido' => 'Del Puerto',
                'ci' => 3456667,
                'confirmado' => true,
                'carrera_id' => $carrera1->id,
                'email' => 'loredelpuerto@gmail.com',
                'password' => bcrypt('egresado'),
        ]);

        $user->assignRole(User::ROLE_EGRESADO);

        //usuario - Empleador para pruebas
        $user = User::create([
                'nombre' => 'Empleador',
                'apellido' => 'Egresado',
                'ci' => 3256667,
                'confirmado' => true,
                'email' => 'empleador@gmail.com',
                'password' => bcrypt('empleador'),
        ]);

        $user->assignRole(User::ROLE_EMPLEADOR);

        //usuario - Empleador para pruebas
        $user = User::create([
                'nombre' => 'Alvaro',
                'apellido' => 'Mercado',
                'ci' => 3456664,
                'confirmado' => true,
                'email' => 'alvar01omer@gmail.com',
                'password' => bcrypt('egresado'),
        ]);

        $user->assignRole(User::ROLE_EMPLEADOR);
        //final de usuarios de prueba
//        echo "Creando Egresados de prueba!!.. \n";
//        for ($i=0; $i < 30; $i++) {
//            $FourDigitRandomNumber = rand(1231,9999);
//            //usuario - Egresado para pruebas
//            $user = User::create([
//                    'nombre' => "Egresado de Informatica - {$FourDigitRandomNumber}",
//                    'apellido' => "#{$FourDigitRandomNumber}",
//                    'carrera_id' => $carrera1->id,
//                    'egreso' => rand(2018, 2022),
//                    'ci' => $FourDigitRandomNumber,
//                    'email' => "egresado{$FourDigitRandomNumber}@informatica.com",
//                    'token_invitacion' => base64_encode(bcrypt("egresado{$FourDigitRandomNumber}@informatica.com".time())),
//                    'password' => bcrypt('egresado'),
//            ]);
//            $user->assignRole(User::ROLE_EGRESADO);
//            //usuario - Egresado para pruebas
//            $user = User::create([
//                    'nombre' => "Egresado de Electromecanica - {$FourDigitRandomNumber}",
//                    'apellido' => "#{$FourDigitRandomNumber}",
//                    'carrera_id' => $carrera2->id,
//                    'egreso' => rand(2018, 2022),
//                    'ci' => $FourDigitRandomNumber,
//                    'email' => "egresado{$FourDigitRandomNumber}@electro.com",
//                    'token_invitacion' => base64_encode(bcrypt("egresado{$FourDigitRandomNumber}@electro.com".time())),
//                    'password' => bcrypt('egresado'),
//            ]);
//            $user->assignRole(User::ROLE_EGRESADO);
//            //usuario - Egresado para pruebas
//            $user = User::create([
//                    'nombre' => "Egresado de Civil - {$FourDigitRandomNumber}",
//                    'apellido' => "#{$FourDigitRandomNumber}",
//                    'carrera_id' => $carrera3->id,
//                    'ci' => $FourDigitRandomNumber,
//                    'egreso' => rand(2018, 2022),
//                    'email' => "egresado{$FourDigitRandomNumber}@civil.com",
//                    'token_invitacion' => base64_encode(bcrypt("egresado{$FourDigitRandomNumber}@civil.com".time())),
//                    'password' => bcrypt('egresado'),
//            ]);
//            $user->assignRole(User::ROLE_EGRESADO);
//
//            //usuario - Empleador para pruebas
//            $user = User::create([
//                    'nombre' => base64_encode($FourDigitRandomNumber),
//                    'apellido' => base64_encode($FourDigitRandomNumber),
//                    'ci' => $FourDigitRandomNumber,
//                    'confirmado' => true,
//                    'email' => 'empleador'.$FourDigitRandomNumber.'@gmail.com',
//                    'password' => bcrypt('empleador'),
//            ]);
//            $user->assignRole(User::ROLE_EMPLEADOR);
//        }
//        Laboral::create(['empresa' => 'inventiva']);
//        Laboral::create(['empresa' => 'Integradevs']);
//        Laboral::create(['empresa' => 'Borealis']);
//        Laboral::create(['empresa' => 'MoV']);

        $encuestaEmpleador = Encuestas::create([
            'nombre' => 'Encuesta Empleador 2022',
            'tipo' => 'empleador'
        ]);

        $preguntasEmpleador = [
                        [
                            'pregunta' => 'La mayor parte de los egresados o pasantes de la Facultad de Ingeniería de la UNI, que trabajan en su Empresa realizan trabajos de tipo. (puede marcar más de uno)',
                            'requerido' => 1,
                            'justificacion' => 1,
                            'encuesta_id' => $encuestaEmpleador->id,
                            'tipo_pregunta' => 'seleccion_multiple_justificacion',
                            'opciones' => [
                                'Trabajo profesional',
                                'Trabajo de investigación',
                                'Trabajo de asesoría',
                                'Otro'
                            ]
                        ],
                        [
                            'pregunta' => '¿De qué manera selecciona su personal?',
                            'requerido' => 1,
                            'justificacion' => 1,
                            'encuesta_id' => $encuestaEmpleador->id,
                            'tipo_pregunta' => 'seleccion_multiple_justificacion',
                            'opciones' => [
                                'Por referencia',
                                'Mirando su currículum',
                                'Por un examen sicotécnico',
                                'Otro'
                            ]
                        ],
                        [
                            'pregunta' => 'La formación teórica – practica recibida durante la carrera es la adecuada para el desempeño profesional',
                            'requerido' => 1,
                            'justificacion' => 0,
                            'encuesta_id' => $encuestaEmpleador->id,
                            'tipo_pregunta' => 'seleccion',
                            'opciones' => [
                                '1',
                                '2',
                                '3',
                                '4',
                                '5',
                            ]
                        ],
                        [
                            'pregunta' => 'Posee facilidad de expresión escrita',
                            'requerido' => 1,
                            'justificacion' => 0,
                            'encuesta_id' => $encuestaEmpleador->id,
                            'tipo_pregunta' => 'seleccion',
                            'opciones' => [
                                '1',
                                '2',
                                '3',
                                '4',
                                '5',
                            ]
                        ],
                    ];


        foreach ($preguntasEmpleador as $key => $pregunta) {
            if ($pregunta['tipo_pregunta'] !== 'pregunta') {
                    $datos_para_nueva_pregunta = [
                        'pregunta' => $pregunta['pregunta'],
                        'tipo_pregunta' => $pregunta['tipo_pregunta'],
                        'encuesta_id' => $pregunta['encuesta_id'],
                        'justificacion' => $pregunta['justificacion'],
                        'requerido' => $pregunta['requerido']
                    ];
                    $opciones = $pregunta['opciones'];
                    $pregunta = Preguntas::create($datos_para_nueva_pregunta);
                    foreach($opciones as $key => $opcion) {
                        OpcionesPregunta::create([
                            'pregunta_id' => $pregunta->id,
                            'encuesta_id' => $pregunta->encuesta_id,
                            'opcion' => $opcion
                        ]);
                    }
            } else {
                $pregunta = Preguntas::create([
                    'pregunta' => $pregunta['pregunta'],
                    'tipo_pregunta' => $pregunta['tipo_pregunta'],
                    'encuesta_id' => $pregunta['encuesta_id'],
                    'requerido' => $pregunta['requerido']
                ]);
            }
        }



        $encuestaEgresados = Encuestas::create([
            'nombre' => 'Encuesta Egresado 2022',
            'tipo' => 'egresado'
        ]);
        // tipo de preguntas disponibles  => 'pregunta','seleccion_multiple','seleccion_multiple_justificacion','seleccion','seleccion_justificacion'
        //si la pregunta no es de tipo pregunta simple incluir el valor 'opciones' => []
        $preguntas = [
                        [
                            'pregunta' => 'Pregunta simple',
                            'requerido' => 1,
                            'justificacion' => 0,
                            'encuesta_id' => $encuestaEgresados->id,
                            'tipo_pregunta' => 'pregunta'
                        ],
                        [
                            'pregunta' => 'Calidad de los docentes',
                            'requerido' => 1,
                            'justificacion' => 0,
                            'encuesta_id' => $encuestaEgresados->id,
                            'tipo_pregunta' => 'seleccion_multiple',
                            'opciones' => [
                                'Excelente',
                                'Muy Buena',
                                'Buena',
                                'Regular'
                            ]
                        ],
                        [
                            'pregunta' => 'Medio para obtener el primer empleo',
                            'requerido' => 1,
                            'justificacion' => 1,
                            'encuesta_id' => $encuestaEgresados->id,
                            'tipo_pregunta' => 'seleccion_multiple_justificacion',
                            'opciones' => [
                                'Contacto através de la F.I.U.N.I. y/o la U.N.I.',
                                'Contactos personales',
                                'Pasantía',
                                'Medios masivos de comunicación (Redes sociales, Noticias, etc.)',
                                'Otro'
                            ]
                        ],
                        [
                            'pregunta' => 'Idioma que utiliza en su trabajo',
                            'requerido' => 0,
                            'justificacion' => 1,
                            'encuesta_id' => $encuestaEgresados->id,
                            'tipo_pregunta' => 'seleccion_multiple_justificacion',
                            'opciones' => [
                                'Español',
                                'Guaraní',
                                'Portugués',
                                'Inglés',
                                'Otro'
                            ]
                        ],
                        [
                            'pregunta' => 'Condición de Trabajo',
                            'requerido' => 0,
                            'justificacion' => 1,
                            'encuesta_id' => $encuestaEgresados->id,
                            'tipo_pregunta' => 'seleccion',
                            'opciones' => [
                                'Contratado',
                                'Nombrado',
                                'Otro'
                            ]
                        ]
                    ];
        foreach ($preguntas as $key => $pregunta) {
            if ($pregunta['tipo_pregunta'] !== 'pregunta') {
                    $datos_para_nueva_pregunta = [
                        'pregunta' => $pregunta['pregunta'],
                        'tipo_pregunta' => $pregunta['tipo_pregunta'],
                        'encuesta_id' => $pregunta['encuesta_id'],
                        'justificacion' => $pregunta['justificacion'],
                        'requerido' => $pregunta['requerido']
                    ];
                    $opciones = $pregunta['opciones'];
                    $pregunta = Preguntas::create($datos_para_nueva_pregunta);
                    foreach($opciones as $key => $opcion) {
                        OpcionesPregunta::create([
                            'pregunta_id' => $pregunta->id,
                            'encuesta_id' => $pregunta->encuesta_id,
                            'opcion' => $opcion
                        ]);
                    }
            } else {
                $pregunta = Preguntas::create([
                    'pregunta' => $pregunta['pregunta'],
                    'tipo_pregunta' => $pregunta['tipo_pregunta'],
                    'encuesta_id' => $pregunta['encuesta_id'],
                    'requerido' => $pregunta['requerido']
                ]);
            }
        }
    }
}
