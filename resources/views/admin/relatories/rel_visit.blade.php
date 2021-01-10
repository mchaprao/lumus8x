<?php 
//CARREGAR DOMPDF
@include "dompdf2/autoload.inc.php";

use App\Models\Visit;
use Dompdf\Dompdf;


//ALIMENTAR OS DADOS NO RELATÓRIO
$body1 = "
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
<h3 align='center' class='text-danger'>Relatório de Visita</h3>

<table class='table' width='100%'>
			<tr bgcolor='#f9f9f9'>
				<td style='font-size:12px'> <b>ID</b> </td>
				<td style='font-size:12px'> <b>Data</b> </td>
				<td style='font-size:12px'> <b> Status</b> </td>
				
            </tr>";

            ?>
            
            
                <?php
                $bodydois = ""; 
                foreach($visit as $item){
                    // $valor = number_format($item->valor, 2, ',', '.');
                    $data = implode('/', array_reverse(explode('-', $item->visit_at)));
          
                    // $nome_recep = recepcionista::where('cpf', '=', $item->recep)->first();
                    // $nome_recep = @$nome_recep->nome;
                    
                    $body2 = "
                    <tr>
                    <td>
                    $item->id
                    </td>
                    <td>
                    $data
                    </td>
                    <td>
                     $item->status
                    </td>
                    
                        
                    </tr>
                    
                    ";
                    $bodydois = $bodydois . $body2;
                }
                ?>
            

<?php $body3 = "
         
</table>

";

$conteudo = $body1 .  $bodydois . $body3;
$html = utf8_encode($conteudo);

//INICIALIZAR A CLASSE DO DOMPDF
$pdf = new DOMPDF();

//Definir o tamanho do papel e orientação da página
$pdf->set_paper('A4', 'portrait');

//CARREGAR O CONTEÚDO HTML
$pdf->load_html(utf8_decode($html));

//RENDERIZAR O PDF
$pdf->render();

//NOMEAR O PDF GERADO
$pdf->stream(
'visita.pdf',
array("Attachment" => false)
);




?>