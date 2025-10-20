<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailboxRestoreArtifactsBulkAdditionRequest resources
 *
 * Available select fields:
 * - directoryObjectIds
 * - mailboxes
 */
class MailboxRestoreArtifactsBulkAdditionRequestQueryOptions extends QueryOptions
{
    public const FIELD_DIRECTORY_OBJECT_IDS = 'directoryObjectIds';
    public const FIELD_MAILBOXES = 'mailboxes';

    /**
     * Select specific MailboxRestoreArtifactsBulkAdditionRequest properties
     * 
     * @param array<string> $select Use MailboxRestoreArtifactsBulkAdditionRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
