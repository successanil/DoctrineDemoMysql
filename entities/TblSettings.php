<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TblSettings
 *
 * @ORM\Table(name="tbl_settings")
 * @ORM\Entity
 */
class TblSettings
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
     * @ORM\Column(name="envato_buyer_name", type="string", length=255, nullable=false)
     */
    private $envatoBuyerName;

    /**
     * @var string
     *
     * @ORM\Column(name="envato_purchase_code", type="string", length=255, nullable=false)
     */
    private $envatoPurchaseCode;

    /**
     * @var string
     *
     * @ORM\Column(name="envato_buyer_email", type="string", length=255, nullable=false)
     */
    private $envatoBuyerEmail;

    /**
     * @var int
     *
     * @ORM\Column(name="envato_purchased_status", type="integer", nullable=false)
     */
    private $envatoPurchasedStatus = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="package_name", type="string", length=255, nullable=false)
     */
    private $packageName;

    /**
     * @var string
     *
     * @ORM\Column(name="ios_bundle_identifier", type="string", length=255, nullable=false)
     */
    private $iosBundleIdentifier;

    /**
     * @var string
     *
     * @ORM\Column(name="app_name", type="string", length=255, nullable=false)
     */
    private $appName;

    /**
     * @var string
     *
     * @ORM\Column(name="app_logo", type="string", length=255, nullable=false)
     */
    private $appLogo;

    /**
     * @var string
     *
     * @ORM\Column(name="app_email", type="string", length=255, nullable=false)
     */
    private $appEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="app_version", type="string", length=255, nullable=false)
     */
    private $appVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="app_author", type="string", length=255, nullable=false)
     */
    private $appAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="app_contact", type="string", length=255, nullable=false)
     */
    private $appContact;

    /**
     * @var string
     *
     * @ORM\Column(name="app_website", type="string", length=255, nullable=false)
     */
    private $appWebsite;

    /**
     * @var string
     *
     * @ORM\Column(name="app_description", type="text", length=65535, nullable=false)
     */
    private $appDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="app_developed_by", type="string", length=255, nullable=false)
     */
    private $appDevelopedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="app_privacy_policy", type="text", length=65535, nullable=false)
     */
    private $appPrivacyPolicy;

    /**
     * @var string
     *
     * @ORM\Column(name="app_terms_conditions", type="text", length=65535, nullable=false)
     */
    private $appTermsConditions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_from_email", type="string", length=255, nullable=true)
     */
    private $appFromEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="app_admin_email", type="string", length=255, nullable=true)
     */
    private $appAdminEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="api_all_order_by", type="string", length=255, nullable=false)
     */
    private $apiAllOrderBy;

    /**
     * @var int
     *
     * @ORM\Column(name="api_latest_limit", type="integer", nullable=false)
     */
    private $apiLatestLimit;

    /**
     * @var string
     *
     * @ORM\Column(name="api_cat_order_by", type="string", length=255, nullable=false)
     */
    private $apiCatOrderBy;

    /**
     * @var string
     *
     * @ORM\Column(name="api_cat_post_order_by", type="string", length=255, nullable=false)
     */
    private $apiCatPostOrderBy;

    /**
     * @var string
     *
     * @ORM\Column(name="publisher_id", type="text", length=65535, nullable=false)
     */
    private $publisherId;

    /**
     * @var string
     *
     * @ORM\Column(name="banner_ad", type="text", length=65535, nullable=false)
     */
    private $bannerAd;

    /**
     * @var string
     *
     * @ORM\Column(name="banner_ad_id", type="text", length=65535, nullable=false)
     */
    private $bannerAdId;

    /**
     * @var string
     *
     * @ORM\Column(name="interstital_ad", type="text", length=65535, nullable=false)
     */
    private $interstitalAd;

    /**
     * @var string
     *
     * @ORM\Column(name="interstital_ad_id", type="text", length=65535, nullable=false)
     */
    private $interstitalAdId;

    /**
     * @var string
     *
     * @ORM\Column(name="interstital_ad_click", type="text", length=65535, nullable=false)
     */
    private $interstitalAdClick;

    /**
     * @var string
     *
     * @ORM\Column(name="onesignal_app_id", type="text", length=65535, nullable=false)
     */
    private $onesignalAppId;

    /**
     * @var string
     *
     * @ORM\Column(name="onesignal_rest_key", type="text", length=65535, nullable=false)
     */
    private $onesignalRestKey;


}
