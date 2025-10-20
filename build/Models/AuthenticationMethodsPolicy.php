<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodsPolicy
 */
class AuthenticationMethodsPolicy
{
    /**
     * A description of the policy. Read-only.
     */
    private ?string $description;

    /**
     * The name of the policy. Read-only.
     */
    private ?string $displayName;

    /**
     * The date and time of the last update to the policy. Read-only.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The state of migration of the authentication methods policy from the legacy multifactor authentication and self-service password reset (SSPR) policies. The possible values are: premigration - means the authentication methods policy is used for authentication only, legacy policies are respected. migrationInProgress - means the authentication methods policy is used for both authentication and SSPR, legacy policies are respected. migrationComplete - means the authentication methods policy is used for authentication and SSPR, legacy policies are ignored. unknownFutureValue - Evolvable enumeration sentinel value. Do not use.
     */
    private ?string $policyMigrationState;

    /**
     * The version of the policy in use. Read-only.
     */
    private ?string $policyVersion;

    /**
     */
    private ?float $reconfirmationInDays;

    /**
     * Enforce registration at sign-in time. This property can be used to remind users to set up targeted authentication methods.
     */
    private ?string $registrationEnforcement;

    /**
     * Represents the settings for each authentication method. Automatically expanded on GET /policies/authenticationMethodsPolicy.
     */
    private ?string $authenticationMethodConfigurations;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getPolicyMigrationState(): ?string
    {
        return $this->policyMigrationState;
    }

    public function setPolicyMigrationState(?string $policyMigrationState): self
    {
        $this->policyMigrationState = $policyMigrationState;
        return $this;
    }

    public function getPolicyVersion(): ?string
    {
        return $this->policyVersion;
    }

    public function setPolicyVersion(?string $policyVersion): self
    {
        $this->policyVersion = $policyVersion;
        return $this;
    }

    public function getReconfirmationInDays(): ?float
    {
        return $this->reconfirmationInDays;
    }

    public function setReconfirmationInDays(?float $reconfirmationInDays): self
    {
        $this->reconfirmationInDays = $reconfirmationInDays;
        return $this;
    }

    public function getRegistrationEnforcement(): ?string
    {
        return $this->registrationEnforcement;
    }

    public function setRegistrationEnforcement(?string $registrationEnforcement): self
    {
        $this->registrationEnforcement = $registrationEnforcement;
        return $this;
    }

    public function getAuthenticationMethodConfigurations(): ?string
    {
        return $this->authenticationMethodConfigurations;
    }

    public function setAuthenticationMethodConfigurations(?string $authenticationMethodConfigurations): self
    {
        $this->authenticationMethodConfigurations = $authenticationMethodConfigurations;
        return $this;
    }

}
