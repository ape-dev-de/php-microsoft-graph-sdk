<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CoachmarkLocationType resources
 *
 * Available select fields:
 */
class CoachmarkLocationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CoachmarkLocationType
     */

    /**
     * Select specific CoachmarkLocationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
