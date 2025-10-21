<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFilePlanDescriptor resources
 *
 * Available select fields:
 */
class SecurityFilePlanDescriptorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityFilePlanDescriptor
     */

    /**
     * Select specific SecurityFilePlanDescriptor properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
