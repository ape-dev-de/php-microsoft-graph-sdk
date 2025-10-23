<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ListItem
 */
class ListItem
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
     * The content type of this list item
     * @var ContentTypeInfo|\stdClass|null
     */
    public mixed $contentType = null;

    /** 
     * Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @var SharepointIds|\stdClass|null
     */
    public mixed $sharepointIds = null;

    /** 
     * Analytics about the view activities that took place on this item.
     * @var ItemAnalytics|\stdClass|null
     */
    public mixed $analytics = null;

    /** 
     * Version information for a document set version created by a user.
     * @var DocumentSetVersion[]
     */
    public array $documentSetVersions = [];

    /** 
     * For document libraries, the driveItem relationship exposes the listItem as a driveItem
     * @var DriveItem|\stdClass|null
     */
    public mixed $driveItem = null;

    /** 
     * The values of the columns set on this list item.
     * @var FieldValueSet|\stdClass|null
     */
    public mixed $fields = null;

    /** 
     * The list of previous versions of the list item.
     * @var ListItemVersion[]
     */
    public array $versions = [];


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
        if (isset($data['contentType'])) {
            $this->contentType = $data['contentType'];
        }
        if (isset($data['sharepointIds'])) {
            $this->sharepointIds = $data['sharepointIds'];
        }
        if (isset($data['analytics'])) {
            $this->analytics = $data['analytics'];
        }
        if (isset($data['documentSetVersions'])) {
            $this->documentSetVersions = $data['documentSetVersions'];
        }
        if (isset($data['driveItem'])) {
            $this->driveItem = $data['driveItem'];
        }
        if (isset($data['fields'])) {
            $this->fields = $data['fields'];
        }
        if (isset($data['versions'])) {
            $this->versions = $data['versions'];
        }
    }
}
