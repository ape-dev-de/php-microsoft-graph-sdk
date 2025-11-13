<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OrganizationalBranding;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\BackgroundImageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\BannerLogoRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\CustomCSSRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\FaviconRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\HeaderLogoRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\LocalizationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\SquareLogoRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\SquareLogoDarkRequestBuilder;

/**
 * Request builder for /organization/{organization-id}/branding
 */
class BrandingRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get organizationalBranding
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return OrganizationalBranding|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): OrganizationalBranding|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to OrganizationalBranding|null
     */
    private function deserializeGet(string $body): OrganizationalBranding|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new OrganizationalBranding($data);
    }
    /**
     * Update organizationalBranding
     * @param OrganizationalBranding $body Request body
     * @return OrganizationalBranding|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(OrganizationalBranding $body): OrganizationalBranding|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to OrganizationalBranding|null
     */
    private function deserializePatch(string $body): OrganizationalBranding|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new OrganizationalBranding($data);
    }
    /**
     * Delete organizationalBranding
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return $data;
    }
    /**
     * Navigate to backgroundImage
     *
     * @return BackgroundImageRequestBuilder
     */
    public function backgroundImage(): BackgroundImageRequestBuilder
    {
        return new BackgroundImageRequestBuilder($this->client, $this->requestUrl . '/backgroundImage');
    }
    /**
     * Navigate to bannerLogo
     *
     * @return BannerLogoRequestBuilder
     */
    public function bannerLogo(): BannerLogoRequestBuilder
    {
        return new BannerLogoRequestBuilder($this->client, $this->requestUrl . '/bannerLogo');
    }
    /**
     * Navigate to customCSS
     *
     * @return CustomCSSRequestBuilder
     */
    public function customCSS(): CustomCSSRequestBuilder
    {
        return new CustomCSSRequestBuilder($this->client, $this->requestUrl . '/customCSS');
    }
    /**
     * Navigate to favicon
     *
     * @return FaviconRequestBuilder
     */
    public function favicon(): FaviconRequestBuilder
    {
        return new FaviconRequestBuilder($this->client, $this->requestUrl . '/favicon');
    }
    /**
     * Navigate to headerLogo
     *
     * @return HeaderLogoRequestBuilder
     */
    public function headerLogo(): HeaderLogoRequestBuilder
    {
        return new HeaderLogoRequestBuilder($this->client, $this->requestUrl . '/headerLogo');
    }
    /**
     * Navigate to localizations
     *
     * @return LocalizationsRequestBuilder
     */
    public function localizations(): LocalizationsRequestBuilder
    {
        return new LocalizationsRequestBuilder($this->client, $this->requestUrl . '/localizations');
    }
    /**
     * Navigate to squareLogo
     *
     * @return SquareLogoRequestBuilder
     */
    public function squareLogo(): SquareLogoRequestBuilder
    {
        return new SquareLogoRequestBuilder($this->client, $this->requestUrl . '/squareLogo');
    }
    /**
     * Navigate to squareLogoDark
     *
     * @return SquareLogoDarkRequestBuilder
     */
    public function squareLogoDark(): SquareLogoDarkRequestBuilder
    {
        return new SquareLogoDarkRequestBuilder($this->client, $this->requestUrl . '/squareLogoDark');
    }
}
