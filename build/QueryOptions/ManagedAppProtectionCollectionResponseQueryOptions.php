<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppProtectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedAppProtectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedAppProtectionCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedAppProtectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
