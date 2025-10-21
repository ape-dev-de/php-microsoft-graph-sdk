<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFilePlanReferenceTemplate resources
 *
 * Available select fields:
 */
class SecurityFilePlanReferenceTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityFilePlanReferenceTemplate
     */

    /**
     * Select specific SecurityFilePlanReferenceTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
