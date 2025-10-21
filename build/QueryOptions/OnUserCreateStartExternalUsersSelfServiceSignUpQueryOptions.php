<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnUserCreateStartExternalUsersSelfServiceSignUp resources
 *
 * Available select fields:
 */
class OnUserCreateStartExternalUsersSelfServiceSignUpQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnUserCreateStartExternalUsersSelfServiceSignUp
     */

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
