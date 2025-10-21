<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUniversalAppX resources
 *
 * Available select fields:
 */
class WindowsUniversalAppXQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsUniversalAppX
     */

    /**
     * Select specific WindowsUniversalAppX properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
