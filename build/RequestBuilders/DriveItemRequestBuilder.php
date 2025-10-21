<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Drive;

/**
 * Request builder for individual Drive item
 */
class DriveItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Drive item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Drive
     */
    public function get(?array $queryParameters = null): Drive
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Drive::class);
    }

    /**
     * Update Drive item
     *
     * @param Drive $item The item with updated properties
     * @return Drive
     */
    public function patch(Drive $item): Drive
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Drive::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

    /**
     * Get bundles request builder
     *
     * @return BundlesRequestBuilder
     */
    public function bundles(): BundlesRequestBuilder
    {
        return new BundlesRequestBuilder($this->client, $this->buildPath('bundles'));
    }

    /**
     * Get createdByUser request builder
     *
     * @return CreatedByUserRequestBuilder
     */
    public function createdByUser(): CreatedByUserRequestBuilder
    {
        return new CreatedByUserRequestBuilder($this->client, $this->buildPath('createdByUser'));
    }

    /**
     * Get following request builder
     *
     * @return FollowingRequestBuilder
     */
    public function following(): FollowingRequestBuilder
    {
        return new FollowingRequestBuilder($this->client, $this->buildPath('following'));
    }

    /**
     * Get items request builder
     *
     * @return ItemsRequestBuilder
     */
    public function items(): ItemsRequestBuilder
    {
        return new ItemsRequestBuilder($this->client, $this->buildPath('items'));
    }

    /**
     * Get lastModifiedByUser request builder
     *
     * @return LastModifiedByUserRequestBuilder
     */
    public function lastModifiedByUser(): LastModifiedByUserRequestBuilder
    {
        return new LastModifiedByUserRequestBuilder($this->client, $this->buildPath('lastModifiedByUser'));
    }

    /**
     * Get list request builder
     *
     * @return ListRequestBuilder
     */
    public function list(): ListRequestBuilder
    {
        return new ListRequestBuilder($this->client, $this->buildPath('list'));
    }

    /**
     * Get root request builder
     *
     * @return RootRequestBuilder
     */
    public function root(): RootRequestBuilder
    {
        return new RootRequestBuilder($this->client, $this->buildPath('root'));
    }

    /**
     * Get special request builder
     *
     * @return SpecialRequestBuilder
     */
    public function special(): SpecialRequestBuilder
    {
        return new SpecialRequestBuilder($this->client, $this->buildPath('special'));
    }

}
