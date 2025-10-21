<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppDefinition resources
 *
 * Available select fields:
 */
class TeamsAppDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAppDefinition
     */

    /**
     * Select specific TeamsAppDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
