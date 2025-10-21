<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StartHoldMusicOperation resources
 *
 * Available select fields:
 */
class StartHoldMusicOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for StartHoldMusicOperation
     */

    /**
     * Select specific StartHoldMusicOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
