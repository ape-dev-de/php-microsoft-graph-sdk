<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InformationalUrl
 */
class InformationalUrl
{
    /**
     * CDN URL to the application''s logo, Read-only.
     */
    private ?string $logoUrl;

    /**
     * Link to the application''s marketing page. For example, https://www.contoso.com/app/marketing
     */
    private ?string $marketingUrl;

    /**
     * Link to the application''s privacy statement. For example, https://www.contoso.com/app/privacy
     */
    private ?string $privacyStatementUrl;

    /**
     * Link to the application''s support page. For example, https://www.contoso.com/app/support
     */
    private ?string $supportUrl;

    /**
     * Link to the application''s terms of service statement. For example, https://www.contoso.com/app/termsofservice
     */
    private ?string $termsOfServiceUrl;


    public function getLogoUrl(): ?string
    {
        return $this->logoUrl;
    }

    public function setLogoUrl(?string $logoUrl): self
    {
        $this->logoUrl = $logoUrl;
        return $this;
    }

    public function getMarketingUrl(): ?string
    {
        return $this->marketingUrl;
    }

    public function setMarketingUrl(?string $marketingUrl): self
    {
        $this->marketingUrl = $marketingUrl;
        return $this;
    }

    public function getPrivacyStatementUrl(): ?string
    {
        return $this->privacyStatementUrl;
    }

    public function setPrivacyStatementUrl(?string $privacyStatementUrl): self
    {
        $this->privacyStatementUrl = $privacyStatementUrl;
        return $this;
    }

    public function getSupportUrl(): ?string
    {
        return $this->supportUrl;
    }

    public function setSupportUrl(?string $supportUrl): self
    {
        $this->supportUrl = $supportUrl;
        return $this;
    }

    public function getTermsOfServiceUrl(): ?string
    {
        return $this->termsOfServiceUrl;
    }

    public function setTermsOfServiceUrl(?string $termsOfServiceUrl): self
    {
        $this->termsOfServiceUrl = $termsOfServiceUrl;
        return $this;
    }

}
