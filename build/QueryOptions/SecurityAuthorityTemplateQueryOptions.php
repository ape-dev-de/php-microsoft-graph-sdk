<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAuthorityTemplate resources
 *
 * Available select fields:
 */
class SecurityAuthorityTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityAuthorityTemplate
     */

    /**
     * Select specific SecurityAuthorityTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
