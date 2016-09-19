<?
/**
* ANATEL
*
* 11/05/2016 - criado por jaqueline.mendes - CAST
*
*/

require_once dirname(__FILE__).'/../../../SEI.php';

class TipoProcessoOrientacoesPeticionamentoDTO extends InfraDTO  {

	public function getStrNomeTabela() {
		return 'md_pet_tp_processo_orientacoes';
	}
	
	
	public function montar() {
	
		$this->adicionarAtributoTabela(InfraDTO::$PREFIXO_NUM,
				'IdTipoProcessoOrientacoesPeticionamento',
				'id_md_pet_tp_processo_orientacoes');
	
		$this->adicionarAtributoTabela(InfraDTO::$PREFIXO_STR,
				'OrientacoesGerais',
				'orientacoes_gerais');
		
		$this->adicionarAtributoTabela(InfraDTO::$PREFIXO_NUM,
				'IdConjuntoEstilos',
				'id_conjunto_estilos');
		
		$this->configurarPK('IdTipoProcessoOrientacoesPeticionamento', InfraDTO::$TIPO_PK_INFORMADO);
	
	}}
?>