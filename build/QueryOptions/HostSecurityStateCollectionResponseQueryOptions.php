<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HostSecurityStateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class HostSecurityStateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific HostSecurityStateCollectionResponse properties
     * 
     * @param array<string> $select Use HostSecurityStateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
