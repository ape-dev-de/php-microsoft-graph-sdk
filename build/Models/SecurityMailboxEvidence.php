<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityMailboxEvidence
 */
class SecurityMailboxEvidence
{
    /**
     * The name associated with the mailbox.
     */
    private ?string $displayName;

    /**
     * The primary email address of the mailbox.
     */
    private ?string $primaryAddress;

    /**
     * The user principal name of the mailbox.
     */
    private ?string $upn;

    /**
     * The user account of the mailbox.
     */
    private ?string $userAccount;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getPrimaryAddress(): ?string
    {
        return $this->primaryAddress;
    }

    public function setPrimaryAddress(?string $primaryAddress): self
    {
        $this->primaryAddress = $primaryAddress;
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

    public function getUserAccount(): ?string
    {
        return $this->userAccount;
    }

    public function setUserAccount(?string $userAccount): self
    {
        $this->userAccount = $userAccount;
        return $this;
    }

}
