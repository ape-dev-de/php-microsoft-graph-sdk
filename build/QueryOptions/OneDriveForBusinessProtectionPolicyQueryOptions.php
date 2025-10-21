<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OneDriveForBusinessProtectionPolicy resources
 *
 * Available select fields:
 */
class OneDriveForBusinessProtectionPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OneDriveForBusinessProtectionPolicy
     */

    /**
     * Select specific OneDriveForBusinessProtectionPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
