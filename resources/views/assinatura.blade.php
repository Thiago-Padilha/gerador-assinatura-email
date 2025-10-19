@extends('layout.app')

@section('conteudo')
<hr />
<div>
    <table id="tabela">
        <tr>
            <td style="width: 5%; padding: 0; margin: 0; ">
                <img src="{{ asset('imagens/logoexemplo.png') }}"  width="175" height="80" />
                <img class="iconeredessociais" src="{{ asset('imagens/icones-redes-sociais.png') }}" />
           
			 </td>
		<td class="barralateral"></td>

            <td style="padding-left: 10pt;" >
                <h1 class="sem-espaco preto frutiger-black" style="font-size: 10pt;"> {{ $request->nome }} </h1>
                <h1 class="pos-espaco verde frutiger-condensed" style="font-size: 9pt;"> {{ $request->cargo }} </h1>
                <h1 class="sem-espaco preto frutiger-bold" style="font-size: 9pt;">(31) 9 0000-0000 {{ $request->celular ? ' / ' . $request->celular : '' }}</h1>
                <h1 class="pos-espaco preto frutiger-condensed"style="font-size: 9pt;"> {{ $request->email }} </h1>
                <h1 class="sem-espaco preto frutiger-condensed"style="font-size: 9pt;"> www.dominio.com.br </h1>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="padding-top: 8pt;">
                <h1 class="preto frutiger-condensed" style="font-size: 7.5pt;">
                    Aviso de Confidencialidade:<br> 
                    Esta mensagem e seus anexos têm caráter confidencial e seu conteúdo
                    é restrito ao destinatário e pessoas autorizadas.<br>
                    Tendo-a recebido por engano, por favor a retorne ao destinatário e apague-a imediatamente.<br>
                    Qualquer reprodução, alteração, distribuição sem prévio consentimento são proibidas.
                </h1>
            </td>
        </tr>
    </table>
</div>

<button class="btn btn-sm" id="btnSave" onClick="print()">Salvar Assinatura</button>

        <!--<button id="btn-ajuda-home" class="btn-ajuda" type="button">Ajuda Home</button>
            <div id="caixa-ajuda-home" class="caixa-ajuda">
                <button id="btn-fechar-home" class="btn-fechar" type="button">X</button>
                <p>Informações de ajuda para Home...</p>
            </div> -->


<hr />
@endsection

@section('javascript')
<script>
    function print() {
        var node = document.getElementById('tabela');
        var scale = 1.8;

        domtoimage.toPng(node, {
            height: node.offsetHeight * scale,
            width: node.offsetWidth * scale,
            style: {
                transform: "scale(" + scale + ")",
                transformOrigin: "top left",
                width: node.offsetWidth + "px",
                height: node.offsetHeight + "px"
            }
        }).then(function(dataUrl) {
            var link = document.createElement('a');
            link.download = 'minha-assinatura.jpeg';
            link.href = dataUrl;
            link.click();
        });
    }
</script>
@endsection
