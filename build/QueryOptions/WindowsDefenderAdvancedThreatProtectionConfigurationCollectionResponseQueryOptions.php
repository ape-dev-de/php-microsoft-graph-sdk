<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsDefenderAdvancedThreatProtectionConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsDefenderAdvancedThreatProtectionConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsDefenderAdvancedThreatProtectionConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsDefenderAdvancedThreatProtectionConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
