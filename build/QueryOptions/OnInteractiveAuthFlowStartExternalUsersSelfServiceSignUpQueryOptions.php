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
    public const FIELD_IS_SIGN_UP_ALLOWED = 'isSignUpAllowed';

    /**
     * Select specific OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp properties
     * 
     * @param array<string> $select Use OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUpQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
