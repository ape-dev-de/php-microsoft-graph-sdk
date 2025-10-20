<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PublicErrorDetailCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PublicErrorDetailCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PublicErrorDetailCollectionResponse properties
     * 
     * @param array<string> $select Use PublicErrorDetailCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
