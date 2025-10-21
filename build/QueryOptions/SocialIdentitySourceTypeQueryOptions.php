<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SocialIdentitySourceType resources
 *
 * Available select fields:
 */
class SocialIdentitySourceTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SocialIdentitySourceType
     */

    /**
     * Select specific SocialIdentitySourceType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
