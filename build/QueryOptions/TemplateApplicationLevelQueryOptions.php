<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TemplateApplicationLevel resources
 *
 * Available select fields:
 */
class TemplateApplicationLevelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TemplateApplicationLevel
     */

    /**
     * Select specific TemplateApplicationLevel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
