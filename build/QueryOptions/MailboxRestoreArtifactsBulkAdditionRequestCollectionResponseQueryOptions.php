<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailboxRestoreArtifactsBulkAdditionRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MailboxRestoreArtifactsBulkAdditionRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MailboxRestoreArtifactsBulkAdditionRequestCollectionResponse properties
     * 
     * @param array<string> $select Use MailboxRestoreArtifactsBulkAdditionRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
