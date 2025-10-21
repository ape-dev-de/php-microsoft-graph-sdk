<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserPurpose resources
 *
 * Available select fields:
 */
class UserPurposeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserPurpose
     */

    /**
     * Select specific UserPurpose properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
