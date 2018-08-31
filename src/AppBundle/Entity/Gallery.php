<?php



namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert; 

/**
 * @ORM\Entity
 * @ORM\Table(name="gallery")
 */
class Gallery
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;


   /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Please, upload the photo.") 
     * @Assert\File(mimeTypes={ "image/png", "image/jpeg" }) 
     */
    private $imageName;

    


    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    

    public function setImageName(?string $imageName)
    {
        $this->imageName = $imageName;
        return $this;
    }

    public function getImageName()
    {
        return $this->imageName;
    }
    
   

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return Slider
     */
    public function setUpdatedAt(\DateTime $updatedAt)
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
