<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WebApplication
 */
class WebApplication
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Home page or landing page of the application. */
    public ?string $homePageUrl = null;

    /** 
     * Specifies whether this web application can request tokens using the OAuth 2.0 implicit flow.
     * @var ImplicitGrantSettings|\stdClass|null
     */
    public ImplicitGrantSettings|\stdClass|null $implicitGrantSettings = null;

    /** Specifies the URL that is used by Microsoft's authorization service to log out a user using front-channel, back-channel or SAML logout protocols. */
    public ?string $logoutUrl = null;

    /** 
     * Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent.
     * @var string[]
     */
    public array $redirectUris = [];

    /** 
     * 
     * @var RedirectUriSettings[]
     */
    public array $redirectUriSettings = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['homePageUrl'])) {
            $this->homePageUrl = $data['homePageUrl'];
        }
        if (isset($data['implicitGrantSettings'])) {
            $this->implicitGrantSettings = is_array($data['implicitGrantSettings']) ? new ImplicitGrantSettings($data['implicitGrantSettings']) : $data['implicitGrantSettings'];
        }
        if (isset($data['logoutUrl'])) {
            $this->logoutUrl = $data['logoutUrl'];
        }
        if (isset($data['redirectUris'])) {
            $this->redirectUris = $data['redirectUris'];
        }
        if (isset($data['redirectUriSettings'])) {
            $this->redirectUriSettings = $data['redirectUriSettings'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
