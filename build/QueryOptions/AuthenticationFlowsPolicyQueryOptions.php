<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationFlowsPolicy resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - selfServiceSignUp
 */
class AuthenticationFlowsPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationFlowsPolicy
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_SELF_SERVICE_SIGN_UP = 'selfServiceSignUp';

    /**
     * Select specific AuthenticationFlowsPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
