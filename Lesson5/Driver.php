<?php
//Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи. Этот метод должен
//вносить следующие private поля: водительский стаж, категория вождения (A, B, C).

class Driver extends Worker
{
    private $drivingExperience;
    private $drivingCategory;

    public function getDrivingExperience()
    {
        return $this->drivingExperience;
    }

    public function setDrivingExperience($drivingExperience)
    {
        return $this->drivingExperience = $drivingExperience;
    }

    public function getDrivingCategory()
    {
        return $this->drivingCategory;
    }

    public function setDrivingCategory($drivingCategory)
    {
        return $this->drivingCategory = $drivingCategory;
    }

}