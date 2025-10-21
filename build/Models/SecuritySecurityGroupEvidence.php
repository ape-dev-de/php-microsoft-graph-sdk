<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySecurityGroupEvidence
 */
class SecuritySecurityGroupEvidence
{
    /**
     * The unique group identifier assigned by the on-premises Active Directory.
     */
    private ?string $activeDirectoryObjectGuid;

    /**
     * The name of the security group.
     */
    private ?string $displayName;

    /**
     * The distinguished name of the security group.
     */
    private ?string $distinguishedName;

    /**
     * The friendly name of the security group.
     */
    private ?string $friendlyName;

    /**
     * Unique identifier of the security group.
     */
    private ?string $securityGroupId;

    /**
     * The security identifier of the group.
     */
    private ?string $sid;


    public function getActiveDirectoryObjectGuid(): ?string
    {
        return $this->activeDirectoryObjectGuid;
    }

    public function setActiveDirectoryObjectGuid(?string $activeDirectoryObjectGuid): self
    {
        $this->activeDirectoryObjectGuid = $activeDirectoryObjectGuid;
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

    public function getDistinguishedName(): ?string
    {
        return $this->distinguishedName;
    }

    public function setDistinguishedName(?string $distinguishedName): self
    {
        $this->distinguishedName = $distinguishedName;
        return $this;
    }

    public function getFriendlyName(): ?string
    {
        return $this->friendlyName;
    }

    public function setFriendlyName(?string $friendlyName): self
    {
        $this->friendlyName = $friendlyName;
        return $this;
    }

    public function getSecurityGroupId(): ?string
    {
        return $this->securityGroupId;
    }

    public function setSecurityGroupId(?string $securityGroupId): self
    {
        $this->securityGroupId = $securityGroupId;
        return $this;
    }

    public function getSid(): ?string
    {
        return $this->sid;
    }

    public function setSid(?string $sid): self
    {
        $this->sid = $sid;
        return $this;
    }

}
