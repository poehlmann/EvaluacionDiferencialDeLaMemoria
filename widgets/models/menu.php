<?php

class menuModelWidget extends Model
{
    public function __construct(){
        parent::__construct();
    }
    
    public function getMenu($menu)
    {
        $menus['sidebar'] = array(
         /*
           array(
                'id' => 'prueba',
                'titulo' => 'B&uacute;squeda de Usuario con filtros',
                'enlace' => BASE_URL . 'post/prueba',
                'imagen' => 'icon-random'
                ),
          */
            array(
                'id' => 'titulo',
                'titulo' => 'Informativo',
                'enlace' => BASE_URL,
                'imagen' => '',
                'tipo' => 'nav-header'
            ),
            array(
                'id' => 'info2',
                'titulo' => 'La Neuropsicolog&iacute;a',
                'enlace' => BASE_URL . 'info2',
                'imagen' => 'icon-book',
                'tipo' => 'link'
                ),

            array(
                'id' => 'info1',
                'titulo' => 'Evaluaci&oacute;n Neuropsicol&oacute;gica',
                'enlace' => BASE_URL . 'info',
                'imagen' => 'icon-book',
                'tipo' => 'link'
                ),
            array(
                'id' => 'info3',
                'titulo' => 'Afecciones',
                'enlace' => BASE_URL . 'info3/afecciones',
                'imagen' => 'icon-book',
                'tipo' => 'link'
                ),
            array(
                'id' => 'info4',
                'titulo' => 'Tratamiento',
                'enlace' => BASE_URL . 'info4/tratamiento',
                'imagen' => 'icon-book',
                'tipo' => 'link'
                )
            /*
            ,
            array(
                'id' => 'pdf',
                'titulo' => 'Documento PDF Sobre Evaluaci&oacute;n Diferencial de la memoria',
                'enlace' => BASE_URL . 'pdf/pdf1/param1/param2',
                'imagen' => 'icon-file'
                ),
            
            array(
                'id' => 'pdf',
                'titulo' => 'Documento PDF + Sobre Evaluaci&oacute;n Diferencial de la memoria',
                'enlace' => BASE_URL . 'pdf/pdf2/param1/param2',
                'imagen' => 'icon-file'
                )
            */
        );
        if(Session::get('autenticado'))
        {
            $menus['sidebar'][]=
                array(
                    'id' => 'titulo2',
                    'titulo' => 'Aplicacion De Evaluaci&oacute;n',
                    'enlace' => BASE_URL,
                    'imagen' => '',
                    'tipo' => 'nav-header'
                );

            $menus['sidebar'][]=
                array(
                   'id' => 'encuesta',
                    'titulo' => 'Evaluaci&oacute;n Diferencial de la Memoria',
                    'enlace' => BASE_URL . 'encuesta',
                    'imagen' => 'icon-file',
                    'tipo' => 'link'
                );
        }      
        
        $menus['top'] = array(
            array(
                'id' => 'inicio',
                'titulo' => 'Inicio',
                'enlace' => BASE_URL,
                'imagen' => 'icon-home'
                )
        );
        /*
        if(!Session::get('autenticado')){
            $menus['top'][] =array(
                'id' => 'registro',
                'titulo' => 'Registro',
                'enlace' => BASE_URL . 'usuarios/registro',
                'imagen' => 'icon-file'
                );
        }
        */
        if(Session::get('autenticado'))
        {
            /*permitir solo ver a los usuarios admin*/
            if( Session::get('level')==1)
            {
                $menus['top'][] = array(
                    'id' => 'medicos',
                    'titulo' => 'Profesionales',
                    'enlace' => BASE_URL . 'post/medicos',
                    'imagen' => 'icon-user'
                    );
                $menus['sidebar'][] =  array(
                    'id' => 'titulo3',
                    'titulo' => 'Control de Usuarios',
                    'enlace' => BASE_URL . 'usuarios',
                    'imagen' => '',
                    'tipo' => 'nav-header'
                );
                $menus['sidebar'][] =  array(
                 'id' => 'usuarios',
                 'titulo' => 'Usuarios',
                 'enlace' => BASE_URL . 'usuarios',
                 'imagen' => 'icon-user',
                 'tipo' => 'link'
                 );
                $menus['sidebar'][] =  array(
                'id' => 'acl',
                'titulo' => 'Listas de control de acceso',
                'enlace' => BASE_URL . 'acl',
                'imagen' => 'icon-list-alt',
                'tipo' => 'link'
                );
                /*
                $menus['sidebar'][] =   array(
                'id' => 'ajax',
                'titulo' => 'Registro de Ciudades a Pa&iacute;ses',
                'enlace' => BASE_URL . 'ajax',
                'imagen' => 'icon-refresh'
                );
                */
            
            }
           /*permitir solo ver a los usuarios medicos  o admin*/
               if( Session::get('level')==2 || Session::get('level')==1)
               {
                   $menus['top'][] = array(
                    'id' => 'pacientes',
                    'titulo' => 'Usuarios',
                    'enlace' => BASE_URL . 'post/pacientes',
                    'imagen' => 'icon-user'
                    );
                }
            /*permitir solo ver a los usuario pacientes*/
                $menus['top'][] = array(
                    'id' => 'datospaciente',
                    'titulo' => 'Datos Personales',
                    'enlace' => BASE_URL . 'post/datospaciente',
                    'imagen' => 'icon-user'
                    );

        }
        return $menus[$menu];
    }
    public function getMenu2($menu2)
    {
        $menus['top'][] = array(
            'id' => 'datospaciente',
            'titulo' => 'Datos Personales',
            'enlace' => BASE_URL . 'post/datospaciente',
            'imagen' => 'icon-user'
        );
        return $menus[$menu2];
    }
}

?>