<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosManagedAppProtectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosManagedAppProtectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosManagedAppProtectionCollectionResponse properties
     * 
     * @param array<string> $select Use IosManagedAppProtectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
