<?php
namespace ZUMStats\Exceptions;
/**
 * Description of TooMuchNodesException
 *
 * @author Jenda
 */
class TooMuchNodesException extends ZUMException {
    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }    
}

?>
