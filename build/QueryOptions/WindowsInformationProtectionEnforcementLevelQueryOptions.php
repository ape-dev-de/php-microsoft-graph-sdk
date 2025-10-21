<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionEnforcementLevel resources
 *
 * Available select fields:
 */
class WindowsInformationProtectionEnforcementLevelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsInformationProtectionEnforcementLevel
     */

    /**
     * Select specific WindowsInformationProtectionEnforcementLevel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
