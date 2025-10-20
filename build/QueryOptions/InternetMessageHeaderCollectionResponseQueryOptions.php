<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InternetMessageHeaderCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class InternetMessageHeaderCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific InternetMessageHeaderCollectionResponse properties
     * 
     * @param array<string> $select Use InternetMessageHeaderCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
