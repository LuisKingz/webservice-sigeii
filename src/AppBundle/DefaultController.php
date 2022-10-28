<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Services\Helpers;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        echo 'Servicios del sistema';
        die();
    }

    public function getInfoUserAction(Request $request) {
        $helpers = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager();
        $respositry = $em->getRepository('AppBundle:Usuario');
        $result = $respositry->findAll();

        $data = array(
            'status' => 'error',
            'code' => 400,
            'msg' => 'No hay usuario',
            'result' => $result
        );

        if (count($result) != 0) {
            $data = array(
                'status' => 'success',
                'code' => 200,
                'msg' => 'Hay usuario',
                'result' => $result
            );
        }
        return $helpers->json($data);
    }

    // falta la subida de las imagenes
    public function createReportAction(Request $request) {
        $helpers = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager();

        $json = $request->get("json", null);

        $params = json_encode($json);
        $description = $params->description;

        $IDsiniestro = $params->idsiniestro;
        $IDEspacioi = $params->idEspacio;

        $siniestro = $em->getRepository('AppBundle:Siniestro')->find($IDsiniestro);
        $espaciofisico = $em->getRepository('AppBundle:Espaciofisico')->find($espaciofisico);
        $reporte = new \AppBundle\Entity\Siniestro();
        $fecha = date_default_timezone_get();

        $reporte->setDescripcionsiniestro($description);
        $reporte->setFechasiniestro($fecha);
        $reporte->setEstadosiniestro(1);
        $reporte->setTiposiniestro($siniestro);

        $em->persist($reporte);
        $em->flush();

        $data = array(
            'status' => 'error',
            'code' => 400,
            'msg' => 'registro',
            'result' => $result
        );
    }

    public function getSiniestroAction() {
        $helpers = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Siniestro');
        $result = $repository->findAll();
        $data = array(
            'status' => 'error',
            'code' => 400,
            'msg' => 'No hay registro de siniestro',
            'result' => $result
        );
        if (count($result) != 0) {
            $data = array(
                'status' => 'success',
                'code' => 200,
                'msg' => 'Siniestros',
                'result' => $result
            );
        }
        return $helpers->json($data);
    }

   
    public function getInfoBuildingAction(Request $request) {
        $json = $request->get("json", null);
        $param = json_decode($json);
        $id = $param->id;
        $helpers = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('AppBundle:Inmueble');
        $result = $repository->findBy(['idinmueble' => $id]);
        $repository = $em->getRepository('AppBundle:Divisionacademica');
        $result2 = $repository->findBy(['idInmueble' => $id]);
        $repository = $em->getRepository('AppBundle:Academia');
        $result3 = $repository->findBy(['idInmueble' => $id]);
        $data = array(
            'status' => 'error',
            'code' => 400,
            'msg' => 'No hay registro de Edificios',
            'result' => 'No hay Edificio',
            'result2' => null,
            'result3' => null
        );
        if (count($result2) != 0 && count($result3) != 0 && count($result) != 0) {
            $data = array(
                'status' => 'success',
                'code' => 200,
                'msg' => 'Edificios',
                'result' => $result,
                'result2' => $result2,
                'result3' => $result3
            );
        } else if (count($result2) != 0 && count($result3) == 0) {
            $data = array(
                'status' => 'success',
                'code' => 200,
                'msg' => 'Edificios',
                 'result' => $result,
                'result2' => $result2,
                'result3' => null
            );
        } else if (count($result2) == 0 && count($result3) != 0) {
            $data = array(
                'status' => 'success',
                'code' => 200,
                'msg' => 'Edificios',
                'result' => $result,
                'result2' => null,
                'result3' => $result3
            );
        }else if (count($result2) == 0 && count($result3) == 0 && count($result) != 0) {
        	$data = array(
                'status' => 'success',
                'code' => 200,
                'msg' => 'Edificios',
                'result' => $result,
                'result2' => null,
                'result3' => null
            );
        }
        return $helpers->json($data);
    }

    /**
     * 
     * @return 
     */
    public function getBuildAction() {
        //$json = $request->get("json", null);
        //$param = json_decode($json);
        //$id = $param->id;
        $helpers = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Inmueble');
        //$result = $repository->findBy(["idespaciofisico" => $id]);
        $result = $repository->findAll();
        $data = array(
            'status' => 'error',
            'code' => 400,
            'msg' => 'No hay registro de Edificios',
            'result' => $result
        );
        if (count($result) != 0) {
            $data = array(
                'status' => 'success',
                'code' => 200,
                'msg' => 'Edificios',
                'result' => $result
            );
        }
        return $helpers->json($data);
    }

    //Consulta de inmuebles
    public function getInmuebleAction() {
        $helpers = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Inmueble');
        $result = $repository->findAll();
        $data = array(
            'status' => 'error',
            'code' => 400,
            'msg' => 'No hay registro de siniestro',
            'result' => $result
        );
        if (count($result) != 0) {
            $data = array(
                'status' => 'success',
                'code' => 200,
                'msg' => 'Siniestros',
                'result' => $result
            );
        }
        return $helpers->json($data);
    }

    //consulta de Espacios fisicos
    public function getEspacioFisicoAction() {
        $helpers = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Espaciofisico');
        $result = $repository->findAll();
        $data = array(
            'status' => 'error',
            'code' => 400,
            'msg' => 'No hay registro de siniestro',
            'result' => $result
        );
        if (count($result) != 0) {
            $data = array(
                'status' => 'success',
                'code' => 200,
                'msg' => 'Siniestros',
                'result' => $result
            );
        }
        return $helpers->json($data);
    }

    public function getIncidenciaAction(Request $request) {
        $helpers = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager();

        $descripcion = $request->get('descripcionincidencia');
        $id_siniestro = $request->get('idSiniestro');
        $id_espacioFisico = $request->get('idEspacioFisico');

        $incidencia = new \AppBundle\Entity\Incidencia();
        $incidencia->setDescripcionincidencia($descripcion);
        $incidencia->setFechaincidencia(new \DateTime());

        $espacio = $em->getRepository('AppBundle:Espaciofisico')->find($id_espacioFisico);
        $incidencia->setIdEspaciofisico($espacio);

        $siniestro = $em->getRepository('AppBundle:Siniestro')->find($id_siniestro);
        $incidencia->setIdSiniestro($siniestro);

        $em->persist($incidencia);
        $em->flush();

        $fotografia = new \AppBundle\Entity\Fotoincidencia();
        $fotografia->setIdIncidencia($incidencia);

        $photo = $request->get('fotoincidencia');
        // $path = $this->container->getParameter('kernel.root_dir') . '/../web/assets/img/';
        $photo64 = str_replace('data:image/png;base64', '', $photo); //Retirar el formato base64
        $photo64Name = str_replace(' ', '+', $photo64); //Remover los espacios en nombre
        $dataPhoto = base64_decode($photo64Name); //convertir el codigo base64 a una imagen

        $fotografia->setFotoincidencia($dataPhoto);

        $em->persist($fotografia);
        $em->flush();
        $data = array(
            'status' => 'success',
            'code' => 200,
            'msg' => 'Nueva incicencia creada!!',
            'data' => $incidencia
        );

        return $helpers->json($data);
    }
    
    public function getIncidenciaInmuebleAction(Request $request){
        $helpers = $this->get(Helpers::class);
        $em = $this->getDoctrine()->getManager();

        $descripcion = $request->get('descripcionincidencia');
        $id_espacioFisico = $request->get('idEspacioFisico');
        $id_inmueble = $request->get('idInmueble');
        
        $incidencia = new \AppBundle\Entity\Incidencia();
        $incidencia->setDescripcionincidencia($descripcion);
        $incidencia->setFechaincidencia(new \DateTime());
        
        $espacio = $em->getRepository('AppBundle:Espaciofisico')->find($id_espacioFisico);
        $incidencia->setIdEspaciofisico($espacio);
        $inmueble = $em->getRepository('AppBundle:Inmueble')->find($id_inmueble);
        
        $em->persist($incidencia);
        $em->flush();
        
        $fotografia = new \AppBundle\Entity\Fotoinmueble();
        $fotografia->setIdInmueble($inmueble);
        $photo = $request->get('fotoinmueble');
        $photo64 = str_replace('data:image/png;base64', '', $photo); //Retirar el formato base64
        $photo64Name = str_replace(' ', '+', $photo64); //Remover los espacios en nombre
        $dataPhoto = base64_decode($photo64Name); //convertir el codigo base64 a una imagen
        $fotografia->setFotoinmueble($dataPhoto);   
        
        $em->persist($fotografia);
        $em->flush();
        $data = array(
            'status' => 'success',
            'code' => 200,
            'msg' => 'Nueva incicencia creada!!',
            'data' => $incidencia
        );
        return $helpers->json($data);

    }

}
