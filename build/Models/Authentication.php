<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Authentication
 */
class Authentication
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The email address registered to a user for authentication.
     * @var EmailAuthenticationMethod[]
     */
    public array $emailMethods = [];

    /** 
     * Represents the FIDO2 security keys registered to a user for authentication.
     * @var Fido2AuthenticationMethod[]
     */
    public array $fido2Methods = [];

    /** 
     * Represents all authentication methods registered to a user.
     * @var AuthenticationMethod[]
     */
    public array $methods = [];

    /** 
     * The details of the Microsoft Authenticator app registered to a user for authentication.
     * @var MicrosoftAuthenticatorAuthenticationMethod[]
     */
    public array $microsoftAuthenticatorMethods = [];

    /** 
     * Represents the status of a long-running operation, such as a password reset operation.
     * @var LongRunningOperation[]
     */
    public array $operations = [];

    /** 
     * Represents the password registered to a user for authentication. For security, the password itself is never returned in the object, but action can be taken to reset a password.
     * @var PasswordAuthenticationMethod[]
     */
    public array $passwordMethods = [];

    /** 
     * The phone numbers registered to a user for authentication.
     * @var PhoneAuthenticationMethod[]
     */
    public array $phoneMethods = [];

    /** 
     * Represents a platform credential instance registered to a user on Mac OS.
     * @var PlatformCredentialAuthenticationMethod[]
     */
    public array $platformCredentialMethods = [];

    /** 
     * The software OATH time-based one-time password (TOTP) applications registered to a user for authentication.
     * @var SoftwareOathAuthenticationMethod[]
     */
    public array $softwareOathMethods = [];

    /** 
     * Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
     * @var TemporaryAccessPassAuthenticationMethod[]
     */
    public array $temporaryAccessPassMethods = [];

    /** 
     * Represents the Windows Hello for Business authentication method registered to a user for authentication.
     * @var WindowsHelloForBusinessAuthenticationMethod[]
     */
    public array $windowsHelloForBusinessMethods = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['emailMethods'])) {
            $this->emailMethods = $data['emailMethods'];
        }
        if (isset($data['fido2Methods'])) {
            $this->fido2Methods = $data['fido2Methods'];
        }
        if (isset($data['methods'])) {
            $this->methods = $data['methods'];
        }
        if (isset($data['microsoftAuthenticatorMethods'])) {
            $this->microsoftAuthenticatorMethods = $data['microsoftAuthenticatorMethods'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
        if (isset($data['passwordMethods'])) {
            $this->passwordMethods = $data['passwordMethods'];
        }
        if (isset($data['phoneMethods'])) {
            $this->phoneMethods = $data['phoneMethods'];
        }
        if (isset($data['platformCredentialMethods'])) {
            $this->platformCredentialMethods = $data['platformCredentialMethods'];
        }
        if (isset($data['softwareOathMethods'])) {
            $this->softwareOathMethods = $data['softwareOathMethods'];
        }
        if (isset($data['temporaryAccessPassMethods'])) {
            $this->temporaryAccessPassMethods = $data['temporaryAccessPassMethods'];
        }
        if (isset($data['windowsHelloForBusinessMethods'])) {
            $this->windowsHelloForBusinessMethods = $data['windowsHelloForBusinessMethods'];
        }
    }
}
