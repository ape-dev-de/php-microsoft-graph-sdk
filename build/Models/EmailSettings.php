<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailSettings
 */
class EmailSettings
{
    /**
     * Specifies the domain that should be used when sending email notifications. This domain must be verified in order to be used. We recommend that you use a domain that has the appropriate DNS records to facilitate email validation, like SPF, DKIM, DMARC, and MX, because this then complies with the RFC compliance for sending and receiving email. For details, see Learn more about Exchange Online Email Routing.
     */
    private ?string $senderDomain;

    /**
     * Specifies if the organization’s banner logo should be included in email notifications. The banner logo will replace the Microsoft logo at the top of the email notification. If true the banner logo will be taken from the tenant’s branding settings. This value can only be set to true if the organizationalBranding bannerLogo property is set.
     */
    private ?string $useCompanyBranding;

    public function getSenderDomain(): ?string
    {
        return $this->senderDomain;
    }

    public function setSenderDomain(?string $senderDomain): self
    {
        $this->senderDomain = $senderDomain;
        return $this;
    }

    public function getUseCompanyBranding(): ?string
    {
        return $this->useCompanyBranding;
    }

    public function setUseCompanyBranding(?string $useCompanyBranding): self
    {
        $this->useCompanyBranding = $useCompanyBranding;
        return $this;
    }

}
