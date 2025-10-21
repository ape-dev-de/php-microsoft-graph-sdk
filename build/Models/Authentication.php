<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Authentication
 */
class Authentication
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The email address registered to a user for authentication. */
        public array $emailMethods = [],
        /** Represents the FIDO2 security keys registered to a user for authentication. */
        public array $fido2Methods = [],
        /** Represents all authentication methods registered to a user. */
        public array $methods = [],
        /** The details of the Microsoft Authenticator app registered to a user for authentication. */
        public array $microsoftAuthenticatorMethods = [],
        /** Represents the status of a long-running operation, such as a password reset operation. */
        public array $operations = [],
        /** Represents the password registered to a user for authentication. For security, the password itself is never returned in the object, but action can be taken to reset a password. */
        public array $passwordMethods = [],
        /** The phone numbers registered to a user for authentication. */
        public array $phoneMethods = [],
        /** Represents a platform credential instance registered to a user on Mac OS. */
        public array $platformCredentialMethods = [],
        /** The software OATH time-based one-time password (TOTP) applications registered to a user for authentication. */
        public array $softwareOathMethods = [],
        /** Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes. */
        public array $temporaryAccessPassMethods = [],
        /** @var string[] Represents the Windows Hello for Business authentication method registered to a user for authentication. */
        public array $windowsHelloForBusinessMethods = []
    ) {}
}
