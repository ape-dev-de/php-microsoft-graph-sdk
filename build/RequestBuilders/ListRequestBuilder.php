<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ListModel;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ListModelQueryOptions;

/**
 * Request builder for ListModel
 */
class ListRequestBuilder extends BaseRequestBuilder
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
     * @param ListModelQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ListModel
     */
    public function get(?ListModelQueryOptions $options = null, ?array $queryParameters = null): ListModel
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ListModel::class);
    }

    /**
     * Create a new ListModel
     *
     * @param ListModel $item The item to create
     * @return ListModel
     */
    public function post(ListModel $item): ListModel
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ListModel::class);
    }
    /**
     * Get columns request builder
     *
     * @return ColumnsRequestBuilder
     */
    public function columns(): ColumnsRequestBuilder
    {
        return new ColumnsRequestBuilder($this->client, $this->buildPath('columns'));
    }

    /**
     * Get contentTypes request builder
     *
     * @return ContentTypesRequestBuilder
     */
    public function contentTypes(): ContentTypesRequestBuilder
    {
        return new ContentTypesRequestBuilder($this->client, $this->buildPath('contentTypes'));
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
     * Get drive request builder
     *
     * @return DriveRequestBuilder
     */
    public function drive(): DriveRequestBuilder
    {
        return new DriveRequestBuilder($this->client, $this->buildPath('drive'));
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
     * Get operations request builder
     *
     * @return OperationsRequestBuilder
     */
    public function operations(): OperationsRequestBuilder
    {
        return new OperationsRequestBuilder($this->client, $this->buildPath('operations'));
    }

    /**
     * Get subscriptions request builder
     *
     * @return SubscriptionsRequestBuilder
     */
    public function subscriptions(): SubscriptionsRequestBuilder
    {
        return new SubscriptionsRequestBuilder($this->client, $this->buildPath('subscriptions'));
    }

}
