<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailSearchFolder
 */
class MailSearchFolder
{
    public function __construct(
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
