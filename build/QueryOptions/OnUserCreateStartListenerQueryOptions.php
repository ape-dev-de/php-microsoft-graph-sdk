<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnUserCreateStartListener resources
 *
 * Available select fields:
 */
class OnUserCreateStartListenerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnUserCreateStartListener
     */

    /**
     * Select specific OnUserCreateStartListener properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
