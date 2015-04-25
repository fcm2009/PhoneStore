<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mohammed Alshehry
 * Date: 4/25/15
 * Time: 6:01 AM
 */

class Phone {
    private $id;
    private $model;
    private $color;
    private $price;
    private $touch;

    public function __construct($id, $modle, $color, $price, $touch)
    {
        $this->id = $id;
        $this->model = $modle;
        $this->color = $color;
        $this->price = $price;
        $this->touch = $touch;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getTouch()
    {
        return $this->touch;
    }

    /**
     * @param mixed $touch
     */
    public function setTouch($touch)
    {
        $this->touch = $touch;
    }
}