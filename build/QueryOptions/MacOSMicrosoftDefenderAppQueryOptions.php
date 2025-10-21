<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSMicrosoftDefenderApp resources
 *
 * Available select fields:
 */
class MacOSMicrosoftDefenderAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOSMicrosoftDefenderApp
     */

    /**
     * Select specific MacOSMicrosoftDefenderApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
