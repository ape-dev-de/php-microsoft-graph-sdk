<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationStrengthUsage resources
 *
 * Available select fields:
 * - mfa
 * - none
 */
class AuthenticationStrengthUsageQueryOptions extends QueryOptions
{
    public const FIELD_MFA = 'mfa';
    public const FIELD_NONE = 'none';

    /**
     * Select specific AuthenticationStrengthUsage properties
     * 
     * @param array<string> $select Use AuthenticationStrengthUsageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
