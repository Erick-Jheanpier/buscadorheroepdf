<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Spipu\Html2Pdf\Html2Pdf;

class SuperheroeController extends Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index()
    {
        return view('superheroes_search'); 
    }

    public function search()
    {
        $name = $this->request->getGet('name') ?? '';

        try {
            $query = $this->db->query("CALL sp_search_superheroe(?)", [$name]);
            $heroes = $query->getResultArray();
            $query->freeResult();
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            $heroes = [];
        }

        return view('superheroes_table', [
            'heroes' => $heroes,
            'name'   => $name
        ]);
    }

    public function exportPdf($name = null)
    {
        if (!$name) {
            return redirect()->to('/');
        }

        $name = urldecode($name);

        try {
            $query = $this->db->query("CALL sp_search_superheroe(?)", [$name]);
            $heroes = $query->getResultArray();
            $query->freeResult();
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            $heroes = [];
        }

        // 🔹 Limpiar todos los buffers de salida
        while (ob_get_level()) {
            ob_end_clean();
        }

        // 🔹 Generar HTML desde la vista
        $html = view('superheroes_pdf', [
            'heroes' => $heroes,
            'name'   => $name
        ]);

        // 🔹 Crear PDF
        $pdf = new Html2Pdf('P', 'A4', 'es');
        $pdf->writeHTML($html);

        // 🔹 Enviar al navegador
        $pdf->output('superheroes.pdf', 'I');
        exit; // 🔹 terminar ejecución para no enviar nada más
    }
}

