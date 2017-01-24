<?php

namespace gesGfctBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity(repositoryClass="gesGfctBundle\Repository\empresaRepository")
 */
class empresa
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var int
     *
     * @ORM\Column(name="cp", type="integer")
     */
    private $cp;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono1", type="integer")
     */
    private $telefono1;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono2", type="integer")
     */
    private $telefono2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="datetime")
     */
    private $fechaCreacion;

    /**
    *@ORM\OneToMany(targetEntity="alumno",mappedBy="empresaAlumnos")

    */
    private $alumnosEmp;
    /**
     * Get id
     *
     * @return int
     */

     /**
     * @ORM\OneToMany(targetEntity="alumno", mappedBy="empresa")
     */
    private $empresa;

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return empresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return empresa
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     *
     * @return empresa
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return int
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set telefono1
     *
     * @param integer $telefono1
     *
     * @return empresa
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return int
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set telefono2
     *
     * @param integer $telefono2
     *
     * @return empresa
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return int
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return empresa
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->alumnosEmp = new \Doctrine\Common\Collections\ArrayCollection();
        $this->empresa = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add alumnosEmp
     *
     * @param \gesGfctBundle\Entity\alumno $alumnosEmp
     *
     * @return empresa
     */
    public function addAlumnosEmp(\gesGfctBundle\Entity\alumno $alumnosEmp)
    {
        $this->alumnosEmp[] = $alumnosEmp;

        return $this;
    }

    /**
     * Remove alumnosEmp
     *
     * @param \gesGfctBundle\Entity\alumno $alumnosEmp
     */
    public function removeAlumnosEmp(\gesGfctBundle\Entity\alumno $alumnosEmp)
    {
        $this->alumnosEmp->removeElement($alumnosEmp);
    }

    /**
     * Get alumnosEmp
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlumnosEmp()
    {
        return $this->alumnosEmp;
    }

    /**
     * Add empresa
     *
     * @param \gesGfctBundle\Entity\alumno $empresa
     *
     * @return empresa
     */
    public function addEmpresa(\gesGfctBundle\Entity\alumno $empresa)
    {
        $this->empresa[] = $empresa;

        return $this;
    }

    /**
     * Remove empresa
     *
     * @param \gesGfctBundle\Entity\alumno $empresa
     */
    public function removeEmpresa(\gesGfctBundle\Entity\alumno $empresa)
    {
        $this->empresa->removeElement($empresa);
    }

    /**
     * Get empresa
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }
}
