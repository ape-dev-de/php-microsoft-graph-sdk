<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsArchitecture resources
 *
 * Available select fields:
 */
class WindowsArchitectureQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsArchitecture
     */

    /**
     * Select specific WindowsArchitecture properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
