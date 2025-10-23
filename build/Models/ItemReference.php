<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ItemReference
 */
class ItemReference
{
    /** Unique identifier of the driveItem in the drive or a listItem in a list. Read-only. */
    public ?string $id = null;

    /** Unique identifier of the drive instance that contains the driveItem. Only returned if the item is located in a drive. Read-only. */
    public ?string $driveId = null;

    /** Identifies the type of drive. Only returned if the item is located in a drive. See drive resource for values. */
    public ?string $driveType = null;

    /** The name of the item being referenced. Read-only. */
    public ?string $name = null;

    /** Percent-encoded path that can be used to navigate to the item. Read-only. */
    public ?string $path = null;

    /** A unique identifier for a shared resource that can be accessed via the Shares API. */
    public ?string $shareId = null;

    /** 
     * Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @var SharepointIds|\stdClass|null
     */
    public mixed $sharepointIds = null;

    /** For OneDrive for Business and SharePoint, this property represents the ID of the site that contains the parent document library of the driveItem resource or the parent list of the listItem resource. The value is the same as the id property of that site resource. It is an opaque string that consists of three identifiers of the site. For OneDrive, this property is not populated. */
    public ?string $siteId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['driveId'])) {
            $this->driveId = $data['driveId'];
        }
        if (isset($data['driveType'])) {
            $this->driveType = $data['driveType'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['path'])) {
            $this->path = $data['path'];
        }
        if (isset($data['shareId'])) {
            $this->shareId = $data['shareId'];
        }
        if (isset($data['sharepointIds'])) {
            $this->sharepointIds = is_array($data['sharepointIds']) ? new SharepointIds($data['sharepointIds']) : $data['sharepointIds'];
        }
        if (isset($data['siteId'])) {
            $this->siteId = $data['siteId'];
        }
    }
}
