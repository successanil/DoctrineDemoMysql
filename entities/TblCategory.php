<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TblCategory
 *
 * @ORM\Table(name="tbl_category")
 * @ORM\Entity
 */
class TblCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cid;

    /**
     * @var string
     *
     * @ORM\Column(name="category_name", type="string", length=255, nullable=false)
     */
    private $categoryName;

    /**
     * @var string
     *
     * @ORM\Column(name="category_image", type="string", length=255, nullable=false)
     */
    private $categoryImage;


}
