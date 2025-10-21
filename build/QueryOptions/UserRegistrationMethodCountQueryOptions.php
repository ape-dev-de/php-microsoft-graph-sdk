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
    /**
     * Available select fields for UserRegistrationMethodCount
     */
    public const FIELD_AUTHENTICATION_METHOD = 'authenticationMethod';
    public const FIELD_USER_COUNT = 'userCount';

    /**
     * Select specific UserRegistrationMethodCount properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
