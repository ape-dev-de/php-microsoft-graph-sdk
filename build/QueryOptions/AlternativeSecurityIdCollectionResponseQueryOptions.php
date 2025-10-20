<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AlternativeSecurityIdCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AlternativeSecurityIdCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AlternativeSecurityIdCollectionResponse properties
     * 
     * @param array<string> $select Use AlternativeSecurityIdCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
