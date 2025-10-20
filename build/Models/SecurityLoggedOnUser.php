<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityLoggedOnUser
 */
class SecurityLoggedOnUser
{
    /**
     * User account name of the logged-on user.
     */
    private ?string $accountName;

    /**
     * User account domain of the logged-on user.
     */
    private ?string $domainName;

    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    public function setDomainName(?string $domainName): self
    {
        $this->domainName = $domainName;
        return $this;
    }

}
