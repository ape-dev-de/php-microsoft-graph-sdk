<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AzureAdPopTokenAuthentication resources
 *
 * Available select fields:
 */
class AzureAdPopTokenAuthenticationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AzureAdPopTokenAuthentication
     */

    /**
     * Select specific AzureAdPopTokenAuthentication properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
