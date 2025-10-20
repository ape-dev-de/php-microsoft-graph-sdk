<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SchedulingGroupCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SchedulingGroupCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SchedulingGroupCollectionResponse properties
     * 
     * @param array<string> $select Use SchedulingGroupCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
