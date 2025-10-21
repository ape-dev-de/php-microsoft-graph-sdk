<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PhoneAuthenticationMethod
 */
class PhoneAuthenticationMethod
{
    /**
     * The phone number to text or call for authentication. Phone numbers use the format +{country code} {number}x{extension}, with extension optional. For example, +1 5555551234 or +1 5555551234x123 are valid. Numbers are rejected when creating or updating if they don''t match the required format.
     */
    private ?string $phoneNumber;

    /**
     * The type of this phone. Possible values are: mobile, alternateMobile, or office.
     */
    private ?string $phoneType;

    /**
     * Whether a phone is ready to be used for SMS sign-in or not. Possible values are: notSupported, notAllowedByPolicy, notEnabled, phoneNumberNotUnique, ready, or notConfigured, unknownFutureValue.
     */
    private ?string $smsSignInState;


    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getPhoneType(): ?string
    {
        return $this->phoneType;
    }

    public function setPhoneType(?string $phoneType): self
    {
        $this->phoneType = $phoneType;
        return $this;
    }

    public function getSmsSignInState(): ?string
    {
        return $this->smsSignInState;
    }

    public function setSmsSignInState(?string $smsSignInState): self
    {
        $this->smsSignInState = $smsSignInState;
        return $this;
    }

}
