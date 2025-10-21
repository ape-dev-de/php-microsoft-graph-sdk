<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EditionUpgradeLicenseType resources
 *
 * Available select fields:
 */
class EditionUpgradeLicenseTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EditionUpgradeLicenseType
     */

    /**
     * Select specific EditionUpgradeLicenseType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
