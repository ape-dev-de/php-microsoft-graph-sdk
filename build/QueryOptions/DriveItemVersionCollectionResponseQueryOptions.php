<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveItemVersionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DriveItemVersionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DriveItemVersionCollectionResponse properties
     * 
     * @param array<string> $select Use DriveItemVersionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
