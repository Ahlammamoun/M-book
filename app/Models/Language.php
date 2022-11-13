<?php


class language
{
    private $id;
    private $name;
    private $footer_order;
    private $created_at;
    private $updated_at;

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getFooter_order()
    {
        return $this->footer_order;
    }
    public function setFooter_order($footer_order)
    {
        $this->footer_order = $footer_order;
    }
    public function getCreated_at()
    {
        return $this->created_at;
    }
    public function getUpdated_at()
    {
        return $this->updated_at;
    }
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;
    }
}
