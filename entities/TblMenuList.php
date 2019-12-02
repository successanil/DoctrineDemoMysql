<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TblMenuList
 *
 * @ORM\Table(name="tbl_menu_list")
 * @ORM\Entity
 */
class TblMenuList
{
    /**
     * @var int
     *
     * @ORM\Column(name="mid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mid;

    /**
     * @var int
     *
     * @ORM\Column(name="rest_id", type="integer", nullable=false)
     */
    private $restId;

    /**
     * @var int
     *
     * @ORM\Column(name="menu_cat", type="integer", nullable=false)
     */
    private $menuCat;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_name", type="string", length=255, nullable=false)
     */
    private $menuName;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_type", type="string", length=255, nullable=false)
     */
    private $menuType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="menu_info", type="text", length=65535, nullable=true)
     */
    private $menuInfo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="menu_image", type="string", length=255, nullable=true)
     */
    private $menuImage;

    /**
     * @var float
     *
     * @ORM\Column(name="menu_price", type="float", precision=11, scale=2, nullable=false)
     */
    private $menuPrice;


}
