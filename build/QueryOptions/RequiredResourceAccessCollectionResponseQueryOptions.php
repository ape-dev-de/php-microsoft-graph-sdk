<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RequiredResourceAccessCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RequiredResourceAccessCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RequiredResourceAccessCollectionResponse properties
     * 
     * @param array<string> $select Use RequiredResourceAccessCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
