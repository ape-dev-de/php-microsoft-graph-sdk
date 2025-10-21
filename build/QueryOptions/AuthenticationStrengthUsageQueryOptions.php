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
    /**
     * Available select fields for AuthenticationStrengthUsage
     */
    public const FIELD_MFA = 'mfa';
    public const FIELD_NONE = 'none';

    /**
     * Select specific AuthenticationStrengthUsage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
