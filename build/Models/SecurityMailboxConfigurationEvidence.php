<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityMailboxConfigurationEvidence
 */
class SecurityMailboxConfigurationEvidence
{
    /**
     */
    private ?string $configurationId;

    /**
     */
    private ?string $configurationType;

    /**
     */
    private ?string $displayName;

    /**
     */
    private ?string $externalDirectoryObjectId;

    /**
     */
    private ?string $mailboxPrimaryAddress;

    /**
     */
    private ?string $upn;

    public function getConfigurationId(): ?string
    {
        return $this->configurationId;
    }

    public function setConfigurationId(?string $configurationId): self
    {
        $this->configurationId = $configurationId;
        return $this;
    }

    public function getConfigurationType(): ?string
    {
        return $this->configurationType;
    }

    public function setConfigurationType(?string $configurationType): self
    {
        $this->configurationType = $configurationType;
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

    public function getExternalDirectoryObjectId(): ?string
    {
        return $this->externalDirectoryObjectId;
    }

    public function setExternalDirectoryObjectId(?string $externalDirectoryObjectId): self
    {
        $this->externalDirectoryObjectId = $externalDirectoryObjectId;
        return $this;
    }

    public function getMailboxPrimaryAddress(): ?string
    {
        return $this->mailboxPrimaryAddress;
    }

    public function setMailboxPrimaryAddress(?string $mailboxPrimaryAddress): self
    {
        $this->mailboxPrimaryAddress = $mailboxPrimaryAddress;
        return $this;
    }

    public function getUpn(): ?string
    {
        return $this->upn;
    }

    public function setUpn(?string $upn): self
    {
        $this->upn = $upn;
        return $this;
    }

}
