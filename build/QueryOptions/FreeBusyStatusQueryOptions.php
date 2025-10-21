<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FreeBusyStatus resources
 *
 * Available select fields:
 */
class FreeBusyStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FreeBusyStatus
     */

    /**
     * Select specific FreeBusyStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
