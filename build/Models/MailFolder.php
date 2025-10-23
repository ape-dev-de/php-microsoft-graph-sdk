<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailFolder
 */
class MailFolder
{
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


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['childFolderCount'])) {
            $this->childFolderCount = $data['childFolderCount'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isHidden'])) {
            $this->isHidden = $data['isHidden'];
        }
        if (isset($data['parentFolderId'])) {
            $this->parentFolderId = $data['parentFolderId'];
        }
        if (isset($data['totalItemCount'])) {
            $this->totalItemCount = $data['totalItemCount'];
        }
        if (isset($data['unreadItemCount'])) {
            $this->unreadItemCount = $data['unreadItemCount'];
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
    }
}
