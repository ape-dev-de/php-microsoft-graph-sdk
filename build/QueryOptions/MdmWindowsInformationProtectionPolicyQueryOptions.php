<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MdmWindowsInformationProtectionPolicy resources
 *
 * Available select fields:
 */
class MdmWindowsInformationProtectionPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MdmWindowsInformationProtectionPolicy
     */

    /**
     * Select specific MdmWindowsInformationProtectionPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
