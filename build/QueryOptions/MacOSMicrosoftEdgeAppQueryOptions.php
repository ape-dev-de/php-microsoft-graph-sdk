<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSMicrosoftEdgeApp resources
 *
 * Available select fields:
 */
class MacOSMicrosoftEdgeAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOSMicrosoftEdgeApp
     */

    /**
     * Select specific MacOSMicrosoftEdgeApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
