<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUpdateForBusinessConfiguration resources
 *
 * Available select fields:
 */
class WindowsUpdateForBusinessConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsUpdateForBusinessConfiguration
     */

    /**
     * Select specific WindowsUpdateForBusinessConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
