<?php
session_start();
if(!isset($_SESSION['autenticado'])){
    header('Location: ../login.php');
}

// chamando os arquivos necessários do DOMPdf
require_once '../dompdf/lib/html5lib/Parser.php';
require_once '../dompdf/src/Autoloader.php';
require_once '../conexao.php';

// definindo os namespaces
Dompdf\Autoloader::register();
use Dompdf\Dompdf;

// inicializando o objeto Dompdf
$dompdf = new Dompdf();
$dompdf->set_paper("A4", "landscape");
$sql  = "SELECT * FROM impressora;";
$query = $con->query($sql);
$lista_impressora = $query->fetchAll();

// código HTML e PHP inserido no PDF
$html = ('
<style>#tabela{font-size: 10px;}</style>

<table id="tabela" class="table table-bordered">
 <tr>
<th>#</th>
    <th>Nome</th>
    <th>qtd</th>
    <th>categoria</th>
    <th>Região</th>
    <th>Informações Adicionais</th>
 </tr>
');

$html .= '<tbody>';

foreach ($lista_impressora as $item ){
 $html .= '<tr><td>'.($item['id']) . "</td>";
 $html .= '<td col-sm-6>'.($item['abastecimento']). "</td>";
 $html .= '<td col-sm-6>'.($item['qtd']). "</td>";
 $html .= '<td col-sm-6 style="text-align: center;">'.($item['categoria']). "</td>";
 $html .= '<td col-sm-6>'.($item['preco']) . "</td></tr>";
}

 $html .= '</tbody>';
 $html .= '</table>';


 //Criando a Instancia
 $dompdf = new DOMPDF();

 // Carrega o HTML
 $dompdf->load_html('
     <h3 style="text-align: left;">Relatório de impressoras cadastradas:</h3>
     '. $html .'
   ');

 //Renderizar o HTML
 $dompdf->render();

 //Exibir a página
 $dompdf->stream(
   "relatorio.pdf",
   array(
     "Attachment" => false //colocar true para fazer download
   )
   );
?>
