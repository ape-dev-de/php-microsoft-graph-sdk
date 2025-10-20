<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppLogCollectionRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AppLogCollectionRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AppLogCollectionRequestCollectionResponse properties
     * 
     * @param array<string> $select Use AppLogCollectionRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
