<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessTemplateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ConditionalAccessTemplateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ConditionalAccessTemplateCollectionResponse properties
     * 
     * @param array<string> $select Use ConditionalAccessTemplateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
