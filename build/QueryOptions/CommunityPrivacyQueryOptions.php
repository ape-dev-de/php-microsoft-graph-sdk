<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommunityPrivacy resources
 *
 * Available select fields:
 */
class CommunityPrivacyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CommunityPrivacy
     */

    /**
     * Select specific CommunityPrivacy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
