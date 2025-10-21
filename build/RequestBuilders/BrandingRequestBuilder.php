<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OrganizationalBranding;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\OrganizationalBrandingQueryOptions;

/**
 * Request builder for OrganizationalBranding
 */
class BrandingRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $filter: Filter results
     * - $orderby: Order results
     * - $top: Limit number of results
     * - $skip: Skip number of results
     * - $expand: Expand related resources
     * - $search: Search query
     * - $count: Include count of items
     *
     * @param OrganizationalBrandingQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return OrganizationalBranding
     */
    public function get(?OrganizationalBrandingQueryOptions $options = null, ?array $queryParameters = null): OrganizationalBranding
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, OrganizationalBranding::class);
    }

    /**
     * Create a new OrganizationalBranding
     *
     * @param OrganizationalBranding $item The item to create
     * @return OrganizationalBranding
     */
    public function post(OrganizationalBranding $item): OrganizationalBranding
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, OrganizationalBranding::class);
    }
    /**
     * Get backgroundImage request builder
     *
     * @return BackgroundImageRequestBuilder
     */
    public function backgroundImage(): BackgroundImageRequestBuilder
    {
        return new BackgroundImageRequestBuilder($this->client, $this->buildPath('backgroundImage'));
    }

    /**
     * Get bannerLogo request builder
     *
     * @return BannerLogoRequestBuilder
     */
    public function bannerLogo(): BannerLogoRequestBuilder
    {
        return new BannerLogoRequestBuilder($this->client, $this->buildPath('bannerLogo'));
    }

    /**
     * Get customCSS request builder
     *
     * @return CustomCSSRequestBuilder
     */
    public function customCSS(): CustomCSSRequestBuilder
    {
        return new CustomCSSRequestBuilder($this->client, $this->buildPath('customCSS'));
    }

    /**
     * Get favicon request builder
     *
     * @return FaviconRequestBuilder
     */
    public function favicon(): FaviconRequestBuilder
    {
        return new FaviconRequestBuilder($this->client, $this->buildPath('favicon'));
    }

    /**
     * Get headerLogo request builder
     *
     * @return HeaderLogoRequestBuilder
     */
    public function headerLogo(): HeaderLogoRequestBuilder
    {
        return new HeaderLogoRequestBuilder($this->client, $this->buildPath('headerLogo'));
    }

    /**
     * Get localizations request builder
     *
     * @return LocalizationsRequestBuilder
     */
    public function localizations(): LocalizationsRequestBuilder
    {
        return new LocalizationsRequestBuilder($this->client, $this->buildPath('localizations'));
    }

    /**
     * Get squareLogo request builder
     *
     * @return SquareLogoRequestBuilder
     */
    public function squareLogo(): SquareLogoRequestBuilder
    {
        return new SquareLogoRequestBuilder($this->client, $this->buildPath('squareLogo'));
    }

    /**
     * Get squareLogoDark request builder
     *
     * @return SquareLogoDarkRequestBuilder
     */
    public function squareLogoDark(): SquareLogoDarkRequestBuilder
    {
        return new SquareLogoDarkRequestBuilder($this->client, $this->buildPath('squareLogoDark'));
    }

}
