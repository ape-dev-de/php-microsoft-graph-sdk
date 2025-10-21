<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FederatedIdpMfaBehavior resources
 *
 * Available select fields:
 */
class FederatedIdpMfaBehaviorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FederatedIdpMfaBehavior
     */

    /**
     * Select specific FederatedIdpMfaBehavior properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
