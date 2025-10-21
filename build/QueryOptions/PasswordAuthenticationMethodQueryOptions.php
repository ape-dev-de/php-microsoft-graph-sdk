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
    /**
     * Available select fields for PasswordAuthenticationMethod
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_PASSWORD = 'password';

    /**
     * Select specific PasswordAuthenticationMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
