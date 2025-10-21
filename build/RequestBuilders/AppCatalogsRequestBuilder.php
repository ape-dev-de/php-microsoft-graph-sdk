<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AppCatalogs;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AppCatalogsQueryOptions;

/**
 * Request builder for AppCatalogs
 */
class AppCatalogsRequestBuilder extends BaseRequestBuilder
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
     * @param AppCatalogsQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AppCatalogs
     */
    public function get(?AppCatalogsQueryOptions $options = null, ?array $queryParameters = null): AppCatalogs
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AppCatalogs::class);
    }

    /**
     * Create a new AppCatalogs
     *
     * @param AppCatalogs $item The item to create
     * @return AppCatalogs
     */
    public function post(AppCatalogs $item): AppCatalogs
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AppCatalogs::class);
    }

}
