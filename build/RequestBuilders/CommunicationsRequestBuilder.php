<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CloudCommunications;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\CloudCommunicationsQueryOptions;

/**
 * Request builder for CloudCommunications
 */
class CommunicationsRequestBuilder extends BaseRequestBuilder
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
     * @param CloudCommunicationsQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return CloudCommunications
     */
    public function get(?CloudCommunicationsQueryOptions $options = null, ?array $queryParameters = null): CloudCommunications
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, CloudCommunications::class);
    }

    /**
     * Create a new CloudCommunications
     *
     * @param CloudCommunications $item The item to create
     * @return CloudCommunications
     */
    public function post(CloudCommunications $item): CloudCommunications
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, CloudCommunications::class);
    }

}
