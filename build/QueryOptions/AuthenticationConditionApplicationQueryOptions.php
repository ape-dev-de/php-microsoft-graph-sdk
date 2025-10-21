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
    /**
     * Available select fields for AuthenticationConditionApplication
     */
    public const FIELD_APP_ID = 'appId';

    /**
     * Select specific AuthenticationConditionApplication properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
