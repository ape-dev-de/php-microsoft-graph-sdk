<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsMicrosoftEdgeApp resources
 *
 * Available select fields:
 */
class WindowsMicrosoftEdgeAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsMicrosoftEdgeApp
     */

    /**
     * Select specific WindowsMicrosoftEdgeApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
