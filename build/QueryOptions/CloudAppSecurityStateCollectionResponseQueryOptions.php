<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudAppSecurityStateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CloudAppSecurityStateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CloudAppSecurityStateCollectionResponse properties
     * 
     * @param array<string> $select Use CloudAppSecurityStateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
