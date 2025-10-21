<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsStartMenuModeType resources
 *
 * Available select fields:
 */
class WindowsStartMenuModeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsStartMenuModeType
     */

    /**
     * Select specific WindowsStartMenuModeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
