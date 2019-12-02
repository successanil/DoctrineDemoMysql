<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TblIntro
 *
 * @ORM\Table(name="tbl_intro")
 * @ORM\Entity
 */
class TblIntro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="intro_title", type="string", length=255, nullable=false)
     */
    private $introTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="intro_description", type="text", length=65535, nullable=false)
     */
    private $introDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="intro_image", type="string", length=255, nullable=false)
     */
    private $introImage;


}
