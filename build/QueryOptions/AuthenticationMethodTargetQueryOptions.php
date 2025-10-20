<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodTarget resources
 *
 * Available select fields:
 * - isRegistrationRequired
 * - targetType
 */
class AuthenticationMethodTargetQueryOptions extends QueryOptions
{
    public const FIELD_IS_REGISTRATION_REQUIRED = 'isRegistrationRequired';
    public const FIELD_TARGET_TYPE = 'targetType';

    /**
     * Select specific AuthenticationMethodTarget properties
     * 
     * @param array<string> $select Use AuthenticationMethodTargetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
