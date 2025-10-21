<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestoreSessionBase resources
 *
 * Available select fields:
 */
class RestoreSessionBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestoreSessionBase
     */

    /**
     * Select specific RestoreSessionBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
