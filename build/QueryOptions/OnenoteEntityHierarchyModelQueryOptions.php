<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteEntityHierarchyModel resources
 *
 * Available select fields:
 */
class OnenoteEntityHierarchyModelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenoteEntityHierarchyModel
     */

    /**
     * Select specific OnenoteEntityHierarchyModel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
