<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalAudienceScope resources
 *
 * Available select fields:
 */
class ExternalAudienceScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalAudienceScope
     */

    /**
     * Select specific ExternalAudienceScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
