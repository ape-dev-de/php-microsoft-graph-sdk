<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProfileCardPropertyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ProfileCardPropertyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ProfileCardPropertyCollectionResponse properties
     * 
     * @param array<string> $select Use ProfileCardPropertyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
