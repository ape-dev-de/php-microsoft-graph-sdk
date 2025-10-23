<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedDriveItem
 */
class SharedDriveItem
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

    /** 
     * Information about the owner of the shared item being referenced.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $owner = null;

    /** 
     * Used to access the underlying driveItem
     * @var DriveItem|\stdClass|null
     */
    public mixed $driveItem = null;

    /** 
     * All driveItems contained in the sharing root. This collection cannot be enumerated.
     * @var DriveItem[]
     */
    public array $items = [];

    /** 
     * Used to access the underlying list
     * @var ListModel|\stdClass|null
     */
    public mixed $list = null;

    /** 
     * Used to access the underlying listItem
     * @var ListItem|\stdClass|null
     */
    public mixed $listItem = null;

    /** 
     * Used to access the permission representing the underlying sharing link
     * @var Permission|\stdClass|null
     */
    public mixed $permission = null;

    /** 
     * Used to access the underlying driveItem. Deprecated -- use driveItem instead.
     * @var DriveItem|\stdClass|null
     */
    public mixed $root = null;

    /** 
     * Used to access the underlying site
     * @var Site|\stdClass|null
     */
    public mixed $site = null;


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
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['eTag'])) {
            $this->eTag = $data['eTag'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['parentReference'])) {
            $this->parentReference = $data['parentReference'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
        if (isset($data['createdByUser'])) {
            $this->createdByUser = $data['createdByUser'];
        }
        if (isset($data['lastModifiedByUser'])) {
            $this->lastModifiedByUser = $data['lastModifiedByUser'];
        }
        if (isset($data['owner'])) {
            $this->owner = $data['owner'];
        }
        if (isset($data['driveItem'])) {
            $this->driveItem = $data['driveItem'];
        }
        if (isset($data['items'])) {
            $this->items = $data['items'];
        }
        if (isset($data['list'])) {
            $this->list = $data['list'];
        }
        if (isset($data['listItem'])) {
            $this->listItem = $data['listItem'];
        }
        if (isset($data['permission'])) {
            $this->permission = $data['permission'];
        }
        if (isset($data['root'])) {
            $this->root = $data['root'];
        }
        if (isset($data['site'])) {
            $this->site = $data['site'];
        }
    }
}
