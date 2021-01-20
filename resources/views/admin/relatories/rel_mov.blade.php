<?php 
//CARREGAR DOMPDF
@include "dompdf2/autoload.inc.php";

use App\Models\recepcionista;
use Dompdf\Dompdf;


//ALIMENTAR OS DADOS NO RELATÓRIO
$body1 = "
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
<h3 align='center' class='text-danger'>Relatório de Movimentações</h3>

<table class='table' width='100%'>
			<tr bgcolor='#f9f9f9'>
				<td style='font-size:12px'> <b>Tipo</b> </td>
				<td style='font-size:12px'> <b>Descrição</b> </td>
				<td style='font-size:12px'> <b> Valor</b> </td>
				<td style='font-size:12px'> <b> Recepcionista</b> </td>
				<td style='font-size:12px'> <b> Data</b> </td>
				
            </tr>";

            ?>
            
            
                <?php
                $bodydois = ""; 
                foreach($itens as $item){
                    $valor = number_format($item->valor, 2, ',', '.');
                    $data = implode('/', array_reverse(explode('-', $item->data)));
          
                    $nome_recep = recepcionista::where('cpf', '=', $item->recep)->first();
                    $nome_recep = @$nome_recep->nome;
                    
                    $body2 = "
                    <tr>
                    <td>
                    $item->tipo
                    </td>
                    <td>
                    $item->descricao
                    </td>
                    <td>
                    $valor
                    </td>
                    <td>
                    $nome_recep
                    </td>
                    <td>
                    $data
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
'movimentacoes.pdf',
array("Attachment" => false)
);




?>