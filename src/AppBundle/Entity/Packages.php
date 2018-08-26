<?php

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="packages")
 */
class Packages
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(trategy="AUTO")
     */

    private $id;

    /**
     * @ORM\Column(type="text", length=500, unique=true)
     */
    private $path;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Packages
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
    /**
     * @var string
     */
    private $imageName;

    /**
     * @var int
     */
    private $imageSize;

    /**
     * @var \DateTime
     */
    private $updatedAt;


    /**
     * Set imageName.
     *
     * @param string $imageName
     *
     * @return Packages
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * Get imageName.
     *
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set imageSize.
     *
     * @param int $imageSize
     *
     * @return Packages
     */
    public function setImageSize($imageSize)
    {
        $this->imageSize = $imageSize;

        return $this;
    }

    /**
     * Get imageSize.
     *
     * @return int
     */
    public function getImageSize()
    {
        return $this->imageSize;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return Packages
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
