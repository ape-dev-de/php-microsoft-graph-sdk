<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySensorCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecuritySensorCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecuritySensorCollectionResponse properties
     * 
     * @param array<string> $select Use SecuritySensorCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
