<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityContainer;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\IdentityContainerQueryOptions;

/**
 * Request builder for IdentityContainer
 */
class IdentityRequestBuilder extends BaseRequestBuilder
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
     * @param IdentityContainerQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return IdentityContainer
     */
    public function get(?IdentityContainerQueryOptions $options = null, ?array $queryParameters = null): IdentityContainer
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, IdentityContainer::class);
    }

    /**
     * Create a new IdentityContainer
     *
     * @param IdentityContainer $item The item to create
     * @return IdentityContainer
     */
    public function post(IdentityContainer $item): IdentityContainer
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, IdentityContainer::class);
    }

}
