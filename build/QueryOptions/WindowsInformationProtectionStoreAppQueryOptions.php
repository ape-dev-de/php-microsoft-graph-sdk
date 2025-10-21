<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionStoreApp resources
 *
 * Available select fields:
 */
class WindowsInformationProtectionStoreAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsInformationProtectionStoreApp
     */

    /**
     * Select specific WindowsInformationProtectionStoreApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
