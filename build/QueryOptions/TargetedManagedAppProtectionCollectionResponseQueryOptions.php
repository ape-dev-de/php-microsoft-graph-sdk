<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetedManagedAppProtectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TargetedManagedAppProtectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TargetedManagedAppProtectionCollectionResponse properties
     * 
     * @param array<string> $select Use TargetedManagedAppProtectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
