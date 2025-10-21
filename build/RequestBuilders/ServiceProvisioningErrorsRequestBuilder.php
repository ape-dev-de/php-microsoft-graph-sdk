<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ServiceProvisioningError;
use ApeDevDe\MicrosoftGraphSdk\Models\ServiceProvisioningErrorCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ServiceProvisioningErrorQueryOptions;

/**
 * Request builder for ServiceProvisioningError
 */
class ServiceProvisioningErrorsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ServiceProvisioningErrorQueryOptions())->top(10)->select(['displayName', 'mail']))
     * 2. Array parameters: get(queryParameters: ['$top' => 10, '$select' => 'displayName,mail'])
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
     * @param ServiceProvisioningErrorQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ServiceProvisioningErrorCollectionResponse
     */
    public function get(?ServiceProvisioningErrorQueryOptions $options = null, ?array $queryParameters = null): ServiceProvisioningErrorCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ServiceProvisioningErrorCollectionResponse::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return OrgContactItemRequestBuilder
     */
    public function byId(string $id): OrgContactItemRequestBuilder
    {
        return new OrgContactItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->getFullPath() . '/$count');
        return (int) $response->getBody()->getContents();
    }

}
