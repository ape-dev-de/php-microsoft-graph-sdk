<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveRestoreArtifactsBulkAdditionRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DriveRestoreArtifactsBulkAdditionRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DriveRestoreArtifactsBulkAdditionRequestCollectionResponse properties
     * 
     * @param array<string> $select Use DriveRestoreArtifactsBulkAdditionRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
