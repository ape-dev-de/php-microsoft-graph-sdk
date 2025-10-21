<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsAppX resources
 *
 * Available select fields:
 */
class WindowsAppXQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsAppX
     */

    /**
     * Select specific WindowsAppX properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
