<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApiAuthenticationConfigurationBase resources
 *
 * Available select fields:
 */
class ApiAuthenticationConfigurationBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ApiAuthenticationConfigurationBase
     */

    /**
     * Select specific ApiAuthenticationConfigurationBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
