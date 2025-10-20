<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationMetadataEntryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SynchronizationMetadataEntryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SynchronizationMetadataEntryCollectionResponse properties
     * 
     * @param array<string> $select Use SynchronizationMetadataEntryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
