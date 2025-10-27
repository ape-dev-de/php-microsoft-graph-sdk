<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailSearchFolder
 */
class MailSearchFolder
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The number of immediate child mailFolders in the current mailFolder. */
    public ?float $childFolderCount = null;

    /** The mailFolder's display name. */
    public ?string $displayName = null;

    /** Indicates whether the mailFolder is hidden. This property can be set only when creating the folder. Find more information in Hidden mail folders. */
    public ?bool $isHidden = null;

    /** The unique identifier for the mailFolder's parent mailFolder. */
    public ?string $parentFolderId = null;

    /** The number of items in the mailFolder. */
    public ?float $totalItemCount = null;

    /** The number of items in the mailFolder marked as unread. */
    public ?float $unreadItemCount = null;

    /** 
     * The collection of child folders in the mailFolder.
     * @var MailFolder[]
     */
    public array $childFolders = [];

    /** 
     * The collection of rules that apply to the user's Inbox folder.
     * @var MessageRule[]
     */
    public array $messageRules = [];

    /** 
     * The collection of messages in the mailFolder.
     * @var Message[]
     */
    public array $messages = [];

    /** 
     * The collection of multi-value extended properties defined for the mailFolder. Read-only. Nullable.
     * @var MultiValueLegacyExtendedProperty[]
     */
    public array $multiValueExtendedProperties = [];

    /** 
     * The collection of single-value extended properties defined for the mailFolder. Read-only. Nullable.
     * @var SingleValueLegacyExtendedProperty[]
     */
    public array $singleValueExtendedProperties = [];

    /** The OData query to filter the messages. */
    public ?string $filterQuery = null;

    /** Indicates how the mailbox folder hierarchy should be traversed in the search. true means that a deep search should be done to include child folders in the hierarchy of each folder explicitly specified in sourceFolderIds. false means a shallow search of only each of the folders explicitly specified in sourceFolderIds. */
    public ?bool $includeNestedFolders = null;

    /** Indicates whether a search folder is editable using REST APIs. */
    public ?bool $isSupported = null;

    /** 
     * The mailbox folders that should be mined.
     * @var string[]
     */
    public array $sourceFolderIds = [];


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
        if (isset($data['childFolderCount'])) {
            $this->childFolderCount = is_numeric($data['childFolderCount']) ? (float)$data['childFolderCount'] : $data['childFolderCount'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isHidden'])) {
            $this->isHidden = is_bool($data['isHidden']) ? $data['isHidden'] : (bool)$data['isHidden'];
        }
        if (isset($data['parentFolderId'])) {
            $this->parentFolderId = $data['parentFolderId'];
        }
        if (isset($data['totalItemCount'])) {
            $this->totalItemCount = is_numeric($data['totalItemCount']) ? (float)$data['totalItemCount'] : $data['totalItemCount'];
        }
        if (isset($data['unreadItemCount'])) {
            $this->unreadItemCount = is_numeric($data['unreadItemCount']) ? (float)$data['unreadItemCount'] : $data['unreadItemCount'];
        }
        if (isset($data['childFolders'])) {
            $this->childFolders = $data['childFolders'];
        }
        if (isset($data['messageRules'])) {
            $this->messageRules = $data['messageRules'];
        }
        if (isset($data['messages'])) {
            $this->messages = $data['messages'];
        }
        if (isset($data['multiValueExtendedProperties'])) {
            $this->multiValueExtendedProperties = $data['multiValueExtendedProperties'];
        }
        if (isset($data['singleValueExtendedProperties'])) {
            $this->singleValueExtendedProperties = $data['singleValueExtendedProperties'];
        }
        if (isset($data['filterQuery'])) {
            $this->filterQuery = $data['filterQuery'];
        }
        if (isset($data['includeNestedFolders'])) {
            $this->includeNestedFolders = is_bool($data['includeNestedFolders']) ? $data['includeNestedFolders'] : (bool)$data['includeNestedFolders'];
        }
        if (isset($data['isSupported'])) {
            $this->isSupported = is_bool($data['isSupported']) ? $data['isSupported'] : (bool)$data['isSupported'];
        }
        if (isset($data['sourceFolderIds'])) {
            $this->sourceFolderIds = $data['sourceFolderIds'];
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
