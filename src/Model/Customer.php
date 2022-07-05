<?php
namespace Model;

class Customer extends ActiveRecord
{
    public $codigo;
    public $nombre;
    public $dui;
    public $direccion;

    public $codPlan;

    public function __construct($args = [])
    {
        $this->codigo = $args['codigo'] ?? NULL;
        $this->nombre = $args['nombre'] ?? "";
        $this->dui = $args['dui'] ?? "";
        $this->direccion = $args['direccion'] ?? "";
        $this->codPlan = $args['codPlan'] ?? "";


    }

    public function getCustomer()
    {
        $query = 'SELECT * FROM cliente';
        $result = self::$db->query($query);
        if ($result->num_rows > 0) {
            $valor = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $valor;
        }
        return [];
    }

    public function getPlans(){
        $query = 'SELECT * FROM plan';
        $result = self::$db->query($query);
        if ($result->num_rows > 0) {
            $valor = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $valor;
        }
        return [];
    }




    public function postCustomer()
    {
        $query = 'INSERT into cliente(nombre,dui,direccion) VALUES ("' . $this->nombre . '","' . $this->dui .'","' . $this->direccion .  '")';
        self::$db->query($query);
    }

    public function getDeleteCustomer($id)
    {
        $query = 'SELECT * FROM cliente WHERE codigo=' . $id;
        $result = self::$db->query($query);
        if ($result->num_rows > 0) {
            $valor = $result->fetch_assoc();
            return $valor;
        }
        return [];
    }

    public function postDeleteCustomer($id)
    {
        $query = 'DELETE FROM cliente WHERE codigo=' . $id;
        self::$db->query($query);
    }


    public function getEditCustomer($id)
    {
        $query = 'SELECT * FROM cliente WHERE codigo=' . $id;
        $result = self::$db->query($query);
        if ($result->num_rows > 0) {
            $valor = $result->fetch_assoc();
            return $valor;
        }
        return [];
    }

    public function postEditCustomer()
    {
        $query = 'UPDATE cliente SET nombre="' . $this->nombre . '", dui="' . $this->dui .'", direccion="' . $this->direccion . '" WHERE codigo=' . $this->codigo;
        self::$db->query($query);
    }

    public function postAddPlan()
    {
        $query = 'INSERT into cliente_plan(codigo_cliente,codigo_plan) VALUES ("' . $this->codigo . '","' . $this->codPlan . '")';
        self::$db->query($query);
    }
}
?>