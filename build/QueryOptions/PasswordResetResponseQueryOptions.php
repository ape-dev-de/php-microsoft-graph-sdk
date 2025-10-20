<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PasswordResetResponse resources
 *
 * Available select fields:
 * - newPassword
 */
class PasswordResetResponseQueryOptions extends QueryOptions
{
    public const FIELD_NEW_PASSWORD = 'newPassword';

    /**
     * Select specific PasswordResetResponse properties
     * 
     * @param array<string> $select Use PasswordResetResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
