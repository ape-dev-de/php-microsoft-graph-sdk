<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailSearchFolder
 */
class MailSearchFolder
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The number of immediate child mailFolders in the current mailFolder. */
        public ?float $childFolderCount = null,
        /** The mailFolder's display name. */
        public ?string $displayName = null,
        /** Indicates whether the mailFolder is hidden. This property can be set only when creating the folder. Find more information in Hidden mail folders. */
        public ?bool $isHidden = null,
        /** The unique identifier for the mailFolder's parent mailFolder. */
        public ?string $parentFolderId = null,
        /** The number of items in the mailFolder. */
        public ?float $totalItemCount = null,
        /** The number of items in the mailFolder marked as unread. */
        public ?float $unreadItemCount = null,
        /** The collection of child folders in the mailFolder. */
        public array $childFolders = [],
        /** The collection of rules that apply to the user's Inbox folder. */
        public array $messageRules = [],
        /** The collection of messages in the mailFolder. */
        public array $messages = [],
        /** The collection of multi-value extended properties defined for the mailFolder. Read-only. Nullable. */
        public array $multiValueExtendedProperties = [],
        /** The collection of single-value extended properties defined for the mailFolder. Read-only. Nullable. */
        public array $singleValueExtendedProperties = [],
        /** The OData query to filter the messages. */
        public ?string $filterQuery = null,
        /** Indicates how the mailbox folder hierarchy should be traversed in the search. true means that a deep search should be done to include child folders in the hierarchy of each folder explicitly specified in sourceFolderIds. false means a shallow search of only each of the folders explicitly specified in sourceFolderIds. */
        public ?bool $includeNestedFolders = null,
        /** Indicates whether a search folder is editable using REST APIs. */
        public ?bool $isSupported = null,
        /** @var string[] The mailbox folders that should be mined. */
        public array $sourceFolderIds = []
    ) {}
}
