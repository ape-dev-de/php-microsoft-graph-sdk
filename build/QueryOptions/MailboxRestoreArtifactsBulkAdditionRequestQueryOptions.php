<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailboxRestoreArtifactsBulkAdditionRequest resources
 *
 * Available select fields:
 */
class MailboxRestoreArtifactsBulkAdditionRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MailboxRestoreArtifactsBulkAdditionRequest
     */

    /**
     * Select specific MailboxRestoreArtifactsBulkAdditionRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
