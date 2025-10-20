<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PasswordAuthenticationMethod resources
 *
 * Available select fields:
 * - createdDateTime
 * - password
 */
class PasswordAuthenticationMethodQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_PASSWORD = 'password';

    /**
     * Select specific PasswordAuthenticationMethod properties
     * 
     * @param array<string> $select Use PasswordAuthenticationMethodQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
