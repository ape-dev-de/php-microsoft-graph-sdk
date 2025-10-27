<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Site
 */
class Site
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Identity of the user, device, or application that created the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** Date and time of item creation. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Provides a user-visible description of the item. Optional. */
    public ?string $description = null;

    /** ETag for the item. Read-only. */
    public ?string $eTag = null;

    /** 
     * Identity of the user, device, and application that last modified the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $lastModifiedBy = null;

    /** Date and time the item was last modified. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The name of the item. Read-write. */
    public ?string $name = null;

    /** 
     * Parent information, if the item has a parent. Read-write.
     * @var ItemReference|\stdClass|null
     */
    public ItemReference|\stdClass|null $parentReference = null;

    /** URL that either displays the resource in the browser (for Office file formats), or is a direct link to the file (for other formats). Read-only. */
    public ?string $webUrl = null;

    /** 
     * Identity of the user who created the item. Read-only.
     * @var User|\stdClass|null
     */
    public User|\stdClass|null $createdByUser = null;

    /** 
     * Identity of the user who last modified the item. Read-only.
     * @var User|\stdClass|null
     */
    public User|\stdClass|null $lastModifiedByUser = null;

    /** The full title for the site. Read-only. */
    public ?string $displayName = null;

    /** 
     * 
     * @var PublicError|\stdClass|null
     */
    public PublicError|\stdClass|null $error = null;

    /** Identifies whether the site is personal or not. Read-only. */
    public ?bool $isPersonalSite = null;

    /** 
     * If present, provides the root site in the site collection. Read-only.
     * @var Root|\stdClass|null
     */
    public Root|\stdClass|null $root = null;

    /** 
     * Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @var SharepointIds|\stdClass|null
     */
    public SharepointIds|\stdClass|null $sharepointIds = null;

    /** 
     * Provides details about the site's site collection. Available only on the root site. Read-only.
     * @var SiteCollection|\stdClass|null
     */
    public SiteCollection|\stdClass|null $siteCollection = null;

    /** 
     * Analytics about the view activities that took place on this site.
     * @var ItemAnalytics|\stdClass|null
     */
    public ItemAnalytics|\stdClass|null $analytics = null;

    /** 
     * The collection of column definitions reusable across lists under this site.
     * @var ColumnDefinition[]
     */
    public array $columns = [];

    /** 
     * The collection of content types defined for this site.
     * @var ContentType[]
     */
    public array $contentTypes = [];

    /** 
     * The default drive (document library) for this site.
     * @var Drive|\stdClass|null
     */
    public Drive|\stdClass|null $drive = null;

    /** 
     * The collection of drives (document libraries) under this site.
     * @var Drive[]
     */
    public array $drives = [];

    /** 
     * 
     * @var ColumnDefinition[]
     */
    public array $externalColumns = [];

    /** 
     * Used to address any item contained in this site. This collection can't be enumerated.
     * @var BaseItem[]
     */
    public array $items = [];

    /** 
     * The collection of lists under this site.
     * @var ListModel[]
     */
    public array $lists = [];

    /** 
     * Calls the OneNote service for notebook related operations.
     * @var Onenote|\stdClass|null
     */
    public Onenote|\stdClass|null $onenote = null;

    /** 
     * The collection of long-running operations on the site.
     * @var RichLongRunningOperation[]
     */
    public array $operations = [];

    /** 
     * The collection of pages in the baseSitePages list in this site.
     * @var BaseSitePage[]
     */
    public array $pages = [];

    /** 
     * The permissions associated with the site. Nullable.
     * @var Permission[]
     */
    public array $permissions = [];

    /** 
     * The collection of the sub-sites under this site.
     * @var Site[]
     */
    public array $sites = [];

    /** 
     * The default termStore under this site.
     * @var TermStoreStore|\stdClass|null
     */
    public TermStoreStore|\stdClass|null $termStore = null;

    /** 
     * The collection of termStores under this site.
     * @var TermStoreStore[]
     */
    public array $termStores = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['eTag'])) {
            $this->eTag = $data['eTag'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['parentReference'])) {
            $this->parentReference = is_array($data['parentReference']) ? new ItemReference($data['parentReference']) : $data['parentReference'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
        if (isset($data['createdByUser'])) {
            $this->createdByUser = is_array($data['createdByUser']) ? new User($data['createdByUser']) : $data['createdByUser'];
        }
        if (isset($data['lastModifiedByUser'])) {
            $this->lastModifiedByUser = is_array($data['lastModifiedByUser']) ? new User($data['lastModifiedByUser']) : $data['lastModifiedByUser'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new PublicError($data['error']) : $data['error'];
        }
        if (isset($data['isPersonalSite'])) {
            $this->isPersonalSite = $data['isPersonalSite'];
        }
        if (isset($data['root'])) {
            $this->root = is_array($data['root']) ? new Root($data['root']) : $data['root'];
        }
        if (isset($data['sharepointIds'])) {
            $this->sharepointIds = is_array($data['sharepointIds']) ? new SharepointIds($data['sharepointIds']) : $data['sharepointIds'];
        }
        if (isset($data['siteCollection'])) {
            $this->siteCollection = is_array($data['siteCollection']) ? new SiteCollection($data['siteCollection']) : $data['siteCollection'];
        }
        if (isset($data['analytics'])) {
            $this->analytics = is_array($data['analytics']) ? new ItemAnalytics($data['analytics']) : $data['analytics'];
        }
        if (isset($data['columns'])) {
            $this->columns = $data['columns'];
        }
        if (isset($data['contentTypes'])) {
            $this->contentTypes = $data['contentTypes'];
        }
        if (isset($data['drive'])) {
            $this->drive = is_array($data['drive']) ? new Drive($data['drive']) : $data['drive'];
        }
        if (isset($data['drives'])) {
            $this->drives = $data['drives'];
        }
        if (isset($data['externalColumns'])) {
            $this->externalColumns = $data['externalColumns'];
        }
        if (isset($data['items'])) {
            $this->items = $data['items'];
        }
        if (isset($data['lists'])) {
            $this->lists = $data['lists'];
        }
        if (isset($data['onenote'])) {
            $this->onenote = is_array($data['onenote']) ? new Onenote($data['onenote']) : $data['onenote'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
        if (isset($data['pages'])) {
            $this->pages = $data['pages'];
        }
        if (isset($data['permissions'])) {
            $this->permissions = $data['permissions'];
        }
        if (isset($data['sites'])) {
            $this->sites = $data['sites'];
        }
        if (isset($data['termStore'])) {
            $this->termStore = is_array($data['termStore']) ? new TermStoreStore($data['termStore']) : $data['termStore'];
        }
        if (isset($data['termStores'])) {
            $this->termStores = $data['termStores'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
