<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionPolicy resources
 *
 * Available select fields:
 */
class WindowsInformationProtectionPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsInformationProtectionPolicy
     */

    /**
     * Select specific WindowsInformationProtectionPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
