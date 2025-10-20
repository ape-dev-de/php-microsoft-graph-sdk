<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DefaultManagedAppProtectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DefaultManagedAppProtectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DefaultManagedAppProtectionCollectionResponse properties
     * 
     * @param array<string> $select Use DefaultManagedAppProtectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
