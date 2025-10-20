<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PasswordProfile resources
 *
 * Available select fields:
 * - forceChangePasswordNextSignIn
 * - forceChangePasswordNextSignInWithMfa
 * - password
 */
class PasswordProfileQueryOptions extends QueryOptions
{
    public const FIELD_FORCE_CHANGE_PASSWORD_NEXT_SIGN_IN = 'forceChangePasswordNextSignIn';
    public const FIELD_FORCE_CHANGE_PASSWORD_NEXT_SIGN_IN_WITH_MFA = 'forceChangePasswordNextSignInWithMfa';
    public const FIELD_PASSWORD = 'password';

    /**
     * Select specific PasswordProfile properties
     * 
     * @param array<string> $select Use PasswordProfileQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
