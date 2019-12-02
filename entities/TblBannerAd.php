<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TblBannerAd
 *
 * @ORM\Table(name="tbl_banner_ad")
 * @ORM\Entity
 */
class TblBannerAd
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
     * @ORM\Column(name="banner_name", type="string", length=255, nullable=false)
     */
    private $bannerName;

    /**
     * @var string
     *
     * @ORM\Column(name="banner_desc", type="text", length=65535, nullable=false)
     */
    private $bannerDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="banner_image", type="string", length=255, nullable=false)
     */
    private $bannerImage;

    /**
     * @var string
     *
     * @ORM\Column(name="banner_url", type="string", length=255, nullable=false)
     */
    private $bannerUrl;


}
