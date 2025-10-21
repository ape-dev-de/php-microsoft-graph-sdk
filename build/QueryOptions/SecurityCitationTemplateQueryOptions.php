<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCitationTemplate resources
 *
 * Available select fields:
 */
class SecurityCitationTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityCitationTemplate
     */

    /**
     * Select specific SecurityCitationTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
