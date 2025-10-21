<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PersistentBrowserSessionMode resources
 *
 * Available select fields:
 */
class PersistentBrowserSessionModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PersistentBrowserSessionMode
     */

    /**
     * Select specific PersistentBrowserSessionMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
