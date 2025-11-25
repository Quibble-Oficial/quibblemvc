<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UsuarioHandler;
use \src\handlers\RelatorioHandler;
use Dompdf\Dompdf;
use Dompdf\Options;

class RelatorioController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->loggedUser = UsuarioHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function gerar()
    {
        // Certifique-se de que este método (ou um similar) no seu Handler 
        // está retornando a estrutura de dados acima.
        $dados = RelatorioHandler::getDadosRelatorioCompleto(); 

        // Captura o HTML renderizado do template
        $html = $this->render('relatorio/template_pdf', $dados, true); 

        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->setIsHtml5ParserEnabled(true);
        $options->set('isRemoteEnabled', true); 

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $nomeArquivo = 'Relatorio_Completo_Quibble_' . date('Ymd_His') . '.pdf';
        
        $dompdf->stream($nomeArquivo, ["Attachment" => true]);
        exit;
    }
}