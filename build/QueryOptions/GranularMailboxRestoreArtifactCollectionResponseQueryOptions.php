<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GranularMailboxRestoreArtifactCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class GranularMailboxRestoreArtifactCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific GranularMailboxRestoreArtifactCollectionResponse properties
     * 
     * @param array<string> $select Use GranularMailboxRestoreArtifactCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
