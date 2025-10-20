<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserSimulationDetailsCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserSimulationDetailsCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserSimulationDetailsCollectionResponse properties
     * 
     * @param array<string> $select Use UserSimulationDetailsCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
