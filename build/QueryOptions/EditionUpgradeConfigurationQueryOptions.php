<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EditionUpgradeConfiguration resources
 *
 * Available select fields:
 */
class EditionUpgradeConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EditionUpgradeConfiguration
     */

    /**
     * Select specific EditionUpgradeConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
