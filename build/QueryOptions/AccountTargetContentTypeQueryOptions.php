<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccountTargetContentType resources
 *
 * Available select fields:
 */
class AccountTargetContentTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccountTargetContentType
     */

    /**
     * Select specific AccountTargetContentType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
