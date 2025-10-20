<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AlterationResponse resources
 *
 * Available select fields:
 * - originalQueryString
 * - queryAlteration
 * - queryAlterationType
 */
class AlterationResponseQueryOptions extends QueryOptions
{
    public const FIELD_ORIGINAL_QUERY_STRING = 'originalQueryString';
    public const FIELD_QUERY_ALTERATION = 'queryAlteration';
    public const FIELD_QUERY_ALTERATION_TYPE = 'queryAlterationType';

    /**
     * Select specific AlterationResponse properties
     * 
     * @param array<string> $select Use AlterationResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
