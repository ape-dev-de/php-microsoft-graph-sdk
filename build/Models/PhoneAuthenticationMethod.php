<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PhoneAuthenticationMethod
 */
class PhoneAuthenticationMethod
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The phone number to text or call for authentication. Phone numbers use the format +{country code} {number}x{extension}, with extension optional. For example, +1 5555551234 or +1 5555551234x123 are valid. Numbers are rejected when creating or updating if they don't match the required format. */
    public ?string $phoneNumber = null;

    /** 
     * The type of this phone. Possible values are: mobile, alternateMobile, or office.
     * @var AuthenticationPhoneType|\stdClass|null
     */
    public mixed $phoneType = null;

    /** 
     * Whether a phone is ready to be used for SMS sign-in or not. Possible values are: notSupported, notAllowedByPolicy, notEnabled, phoneNumberNotUnique, ready, or notConfigured, unknownFutureValue.
     * @var AuthenticationMethodSignInState|\stdClass|null
     */
    public mixed $smsSignInState = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['phoneNumber'])) {
            $this->phoneNumber = $data['phoneNumber'];
        }
        if (isset($data['phoneType'])) {
            $this->phoneType = $data['phoneType'];
        }
        if (isset($data['smsSignInState'])) {
            $this->smsSignInState = $data['smsSignInState'];
        }
    }
}
