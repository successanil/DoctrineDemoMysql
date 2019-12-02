<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TblRating
 *
 * @ORM\Table(name="tbl_rating")
 * @ORM\Entity
 */
class TblRating
{
    /**
     * @var int
     *
     * @ORM\Column(name="r_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rId;

    /**
     * @var int
     *
     * @ORM\Column(name="rest_id", type="integer", nullable=false)
     */
    private $restId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=40, nullable=false)
     */
    private $ip;

    /**
     * @var int
     *
     * @ORM\Column(name="rate", type="integer", nullable=false)
     */
    private $rate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="msg", type="text", length=65535, nullable=true)
     */
    private $msg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_rate", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dtRate = 'CURRENT_TIMESTAMP';


}
