<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApplicationTemplate resources
 *
 * Available select fields:
 */
class ApplicationTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ApplicationTemplate
     */

    /**
     * Select specific ApplicationTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
