<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppDefinitionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TeamsAppDefinitionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TeamsAppDefinitionCollectionResponse properties
     * 
     * @param array<string> $select Use TeamsAppDefinitionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
