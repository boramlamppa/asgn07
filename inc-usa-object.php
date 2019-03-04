<?php
class USA
{
    private $capital;
    private $states;

    public function setNameOfcapital($capital)
    {
        $this->capital = $capital;
    }

    public function getNameOfcapital()
    {
        return $this->capital;
    }

    public function setNumberOfstates($states)
    {
        $this->states = $states;
    }

    public function getNumberOfstates()
    {
        return $this->states;
    }

public function greeting()
{
    echo "Welcome to the USA!";
}

}

?>