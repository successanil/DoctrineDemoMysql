<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TblRestaurants
 *
 * @ORM\Table(name="tbl_restaurants")
 * @ORM\Entity
 */
class TblRestaurants
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
     * @ORM\Column(name="cat_id", type="integer", nullable=false)
     */
    private $catId;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_name", type="string", length=255, nullable=false)
     */
    private $restaurantName;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_type", type="string", length=255, nullable=false)
     */
    private $restaurantType;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_image", type="string", length=255, nullable=false)
     */
    private $restaurantImage;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurant_address", type="string", length=500, nullable=false)
     */
    private $restaurantAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="restaurant_open_mon", type="string", length=255, nullable=true)
     */
    private $restaurantOpenMon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="restaurant_open_tues", type="string", length=255, nullable=true)
     */
    private $restaurantOpenTues;

    /**
     * @var string|null
     *
     * @ORM\Column(name="restaurant_open_wed", type="string", length=255, nullable=true)
     */
    private $restaurantOpenWed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="restaurant_open_thur", type="string", length=255, nullable=true)
     */
    private $restaurantOpenThur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="restaurant_open_fri", type="string", length=255, nullable=true)
     */
    private $restaurantOpenFri;

    /**
     * @var string|null
     *
     * @ORM\Column(name="restaurant_open_sat", type="string", length=255, nullable=true)
     */
    private $restaurantOpenSat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="restaurant_open_sun", type="string", length=255, nullable=true)
     */
    private $restaurantOpenSun;

    /**
     * @var int
     *
     * @ORM\Column(name="featured_restaurant", type="integer", nullable=false)
     */
    private $featuredRestaurant = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="total_rate", type="integer", nullable=false)
     */
    private $totalRate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="rate_avg", type="string", length=255, nullable=false)
     */
    private $rateAvg = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"default"="1"})
     */
    private $status = '1';


}
