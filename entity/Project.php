<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 20/05/2018
 * Time: 22:06
 */

class Project
{
    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $name;

    /**
     * @var
     */
    private $pitch;

    /**
     * @var
     */
    private $url;

    /**
     * @var
     */
    private $tech;

    /**
     * @var
     */
    private $pictRef;


    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId() :?int
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return null|string
     */
    public function getName() :?string
    {
        return $this->name;
    }

    /**
     * @param string $pitch
     */
    public function setPitch(string $pitch)
    {
        $this->pitch = $pitch;
    }

    public function getPitch() :?string
    {
        return $this->pitch;
    }

    /**
     * @param string $url
     */
    public function setUrl(?string $url)
    {
        $this->url = $url;
    }

    /**
     * @return null|string
     */
    public function getUrl() :?string
    {
        return $this->url;
    }

    /**
     * @param string $tech
     */
    public function setTech(string $tech)
    {
        $this->tech = $tech;
    }

    /**
     * @return null|string
     */
    public  function getTech() :?string
    {
        return $this->tech;
    }

    /**
     * @param string $pictRef
     */
    public function setPictRef(string $pictRef)
    {
        $this->pictRef = $pictRef;
    }

    /**
     * @return null|string
     */
    public function getPictRef() :?string
    {
        return $this->pictRef;
    }

}
