<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppConfiguration resources
 *
 * Available select fields:
 * - customSettings
 */
class ManagedAppConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppConfiguration
     */
    public const FIELD_CUSTOM_SETTINGS = 'customSettings';

    /**
     * Select specific ManagedAppConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
