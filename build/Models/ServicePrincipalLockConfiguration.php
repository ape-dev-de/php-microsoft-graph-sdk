<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePrincipalLockConfiguration
 */
class ServicePrincipalLockConfiguration
{
    /**
     * Enables locking all sensitive properties. The sensitive properties are keyCredentials, passwordCredentials, and tokenEncryptionKeyId.
     */
    private ?bool $allProperties;

    /**
     * Locks the keyCredentials and passwordCredentials properties for modification where credential usage type is Sign.
     */
    private ?bool $credentialsWithUsageSign;

    /**
     * Locks the keyCredentials and passwordCredentials properties for modification where credential usage type is Verify. This locks OAuth service principals.
     */
    private ?bool $credentialsWithUsageVerify;

    /**
     * Enables or disables service principal lock configuration. To allow the sensitive properties to be updated, update this property to false to disable the lock on the service principal.
     */
    private ?bool $isEnabled;

    /**
     * Locks the tokenEncryptionKeyId property for modification on the service principal.
     */
    private ?string $tokenEncryptionKeyId;


    public function getAllProperties(): ?bool
    {
        return $this->allProperties;
    }

    public function setAllProperties(?bool $allProperties): self
    {
        $this->allProperties = $allProperties;
        return $this;
    }

    public function getCredentialsWithUsageSign(): ?bool
    {
        return $this->credentialsWithUsageSign;
    }

    public function setCredentialsWithUsageSign(?bool $credentialsWithUsageSign): self
    {
        $this->credentialsWithUsageSign = $credentialsWithUsageSign;
        return $this;
    }

    public function getCredentialsWithUsageVerify(): ?bool
    {
        return $this->credentialsWithUsageVerify;
    }

    public function setCredentialsWithUsageVerify(?bool $credentialsWithUsageVerify): self
    {
        $this->credentialsWithUsageVerify = $credentialsWithUsageVerify;
        return $this;
    }

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getTokenEncryptionKeyId(): ?string
    {
        return $this->tokenEncryptionKeyId;
    }

    public function setTokenEncryptionKeyId(?string $tokenEncryptionKeyId): self
    {
        $this->tokenEncryptionKeyId = $tokenEncryptionKeyId;
        return $this;
    }

}
