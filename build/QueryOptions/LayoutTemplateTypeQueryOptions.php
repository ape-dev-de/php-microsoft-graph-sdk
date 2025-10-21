<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LayoutTemplateType resources
 *
 * Available select fields:
 */
class LayoutTemplateTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LayoutTemplateType
     */

    /**
     * Select specific LayoutTemplateType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
