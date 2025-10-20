<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveRestoreArtifactCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DriveRestoreArtifactCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DriveRestoreArtifactCollectionResponse properties
     * 
     * @param array<string> $select Use DriveRestoreArtifactCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
