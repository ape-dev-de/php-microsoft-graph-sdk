<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\Localizations;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OrganizationalBrandingLocalization;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\Localizations\BackgroundImageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\Localizations\BannerLogoRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\Localizations\CustomCSSRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\Localizations\FaviconRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\Localizations\HeaderLogoRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\Localizations\SquareLogoRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Organization\Branding\Localizations\SquareLogoDarkRequestBuilder;

/**
 * Request builder for /organization/{organization-id}/branding/localizations/{organizationalBrandingLocalization-id}
 */
class OrganizationalBrandingLocalizationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get organizationalBrandingLocalization
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return OrganizationalBrandingLocalization|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): OrganizationalBrandingLocalization|null
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
     * Deserialize response to OrganizationalBrandingLocalization|null
     */
    private function deserializeGet(string $body): OrganizationalBrandingLocalization|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new OrganizationalBrandingLocalization($data);
    }
    /**
     * Update organizationalBrandingLocalization
     * @param OrganizationalBrandingLocalization $body Request body
     * @return OrganizationalBrandingLocalization|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(OrganizationalBrandingLocalization $body): OrganizationalBrandingLocalization|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to OrganizationalBrandingLocalization|null
     */
    private function deserializePatch(string $body): OrganizationalBrandingLocalization|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new OrganizationalBrandingLocalization($data);
    }
    /**
     * Delete organizationalBrandingLocalization
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
