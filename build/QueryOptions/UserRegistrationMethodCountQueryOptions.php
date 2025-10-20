<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserRegistrationMethodCount resources
 *
 * Available select fields:
 * - authenticationMethod
 * - userCount
 */
class UserRegistrationMethodCountQueryOptions extends QueryOptions
{
    public const FIELD_AUTHENTICATION_METHOD = 'authenticationMethod';
    public const FIELD_USER_COUNT = 'userCount';

    /**
     * Select specific UserRegistrationMethodCount properties
     * 
     * @param array<string> $select Use UserRegistrationMethodCountQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
