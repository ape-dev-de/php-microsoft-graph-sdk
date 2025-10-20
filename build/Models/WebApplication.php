<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WebApplication
 */
class WebApplication
{
    /**
     * Home page or landing page of the application.
     */
    private ?string $homePageUrl;

    /**
     * Specifies whether this web application can request tokens using the OAuth 2.0 implicit flow.
     */
    private ?string $implicitGrantSettings;

    /**
     * Specifies the URL that is used by Microsoft''s authorization service to log out a user using front-channel, back-channel or SAML logout protocols.
     */
    private ?string $logoutUrl;

    /**
     * Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent.
     */
    private ?string $redirectUris;

    /**
     */
    private ?string $redirectUriSettings;

    public function getHomePageUrl(): ?string
    {
        return $this->homePageUrl;
    }

    public function setHomePageUrl(?string $homePageUrl): self
    {
        $this->homePageUrl = $homePageUrl;
        return $this;
    }

    public function getImplicitGrantSettings(): ?string
    {
        return $this->implicitGrantSettings;
    }

    public function setImplicitGrantSettings(?string $implicitGrantSettings): self
    {
        $this->implicitGrantSettings = $implicitGrantSettings;
        return $this;
    }

    public function getLogoutUrl(): ?string
    {
        return $this->logoutUrl;
    }

    public function setLogoutUrl(?string $logoutUrl): self
    {
        $this->logoutUrl = $logoutUrl;
        return $this;
    }

    public function getRedirectUris(): ?string
    {
        return $this->redirectUris;
    }

    public function setRedirectUris(?string $redirectUris): self
    {
        $this->redirectUris = $redirectUris;
        return $this;
    }

    public function getRedirectUriSettings(): ?string
    {
        return $this->redirectUriSettings;
    }

    public function setRedirectUriSettings(?string $redirectUriSettings): self
    {
        $this->redirectUriSettings = $redirectUriSettings;
        return $this;
    }

}
