<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OneDriveForBusinessRestoreSessionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OneDriveForBusinessRestoreSessionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OneDriveForBusinessRestoreSessionCollectionResponse properties
     * 
     * @param array<string> $select Use OneDriveForBusinessRestoreSessionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
