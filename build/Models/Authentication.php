<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Authentication
 */
class Authentication
{
    /**
     * The email address registered to a user for authentication.
     */
    private array $emailMethods = [];

    /**
     * Represents the FIDO2 security keys registered to a user for authentication.
     */
    private array $fido2Methods = [];

    /**
     * Represents all authentication methods registered to a user.
     */
    private array $methods = [];

    /**
     * The details of the Microsoft Authenticator app registered to a user for authentication.
     */
    private array $microsoftAuthenticatorMethods = [];

    /**
     * Represents the status of a long-running operation, such as a password reset operation.
     */
    private array $operations = [];

    /**
     * Represents the password registered to a user for authentication. For security, the password itself is never returned in the object, but action can be taken to reset a password.
     */
    private array $passwordMethods = [];

    /**
     * The phone numbers registered to a user for authentication.
     */
    private array $phoneMethods = [];

    /**
     * Represents a platform credential instance registered to a user on Mac OS.
     */
    private array $platformCredentialMethods = [];

    /**
     * The software OATH time-based one-time password (TOTP) applications registered to a user for authentication.
     */
    private array $softwareOathMethods = [];

    /**
     * Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
     */
    private array $temporaryAccessPassMethods = [];

    /**
     * Represents the Windows Hello for Business authentication method registered to a user for authentication.
     * @var string[]
     */
    private array $windowsHelloForBusinessMethods = [];


    public function getEmailMethods(): array
    {
        return $this->emailMethods;
    }

    public function setEmailMethods(array $emailMethods): self
    {
        $this->emailMethods = $emailMethods;
        return $this;
    }

    public function getFido2Methods(): array
    {
        return $this->fido2Methods;
    }

    public function setFido2Methods(array $fido2Methods): self
    {
        $this->fido2Methods = $fido2Methods;
        return $this;
    }

    public function getMethods(): array
    {
        return $this->methods;
    }

    public function setMethods(array $methods): self
    {
        $this->methods = $methods;
        return $this;
    }

    public function getMicrosoftAuthenticatorMethods(): array
    {
        return $this->microsoftAuthenticatorMethods;
    }

    public function setMicrosoftAuthenticatorMethods(array $microsoftAuthenticatorMethods): self
    {
        $this->microsoftAuthenticatorMethods = $microsoftAuthenticatorMethods;
        return $this;
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function setOperations(array $operations): self
    {
        $this->operations = $operations;
        return $this;
    }

    public function getPasswordMethods(): array
    {
        return $this->passwordMethods;
    }

    public function setPasswordMethods(array $passwordMethods): self
    {
        $this->passwordMethods = $passwordMethods;
        return $this;
    }

    public function getPhoneMethods(): array
    {
        return $this->phoneMethods;
    }

    public function setPhoneMethods(array $phoneMethods): self
    {
        $this->phoneMethods = $phoneMethods;
        return $this;
    }

    public function getPlatformCredentialMethods(): array
    {
        return $this->platformCredentialMethods;
    }

    public function setPlatformCredentialMethods(array $platformCredentialMethods): self
    {
        $this->platformCredentialMethods = $platformCredentialMethods;
        return $this;
    }

    public function getSoftwareOathMethods(): array
    {
        return $this->softwareOathMethods;
    }

    public function setSoftwareOathMethods(array $softwareOathMethods): self
    {
        $this->softwareOathMethods = $softwareOathMethods;
        return $this;
    }

    public function getTemporaryAccessPassMethods(): array
    {
        return $this->temporaryAccessPassMethods;
    }

    public function setTemporaryAccessPassMethods(array $temporaryAccessPassMethods): self
    {
        $this->temporaryAccessPassMethods = $temporaryAccessPassMethods;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWindowsHelloForBusinessMethods(): array
    {
        return $this->windowsHelloForBusinessMethods;
    }

    /**
     * @param string[] $windowsHelloForBusinessMethods
     */
    public function setWindowsHelloForBusinessMethods(array $windowsHelloForBusinessMethods): self
    {
        $this->windowsHelloForBusinessMethods = $windowsHelloForBusinessMethods;
        return $this;
    }

}
