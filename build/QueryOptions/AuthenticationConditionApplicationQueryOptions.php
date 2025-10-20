<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationConditionApplication resources
 *
 * Available select fields:
 * - appId
 */
class AuthenticationConditionApplicationQueryOptions extends QueryOptions
{
    public const FIELD_APP_ID = 'appId';

    /**
     * Select specific AuthenticationConditionApplication properties
     * 
     * @param array<string> $select Use AuthenticationConditionApplicationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
