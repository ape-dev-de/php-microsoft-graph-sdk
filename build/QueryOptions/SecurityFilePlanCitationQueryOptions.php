<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFilePlanCitation resources
 *
 * Available select fields:
 */
class SecurityFilePlanCitationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityFilePlanCitation
     */

    /**
     * Select specific SecurityFilePlanCitation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
