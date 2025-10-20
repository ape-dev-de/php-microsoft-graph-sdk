<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApplicationTemplateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ApplicationTemplateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ApplicationTemplateCollectionResponse properties
     * 
     * @param array<string> $select Use ApplicationTemplateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
