<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Drive
 */
class Drive
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Identity of the user, device, or application that created the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

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
    public mixed $lastModifiedBy = null;

    /** Date and time the item was last modified. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The name of the item. Read-write. */
    public ?string $name = null;

    /** 
     * Parent information, if the item has a parent. Read-write.
     * @var ItemReference|\stdClass|null
     */
    public mixed $parentReference = null;

    /** URL that either displays the resource in the browser (for Office file formats), or is a direct link to the file (for other formats). Read-only. */
    public ?string $webUrl = null;

    /** 
     * Identity of the user who created the item. Read-only.
     * @var User|\stdClass|null
     */
    public mixed $createdByUser = null;

    /** 
     * Identity of the user who last modified the item. Read-only.
     * @var User|\stdClass|null
     */
    public mixed $lastModifiedByUser = null;

    /** Describes the type of drive represented by this resource. OneDrive personal drives return personal. OneDrive for Business returns business. SharePoint document libraries return documentLibrary. Read-only. */
    public ?string $driveType = null;

    /** 
     * Optional. The user account that owns the drive. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $owner = null;

    /** 
     * Optional. Information about the drive's storage space quota. Read-only.
     * @var Quota|\stdClass|null
     */
    public mixed $quota = null;

    /** 
     * 
     * @var SharepointIds|\stdClass|null
     */
    public mixed $sharePointIds = null;

    /** 
     * If present, indicates that it's a system-managed drive. Read-only.
     * @var SystemFacet|\stdClass|null
     */
    public mixed $system = null;

    /** 
     * Collection of bundles (albums and multi-select-shared sets of items). Only in personal OneDrive.
     * @var DriveItem[]
     */
    public array $bundles = [];

    /** 
     * The list of items the user is following. Only in OneDrive for Business.
     * @var DriveItem[]
     */
    public array $following = [];

    /** 
     * All items contained in the drive. Read-only. Nullable.
     * @var DriveItem[]
     */
    public array $items = [];

    /** 
     * For drives in SharePoint, the underlying document library list. Read-only. Nullable.
     * @var ListModel|\stdClass|null
     */
    public mixed $list = null;

    /** 
     * The root folder of the drive. Read-only.
     * @var DriveItem|\stdClass|null
     */
    public mixed $root = null;

    /** 
     * Collection of common folders available in OneDrive. Read-only. Nullable.
     * @var DriveItem[]
     */
    public array $special = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
        if (isset($data['driveType'])) {
            $this->driveType = $data['driveType'];
        }
        if (isset($data['owner'])) {
            $this->owner = is_array($data['owner']) ? new IdentitySet($data['owner']) : $data['owner'];
        }
        if (isset($data['quota'])) {
            $this->quota = is_array($data['quota']) ? new Quota($data['quota']) : $data['quota'];
        }
        if (isset($data['sharePointIds'])) {
            $this->sharePointIds = is_array($data['sharePointIds']) ? new SharepointIds($data['sharePointIds']) : $data['sharePointIds'];
        }
        if (isset($data['system'])) {
            $this->system = is_array($data['system']) ? new SystemFacet($data['system']) : $data['system'];
        }
        if (isset($data['bundles'])) {
            $this->bundles = $data['bundles'];
        }
        if (isset($data['following'])) {
            $this->following = $data['following'];
        }
        if (isset($data['items'])) {
            $this->items = $data['items'];
        }
        if (isset($data['list'])) {
            $this->list = is_array($data['list']) ? new ListModel($data['list']) : $data['list'];
        }
        if (isset($data['root'])) {
            $this->root = is_array($data['root']) ? new DriveItem($data['root']) : $data['root'];
        }
        if (isset($data['special'])) {
            $this->special = $data['special'];
        }
    }
}
