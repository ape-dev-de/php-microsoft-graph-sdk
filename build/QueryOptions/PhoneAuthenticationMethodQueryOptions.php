<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PhoneAuthenticationMethod resources
 *
 * Available select fields:
 * - phoneNumber
 * - phoneType
 * - smsSignInState
 */
class PhoneAuthenticationMethodQueryOptions extends QueryOptions
{
    public const FIELD_PHONE_NUMBER = 'phoneNumber';
    public const FIELD_PHONE_TYPE = 'phoneType';
    public const FIELD_SMS_SIGN_IN_STATE = 'smsSignInState';

    /**
     * Select specific PhoneAuthenticationMethod properties
     * 
     * @param array<string> $select Use PhoneAuthenticationMethodQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
