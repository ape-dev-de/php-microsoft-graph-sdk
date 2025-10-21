<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsProtectionState resources
 *
 * Available select fields:
 */
class WindowsProtectionStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsProtectionState
     */

    /**
     * Select specific WindowsProtectionState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
