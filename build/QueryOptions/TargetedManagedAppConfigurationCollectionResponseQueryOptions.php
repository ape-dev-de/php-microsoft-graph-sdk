<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetedManagedAppConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TargetedManagedAppConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TargetedManagedAppConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use TargetedManagedAppConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
