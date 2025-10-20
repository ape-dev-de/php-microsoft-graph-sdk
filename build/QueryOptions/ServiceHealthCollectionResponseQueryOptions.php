<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceHealthCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ServiceHealthCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ServiceHealthCollectionResponse properties
     * 
     * @param array<string> $select Use ServiceHealthCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
