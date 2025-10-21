<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Contract
 */
class Contract
{
    /**
     * Type of contract. Possible values are:  SyndicationPartner, BreadthPartner, ResellerPartner. See more in the table below.
     */
    private ?string $contractType;

    /**
     * The unique identifier for the customer tenant referenced by this partnership. Corresponds to the id property of the customer tenant's organization resource.
     */
    private ?string $customerId;

    /**
     * A copy of the customer tenant's default domain name. The copy is made when the partnership with the customer is established. It isn't automatically updated if the customer tenant's default domain name changes.
     */
    private ?string $defaultDomainName;

    /**
     * A copy of the customer tenant's display name. The copy is made when the partnership with the customer is established. It is not automatically updated if the customer tenant's display name changes.
     */
    private ?string $displayName;


    public function getContractType(): ?string
    {
        return $this->contractType;
    }

    public function setContractType(?string $contractType): self
    {
        $this->contractType = $contractType;
        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }

    public function getDefaultDomainName(): ?string
    {
        return $this->defaultDomainName;
    }

    public function setDefaultDomainName(?string $defaultDomainName): self
    {
        $this->defaultDomainName = $defaultDomainName;
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

}
