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
    /**
     * Available select fields for OnUserCreateStartExternalUsersSelfServiceSignUp
     */
    public const FIELD_USER_TYPE_TO_CREATE = 'userTypeToCreate';

    /**
     * Select specific OnUserCreateStartExternalUsersSelfServiceSignUp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
