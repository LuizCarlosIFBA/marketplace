

/**
 * class Cliente
 * 
 */
class Cliente
{

  /** Aggregations: */

  /** Compositions: */

   /*** Attributes: ***/

  /**
   * 
   * @access private
   */
  var $nome;
  /**
   * 
   * @access private
   */
  var $cpf;
  /**
   * 
   * @access private
   */
  var $email;
  /**
   * 
   * @access private
   */
  var $usuario;
  /**
   * 
   * @access private
   */
  var $senha;
  /**
   * 
   * @access private
   */
  var $cep;
  /**
   * 
   * @access private
   */
  var $telefone;
  /**
   * 
   * @access private
   */
  var $endereco;
  /**
   * 
   * @access private
   */
  var $sexo;





} // end of Cliente
?>



/**
 * class Pedido
 * 
 */
class Pedido
{

  /** Aggregations: */

  /** Compositions: */

   /*** Attributes: ***/

  /**
   * 
   * @access private
   */
  var $produto;

  /**
   * 
   *
   * @param Produto produto 
   * @param Cliente cliente 
   * @return Produto
   * @access public
   */
  function finalizarCompra( $produto,  $cliente)
  {
    
  } // end of member function finalizarCompra

  /**
   * 
   *
   * @param Pagamento pagamento 
   * @param Produto produto 
   * @return Produto
   * @access public
   */
  function addProduto( $pagamento,  $produto)
  {
    
  } // end of member function addProduto





} // end of Pedido
?>
