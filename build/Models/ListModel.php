<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ListModel
 */
class ListModel
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

    /** The displayable title of the list. */
    public ?string $displayName = null;

    /** 
     * Contains more details about the list.
     * @var ListInfo|\stdClass|null
     */
    public mixed $list = null;

    /** 
     * Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @var SharepointIds|\stdClass|null
     */
    public mixed $sharepointIds = null;

    /** 
     * If present, indicates that the list is system-managed. Read-only.
     * @var SystemFacet|\stdClass|null
     */
    public mixed $system = null;

    /** 
     * The collection of field definitions for this list.
     * @var ColumnDefinition[]
     */
    public array $columns = [];

    /** 
     * The collection of content types present in this list.
     * @var ContentType[]
     */
    public array $contentTypes = [];

    /** 
     * Allows access to the list as a drive resource with driveItems. Only present on document libraries.
     * @var Drive|\stdClass|null
     */
    public mixed $drive = null;

    /** 
     * All items contained in the list.
     * @var ListItem[]
     */
    public array $items = [];

    /** 
     * The collection of long-running operations on the list.
     * @var RichLongRunningOperation[]
     */
    public array $operations = [];

    /** 
     * The set of subscriptions on the list.
     * @var Subscription[]
     */
    public array $subscriptions = [];


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
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['list'])) {
            $this->list = $data['list'];
        }
        if (isset($data['sharepointIds'])) {
            $this->sharepointIds = $data['sharepointIds'];
        }
        if (isset($data['system'])) {
            $this->system = $data['system'];
        }
        if (isset($data['columns'])) {
            $this->columns = $data['columns'];
        }
        if (isset($data['contentTypes'])) {
            $this->contentTypes = $data['contentTypes'];
        }
        if (isset($data['drive'])) {
            $this->drive = $data['drive'];
        }
        if (isset($data['items'])) {
            $this->items = $data['items'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
        if (isset($data['subscriptions'])) {
            $this->subscriptions = $data['subscriptions'];
        }
    }
}
