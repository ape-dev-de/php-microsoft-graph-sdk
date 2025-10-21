<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SharedDriveItem;

/**
 * Request builder for individual SharedDriveItem item
 */
class SharedDriveItemItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get SharedDriveItem item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return SharedDriveItem
     */
    public function get(?array $queryParameters = null): SharedDriveItem
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, SharedDriveItem::class);
    }

    /**
     * Update SharedDriveItem item
     *
     * @param SharedDriveItem $item The item with updated properties
     * @return SharedDriveItem
     */
    public function patch(SharedDriveItem $item): SharedDriveItem
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, SharedDriveItem::class);
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
     * Get createdByUser request builder
     *
     * @return CreatedByUserRequestBuilder
     */
    public function createdByUser(): CreatedByUserRequestBuilder
    {
        return new CreatedByUserRequestBuilder($this->client, $this->buildPath('createdByUser'));
    }

    /**
     * Get driveItem request builder
     *
     * @return DriveItemRequestBuilder
     */
    public function driveItem(): DriveItemRequestBuilder
    {
        return new DriveItemRequestBuilder($this->client, $this->buildPath('driveItem'));
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
     * Get listItem request builder
     *
     * @return ListItemRequestBuilder
     */
    public function listItem(): ListItemRequestBuilder
    {
        return new ListItemRequestBuilder($this->client, $this->buildPath('listItem'));
    }

    /**
     * Get permission request builder
     *
     * @return PermissionRequestBuilder
     */
    public function permission(): PermissionRequestBuilder
    {
        return new PermissionRequestBuilder($this->client, $this->buildPath('permission'));
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
     * Get site request builder
     *
     * @return SiteRequestBuilder
     */
    public function site(): SiteRequestBuilder
    {
        return new SiteRequestBuilder($this->client, $this->buildPath('site'));
    }

}
