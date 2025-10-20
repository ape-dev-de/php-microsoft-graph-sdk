<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteRestoreArtifactCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SiteRestoreArtifactCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SiteRestoreArtifactCollectionResponse properties
     * 
     * @param array<string> $select Use SiteRestoreArtifactCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
