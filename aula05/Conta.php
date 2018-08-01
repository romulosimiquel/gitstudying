<?php
class Conta {
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	public function abrirConta ($t) {
		$this -> setTipo ($t);
		$this -> setStatus (true);
		if ($t == "CC") {
			$this -> setSaldo (50);
		} elseif ($t == "CP") {
			$this -> setSaldo (150);
			
		}
		
	}
	public function fecharConta () {
		if ($this -> getSaldo () > 0) {
			echo "<p>Ainda tem dinheiro doido</p>";
		}elseif ($this -> getSaldo () < 0 ) {
			echo "<p>Ta devendo a casa</p>";
		} else {
			$this -> setStatus (false);
			echo "<p>Parabéns por me fazer perder tempo abrindo e fechando conta</p>";
		}
	}

	public function depositar ($v) {
		if ($this -> getStatus ()) {
			$this -> setSaldo ($this -> getSaldo () + $v);
			echo "<p>Gif moni plox</p>";
		} else {
			echo "<p>Não é possível depositar</p>";
		}

	}

	public function sacar ($v) {
		if ($this -> getStatus ()) {
			if ($this -> getSaldo () >= $v) {
				$this -> setSaldo ($this -> getSaldo () - $v);
				echo "Saque de $v autorizado na conta de ",$this->getDono(),"</p>";
			} else {
				echo "<p>Saldo insuficiente</p>";
			}
		} else {
			echo "<p>Cria a conta desgraça!</p>";
		}
	}

	public function pagarMensal () {
		if ($this -> getStatus ()) {
			if ($this -> getTipo () == "CC") {
			$this -> setSaldo ($this -> getSaldo () - 12);
			echo "<p>pagou sua mensalidade desgraça!</p>";
			} else {
				$this -> setSaldo ($this -> getSaldo () - 20);
				echo "<p>Parabéns, você me deu dinherio</p>";
			}
		} else {
			echo "<p>De novo? Vai criar conta não?</p>";
		}
	}

	public function __construct () {
		$this -> setSaldo (0);
		$this -> setStatus (false);
		echo "<p>Conta criada com sucesso!</p>";

	}

	public function getnumConta () {
		return $this -> numConta;
	}

	public function setnumConta ($numConta) {
		$this -> numConta = $numConta;

	}

	public function getTipo () {
		return $this -> tipo; 
	}

	public function setTipo ($tipo) {
		$this -> tipo = $tipo;
	}

	public function getDono () {
		return $this -> dono; 
	}

	public function setDono ($dono) {
		$this -> dono = $dono;
	}

	public function getSaldo () {
		return $this -> saldo; 
	}

	public function setSaldo ($saldo) {
		$this -> saldo = $saldo;
	}

	public function getStatus () {
		return $this -> status;
	}

	public function setStatus ($status) {
		$this -> status = $status;
	}

}
?>