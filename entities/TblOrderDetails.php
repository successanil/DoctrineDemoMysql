<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TblOrderDetails
 *
 * @ORM\Table(name="tbl_order_details")
 * @ORM\Entity
 */
class TblOrderDetails
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
     * @var string
     *
     * @ORM\Column(name="order_unique_id", type="string", length=255, nullable=false)
     */
    private $orderUniqueId;

    /**
     * @var string
     *
     * @ORM\Column(name="order_address", type="text", length=65535, nullable=false)
     */
    private $orderAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $orderDate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="order_comment", type="text", length=65535, nullable=false)
     */
    private $orderComment;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false, options={"default"="Pending"})
     */
    private $status = 'Pending';


}
