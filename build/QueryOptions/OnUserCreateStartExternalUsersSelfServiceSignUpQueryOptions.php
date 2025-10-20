<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnUserCreateStartExternalUsersSelfServiceSignUp resources
 *
 * Available select fields:
 * - userTypeToCreate
 */
class OnUserCreateStartExternalUsersSelfServiceSignUpQueryOptions extends QueryOptions
{
    public const FIELD_USER_TYPE_TO_CREATE = 'userTypeToCreate';

    /**
     * Select specific OnUserCreateStartExternalUsersSelfServiceSignUp properties
     * 
     * @param array<string> $select Use OnUserCreateStartExternalUsersSelfServiceSignUpQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
