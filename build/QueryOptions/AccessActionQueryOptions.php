<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessAction resources
 *
 * Available select fields:
 */
class AccessActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessAction
     */

    /**
     * Select specific AccessAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
