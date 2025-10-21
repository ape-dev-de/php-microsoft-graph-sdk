<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftStoreForBusinessLicenseType resources
 *
 * Available select fields:
 */
class MicrosoftStoreForBusinessLicenseTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftStoreForBusinessLicenseType
     */

    /**
     * Select specific MicrosoftStoreForBusinessLicenseType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
