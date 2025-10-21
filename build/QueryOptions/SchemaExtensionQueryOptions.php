<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SchemaExtension resources
 *
 * Available select fields:
 */
class SchemaExtensionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SchemaExtension
     */

    /**
     * Select specific SchemaExtension properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
