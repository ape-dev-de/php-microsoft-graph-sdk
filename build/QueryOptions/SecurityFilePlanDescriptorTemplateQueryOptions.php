<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFilePlanDescriptorTemplate resources
 *
 * Available select fields:
 */
class SecurityFilePlanDescriptorTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityFilePlanDescriptorTemplate
     */

    /**
     * Select specific SecurityFilePlanDescriptorTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
