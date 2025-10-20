<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintTaskTriggerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PrintTaskTriggerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PrintTaskTriggerCollectionResponse properties
     * 
     * @param array<string> $select Use PrintTaskTriggerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
