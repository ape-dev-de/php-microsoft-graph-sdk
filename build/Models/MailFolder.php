<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailFolder
 */
class MailFolder
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
        /** @var string[] The collection of single-value extended properties defined for the mailFolder. Read-only. Nullable. */
        public array $singleValueExtendedProperties = []
    ) {}
}
