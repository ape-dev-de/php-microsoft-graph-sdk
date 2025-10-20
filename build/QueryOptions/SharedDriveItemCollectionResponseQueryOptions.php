<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedDriveItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SharedDriveItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SharedDriveItemCollectionResponse properties
     * 
     * @param array<string> $select Use SharedDriveItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
