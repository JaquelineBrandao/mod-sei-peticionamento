<style>

    .clear {
        clear: both;
        line-height: 0.5;
    }

    fieldset{
        border-radius: 10px;
    }

    .trEspaco {
        height: 1.5em;
        padding-top: 6px;
    }
    .tdTabulacao {
        padding-left: 15px;
    }
    .tdTabulacao2 {
        padding-left: 30px;
    }

    #descritivo{
        text-align: justify;
        line-height: 1.6;
    }

    .Texto_Justificado {
        font-size: 12pt;
        font-family: Calibri;
        text-align: justify;
        word-wrap: normal;
        text-indent: 0;
        margin: 6pt;
    }
    .Tabela_Justificado_Negrito {
        font-weight: bold;
        font-size: 12pt;
        font-family: Calibri;
        text-align: justify;
        word-wrap: normal;
        text-indent: 0;
        // margin: 6pt;
    }
</style>

<p class="Texto_Justificado">Pela presente Revoga��o de Procura��o Eletr�nica, o Outorgante abaixo indicado revoga os poderes concedidos ao Outorgado por meio da Procura��o Eletr�nica referenciada.</p>
<p class="Texto_Justificado">Os poderes de representa��o constantes na Procura��o Eletr�nica ora revogada cessam a partir da data do presente documento.</p>
<div>
    <table align="center" style="width: 90%" class="Tabela_Justificado_Negrito" border=0>
    <tbody>
        <tr class="trEspaco">
            <td style="width: 400px">Motivo da Revoga��o:</td>
        </tr>
        <tr>
            <td colspan=2 class="tdTabulacao" style="font-weight: normal;word-break: break-all;">@motivo</td>
        </tr>
        
        <tr><tr><td class="clear">&nbsp;</td></tr></tr>

        <tr class="trEspaco">
            <td>Procura��o Eletr�nica:</td>
        </tr>
        <tr>
            <td style="font-weight: normal;" class="tdTabulacao">N�mero do Processo</td>
            <td style="font-weight: normal;">@numProcesso</td>
        </tr>
        <tr>
            <td style="font-weight: normal;" class="tdTabulacao">@tipoProcuracao</td>
            <td style="font-weight: normal;">@numProcuracao</td>
        </tr>

        <tr><tr><td class="clear">&nbsp;</td></tr></tr>

        <tr class="trEspaco">
            <td>Outorgante:</td>
        </tr>
        <tr>
            <td class="tdTabulacao">Raz�o Social:</td>
            <td style="font-weight: normal;">@razaoSocial</td>
        </tr>
        <tr>
            <td class="tdTabulacao">CNPJ:</td>
            <td style="font-weight: normal;">@cnpj</td>
        </tr>
        <tr class="trEspaco">
            <td class="tdTabulacao">Respons�vel Legal:</td>
        </tr>
        <tr>
            <td class="tdTabulacao2">Nome:</td>
            <td style="font-weight: normal;">@nomeOutorgante</td>
        </tr>
        
        <tr><tr><td class="clear">&nbsp;</td></tr></tr>

        <tr class="trEspaco">
            <td>Outorgado:</td>
        </tr>
        <tr>
            <td class="tdTabulacao">Nome:</td>
            <td style="font-weight: normal;">@nomeOutorgado</td>
        </tr>
    </tbody>
</table>
</div>
<p class="Texto_Justificado">A exist�ncia deste instrumento de Revoga��o de Procura��o Eletr�nica, do processo e dos documentos acima indicados pode ser conferida no Portal na Internet do(a) @descricao_orgao@.</p>