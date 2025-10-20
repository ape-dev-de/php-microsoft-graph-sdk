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
    public const FIELD_CUSTOM_SETTINGS = 'customSettings';

    /**
     * Select specific ManagedAppConfiguration properties
     * 
     * @param array<string> $select Use ManagedAppConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
