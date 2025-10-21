<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestrictAccessAction resources
 *
 * Available select fields:
 */
class RestrictAccessActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestrictAccessAction
     */

    /**
     * Select specific RestrictAccessAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
