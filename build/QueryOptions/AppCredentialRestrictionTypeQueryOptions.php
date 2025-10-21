<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppCredentialRestrictionType resources
 *
 * Available select fields:
 */
class AppCredentialRestrictionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppCredentialRestrictionType
     */

    /**
     * Select specific AppCredentialRestrictionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
