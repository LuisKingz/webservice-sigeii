<?php

namespace SisaBundle\Controller;

use AppBundle\Services\Helpers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction() {

        echo "servicios del sistema SISA";
        die();
    }

    public function loginAction(Request $request) {
        $helper = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager("sisa");

        $json = $request->get("json", null);
        $params = json_decode($json);

        $user = (isset($params->user)) ? $params->user : null;
        $password = (isset($params->pass)) ? $params->pass : null;


        $login = $em->getRepository("SisaBundle:Usuario")
                ->findOneBy(['usuario' => $user, 'pass' => $password]);


        $data = array(
            'status' => 'error',
            'code' => 400,
            'msg' => 'Usuario o contraseña incorrecta',
            'token' => 0,
            'data' => null
        );

        if ($login != null) {
            $rol = $login->getTipousuario();
            $clave = $login->getClaveidentidad();

            if ($rol == 'estudiante') {
                $estudiante = $em->getRepository("SisaBundle:Alumno")->findOneBy(["matricula" => $clave]);
                $data = array(
                    'status' => 'success',
                    'code' => 200,
                    'msg' => 'Bienvenido',
                    'token' => 1,
                    'data' => $estudiante
                );
            } else if ($rol == 'docente') {
                $docente = $em->getRepository("SisaBundle:Profesor")->findOneBy(["idprofesor" => $clave]);
                $data = array(
                    'status' => 'success',
                    'code' => 200,
                    'msg' => 'Bienvenido',
                    'token' => 2,
                    'data' => $docente
                );
            } else {
                $data = array(
                    'status' => 'success',
                    'code' => 200,
                    'msg' => 'Ah ocurrido un error',
                    'token' => 1,
                    'data' => null
                );
            }
        } else {
            $data = array(
                'status' => 'error',
                'code' => 400,
                'msg' => 'Usuario o contarseña incorrecta',
                'token' => 0,
                'data' => null
            );
        }
        return $helper->json($data);
    }

    public function getDocenteAction() {
        $helpers = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager("sisa");

        $docente = $em->getRepository("SisaBundle:Profesor")->findAll();

        $data = array(
            'status' => 'error',
            'code' => 400,
            'msg' => 'No hay registros',
            'data' => null
        );

        if (count($docente) != 0) {

            $data = array(
                'status' => 'success',
                'code' => 200,
                'msg' => 'Datos de los docentes',
                'data' => $docente
            );
        }
        return $helpers->json($data);
    }

    public function getAlumnoAction() {
        $helper = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager("sisa");

        $alumno = $em->getRepository("AppBundle:Alumno")->findAll();

        $data = array(
            'status' => 'error',
            'code' => 400,
            'msg' => 'No hay registros',
            'data' => null
        );

        if (count($alumno) != 0) {

            $data = array(
                'status' => 'success',
                'code' => 200,
                'msg' => 'Datos de los alumnos',
                'token' => 0,
                'data' => $alumno
            );
        }
        return $helper->json($data);
    }

}
