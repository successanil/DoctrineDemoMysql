<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TblCart
 *
 * @ORM\Table(name="tbl_cart")
 * @ORM\Entity
 */
class TblCart
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
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="rest_id", type="integer", nullable=false)
     */
    private $restId;

    /**
     * @var int
     *
     * @ORM\Column(name="menu_id", type="integer", nullable=false)
     */
    private $menuId;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_name", type="string", length=255, nullable=false)
     */
    private $menuName;

    /**
     * @var int
     *
     * @ORM\Column(name="menu_qty", type="integer", nullable=false)
     */
    private $menuQty;

    /**
     * @var float
     *
     * @ORM\Column(name="menu_price", type="float", precision=11, scale=2, nullable=false)
     */
    private $menuPrice;


}
