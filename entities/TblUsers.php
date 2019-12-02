<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TblUsers
 *
 * @ORM\Table(name="tbl_users")
 * @ORM\Entity
 */
class TblUsers
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
     * @ORM\Column(name="user_type", type="string", length=255, nullable=false)
     */
    private $userType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fb_id", type="string", length=255, nullable=true)
     */
    private $fbId = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="gplus_id", type="string", length=255, nullable=true)
     */
    private $gplusId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_image", type="text", length=65535, nullable=true)
     */
    private $userImage;

    /**
     * @var string
     *
     * @ORM\Column(name="paypal_payment_id", type="string", length=255, nullable=false)
     */
    private $paypalPaymentId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="confirm_code", type="string", length=255, nullable=false)
     */
    private $confirmCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false, options={"default"="1"})
     */
    private $status = '1';


}
