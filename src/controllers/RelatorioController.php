<?php

namespace src\controllers;

use \core\Controller;
use \src\handlers\UsuarioHandler;
use \src\handlers\RelatorioHandler;
use Dompdf\Dompdf;
use Dompdf\Options;

class RelatorioController extends Controller
{

    private $loggedUser;

    public function __construct()
    {
        $this->loggedUser = UsuarioHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }

        if ($this->loggedUser->tipo_usuario === 'cidadao') {
            $this->redirect('/');
        }
    }

    public function gerarTipoProblema()
    {
        // 1. AUMENTAR RECURSOS (Pra aguentar 200 registros + imagens)
        ini_set('memory_limit', '512M');
        set_time_limit(300); // 5 minutos de limite

        // 2. DEBUG DE ERROS (Pra gente ver se o PHP tá morrendo por erro de código)
        // Se der erro, ele vai aparecer no final do PDF ou na tela branca.
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        // 3. BUSCA OS DADOS
        $dados = RelatorioHandler::getDadosRelatorioCompleto();

        // 4. CAPTURA DO HTML (O Pulo do Gato 🐱)
        // Iniciamos um buffer manual pra impedir que o render imprima na tela
        ob_start();

        // Renderiza a view. Mesmo que ela tenha 'echo', vai ficar preso no buffer.
        // Nota: Removi o 'true' do final, pois vamos capturar manualmente.
        $this->render('relatorio/template_pdf', $dados);

        // Pega tudo que foi gerado e guarda na variável $html
        $html = ob_get_clean();

        // 5. VERIFICAÇÃO DE SEGURANÇA
        // Se o HTML estiver vazio, deu ruim no render.
        if (empty($html)) {
            die("Erro: O HTML do relatório está vazio. Verifique se a View existe.");
        }

        // 6. GERAÇÃO DO PDF
        try {
            $options = new Options();
            $options->set('defaultFont', 'Arial');
            $options->setIsHtml5ParserEnabled(true);
            $options->set('isRemoteEnabled', true); // Importante para as imagens!

            $dompdf = new Dompdf($options);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');

            $dompdf->render();

            // Limpa qualquer lixo final antes do download
            if (ob_get_length()) ob_end_clean();

            // Download
            $dompdf->stream('Relatorio_Quibble_' . date('Y-m-d') . '.pdf', ["Attachment" => true]);
            exit;
        } catch (\Exception $e) {
            // Se der erro no Dompdf, mostra na tela
            ob_end_clean(); // Limpa o buffer pra mostrar só o erro
            echo "<h1>Erro ao gerar PDF:</h1>";
            echo "<pre>" . $e->getMessage() . "</pre>";
            exit;
        }
    }

    public function gerarDesempenho()
    {
        // 1. Configurações de memória
        ini_set('memory_limit', '512M');
        set_time_limit(300);
        ini_set('display_errors', 1); // Para debug, depois desligue

        // 2. Busca os dados específicos
        $dados = RelatorioHandler::getDadosDesempenhoSecretaria();

        // 3. Renderiza o HTML (Captura no buffer)
        ob_start();
        // Vamos criar este arquivo template_secretaria_pdf.php agora
        $this->render('relatorio/template_secretaria_pdf', $dados);
        $html = ob_get_clean();

        if (empty($html)) die("Erro: HTML vazio.");

        // 4. Gera o PDF
        try {
            $options = new \Dompdf\Options();
            $options->set('defaultFont', 'Helvetica');
            $options->setIsHtml5ParserEnabled(true);
            $options->set('isRemoteEnabled', true);

            $dompdf = new \Dompdf\Dompdf($options);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            if (ob_get_length()) ob_end_clean();

            $dompdf->stream('Relatorio_Desempenho_Secretaria.pdf', ["Attachment" => true]);
            exit;
        } catch (\Exception $e) {
            ob_end_clean();
            echo "Erro: " . $e->getMessage();
            exit;
        }
    }
}
