<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserActionContext resources
 *
 * Available select fields:
 */
class UserActionContextQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserActionContext
     */

    /**
     * Select specific UserActionContext properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
