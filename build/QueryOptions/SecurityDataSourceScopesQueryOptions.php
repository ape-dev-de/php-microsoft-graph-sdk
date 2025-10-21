<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDataSourceScopes resources
 *
 * Available select fields:
 */
class SecurityDataSourceScopesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDataSourceScopes
     */

    /**
     * Select specific SecurityDataSourceScopes properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
