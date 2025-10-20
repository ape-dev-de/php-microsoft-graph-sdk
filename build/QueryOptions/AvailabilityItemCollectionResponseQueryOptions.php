<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AvailabilityItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AvailabilityItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AvailabilityItemCollectionResponse properties
     * 
     * @param array<string> $select Use AvailabilityItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
