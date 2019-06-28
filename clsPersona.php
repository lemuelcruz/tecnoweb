<?
include_once('clsConexion.php');
class Persona extends Conexion
{
	//atributos
	private $id_persona;
	private $nombre;
	private $paterno;
	private $materno;
	private $edad;
	
	//construtor
	public function Persona()
	{   parent::conexion();
		$this->id_persona=0;
		$this->nombre="";
		$this->paterno="";
		$this->materno="";
		$this->edad=0;		
	}
	//propiedades de acceso
	public function setIdPersona($valor)
	{
		$this->id_persona=$valor;
	}
	public function getIdPersona()
	{
		return $this->id_persona;
	}

	public function setNombre($valor)
	{
		$this->nombre=$valor;
	}
	public function getNombre()
	{
		return $this->nombre;
	}

		public function setPaterno($valor)
	{
		$this->paterno=$valor;
	}
	public function getPaterno()
	{
		return $this->paterno;
	}

		public function setMaterno($valor)
	{
		$this->materno=$valor;
	}
	public function getMaterno()
	{
		return $this->materno;
	}

	public function setEdad($valor)
	{
		$this->edad=$valor;
	}
	public function getEdad()
	{
		return $this->edad;
	}
	
	public function guardar()
	{
     $sql="insert into persona(nombre,paterno,materno,edad) values('$this->nombre','$this->paterno','$this->materno','$this->edad')";
		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar()	{
	$sql="update persona set nombre='$this->nombre',paterno='$this->paterno',materno='$this->materno', edad='$this->edad' where id_persona=$this->id_persona";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function eliminar()
	{
		$sql="delete from persona where id_persona=$this->id_persona";
		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function buscar()
	{
		$sql="select *from persona";
		return parent::ejecutar($sql);
	}										

	public function buscarPorCodigo($criterio)
	{
		$sql="select *from persona where id_persona like '$criterio%'";
		return parent::ejecutar($sql);
	}								
	
	public function buscarPorNombre($criterio)
	{
		$sql="select *from persona where nombre like '$criterio%'";
		return parent::ejecutar($sql);
	}
}    
?>