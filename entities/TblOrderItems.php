<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TblOrderItems
 *
 * @ORM\Table(name="tbl_order_items")
 * @ORM\Entity
 */
class TblOrderItems
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
     * @ORM\Column(name="order_id", type="string", length=255, nullable=false)
     */
    private $orderId;

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

    /**
     * @var float
     *
     * @ORM\Column(name="menu_total_price", type="float", precision=11, scale=2, nullable=false)
     */
    private $menuTotalPrice;


}
