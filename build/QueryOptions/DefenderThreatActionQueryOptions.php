<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DefenderThreatAction resources
 *
 * Available select fields:
 */
class DefenderThreatActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DefenderThreatAction
     */

    /**
     * Select specific DefenderThreatAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
