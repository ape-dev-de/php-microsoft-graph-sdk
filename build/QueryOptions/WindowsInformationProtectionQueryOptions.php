<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtection resources
 *
 * Available select fields:
 */
class WindowsInformationProtectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsInformationProtection
     */

    /**
     * Select specific WindowsInformationProtection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
