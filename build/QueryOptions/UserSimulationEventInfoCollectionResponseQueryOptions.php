<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserSimulationEventInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserSimulationEventInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserSimulationEventInfoCollectionResponse properties
     * 
     * @param array<string> $select Use UserSimulationEventInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
