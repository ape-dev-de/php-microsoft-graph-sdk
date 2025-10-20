<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AlertTriggerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AlertTriggerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AlertTriggerCollectionResponse properties
     * 
     * @param array<string> $select Use AlertTriggerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
