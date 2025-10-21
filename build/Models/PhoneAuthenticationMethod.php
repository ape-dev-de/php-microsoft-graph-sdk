<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PhoneAuthenticationMethod
 */
class PhoneAuthenticationMethod
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The phone number to text or call for authentication. Phone numbers use the format +{country code} {number}x{extension}, with extension optional. For example, +1 5555551234 or +1 5555551234x123 are valid. Numbers are rejected when creating or updating if they don''t match the required format. */
        public ?string $phoneNumber = null,
        /** The type of this phone. Possible values are: mobile, alternateMobile, or office. */
        public ?string $phoneType = null,
        /** Whether a phone is ready to be used for SMS sign-in or not. Possible values are: notSupported, notAllowedByPolicy, notEnabled, phoneNumberNotUnique, ready, or notConfigured, unknownFutureValue. */
        public ?string $smsSignInState = null
    ) {}
}
