<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsDefenderAdvancedThreatProtectionConfiguration resources
 *
 * Available select fields:
 */
class WindowsDefenderAdvancedThreatProtectionConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsDefenderAdvancedThreatProtectionConfiguration
     */

    /**
     * Select specific WindowsDefenderAdvancedThreatProtectionConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
