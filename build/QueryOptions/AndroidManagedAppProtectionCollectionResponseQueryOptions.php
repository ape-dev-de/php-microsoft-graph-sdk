<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidManagedAppProtectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AndroidManagedAppProtectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AndroidManagedAppProtectionCollectionResponse properties
     * 
     * @param array<string> $select Use AndroidManagedAppProtectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
