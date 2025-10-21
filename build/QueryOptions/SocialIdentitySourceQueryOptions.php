<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SocialIdentitySource resources
 *
 * Available select fields:
 */
class SocialIdentitySourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SocialIdentitySource
     */

    /**
     * Select specific SocialIdentitySource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
