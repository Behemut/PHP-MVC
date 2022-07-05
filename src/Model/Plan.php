<?php
namespace Model;

class Plan extends ActiveRecord
{
    public $codigo;
    public $descripcion;

    public function __construct($args = [])
    {
        $this->codigo = $args['codigo'] ?? NULL;
        $this->descripcion = $args['descripcion'] ?? "";
    }

    public function getPlan()
    {
        $query = 'SELECT * FROM plan';
        $result = self::$db->query($query);
        if ($result->num_rows > 0) {
            $valor = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $valor;
        }
        return [];
    }
    
    public function postPlan()
    {
        $query = 'INSERT into plan(descripcion) VALUES ("' . $this->descripcion . '")';
        self::$db->query($query);
    }

    public function getDeletePlan($id)
    {
        $query = 'SELECT * FROM plan WHERE codigo=' . $id;
        $result = self::$db->query($query);
        if ($result->num_rows > 0) {
            $valor = $result->fetch_assoc();
            return $valor;
        }
        return [];
    }
    public function getEditPlan($id)
    {
        $query = 'SELECT * FROM plan WHERE codigo=' . $id;
        $result = self::$db->query($query);
        if ($result->num_rows > 0) {
            $valor = $result->fetch_assoc();
            return $valor;
        }
        return [];
    }
    public function postDeletePlan($id)
    {
        $query = 'DELETE FROM plan WHERE codigo=' . $id;
        self::$db->query($query);
    }
    public function postEditPlan()
    {
        $query = 'UPDATE plan SET descripcion="' . $this->descripcion . '" WHERE codigo=' . $this->codigo;
        self::$db->query($query);
    }
}
?>