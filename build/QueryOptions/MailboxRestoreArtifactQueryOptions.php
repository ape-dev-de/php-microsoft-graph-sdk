<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailboxRestoreArtifact resources
 *
 * Available select fields:
 * - restoredFolderId
 * - restoredFolderName
 * - restoredItemCount
 */
class MailboxRestoreArtifactQueryOptions extends QueryOptions
{
    public const FIELD_RESTORED_FOLDER_ID = 'restoredFolderId';
    public const FIELD_RESTORED_FOLDER_NAME = 'restoredFolderName';
    public const FIELD_RESTORED_ITEM_COUNT = 'restoredItemCount';

    /**
     * Select specific MailboxRestoreArtifact properties
     * 
     * @param array<string> $select Use MailboxRestoreArtifactQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
