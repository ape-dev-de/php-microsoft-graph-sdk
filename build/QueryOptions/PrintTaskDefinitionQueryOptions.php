<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintTaskDefinition resources
 *
 * Available select fields:
 */
class PrintTaskDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintTaskDefinition
     */

    /**
     * Select specific PrintTaskDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
