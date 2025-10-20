<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsTemplateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TeamsTemplateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TeamsTemplateCollectionResponse properties
     * 
     * @param array<string> $select Use TeamsTemplateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
