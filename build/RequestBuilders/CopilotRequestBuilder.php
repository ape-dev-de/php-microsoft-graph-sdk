<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CopilotRoot;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\CopilotRootQueryOptions;

/**
 * Request builder for CopilotRoot
 */
class CopilotRequestBuilder extends BaseRequestBuilder
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
     * @param CopilotRootQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return CopilotRoot
     */
    public function get(?CopilotRootQueryOptions $options = null, ?array $queryParameters = null): CopilotRoot
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, CopilotRoot::class);
    }

    /**
     * Create a new CopilotRoot
     *
     * @param CopilotRoot $item The item to create
     * @return CopilotRoot
     */
    public function post(CopilotRoot $item): CopilotRoot
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, CopilotRoot::class);
    }

}
