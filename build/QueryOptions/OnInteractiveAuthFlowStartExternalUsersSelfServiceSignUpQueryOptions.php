<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp resources
 *
 * Available select fields:
 * - isSignUpAllowed
 */
class OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUpQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp
     */
    public const FIELD_IS_SIGN_UP_ALLOWED = 'isSignUpAllowed';

    /**
     * Select specific OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
