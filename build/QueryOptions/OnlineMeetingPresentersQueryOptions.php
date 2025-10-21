<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnlineMeetingPresenters resources
 *
 * Available select fields:
 */
class OnlineMeetingPresentersQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnlineMeetingPresenters
     */

    /**
     * Select specific OnlineMeetingPresenters properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
