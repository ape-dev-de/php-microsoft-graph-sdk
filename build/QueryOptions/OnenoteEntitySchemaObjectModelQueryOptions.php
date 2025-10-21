<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteEntitySchemaObjectModel resources
 *
 * Available select fields:
 */
class OnenoteEntitySchemaObjectModelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenoteEntitySchemaObjectModel
     */

    /**
     * Select specific OnenoteEntitySchemaObjectModel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
