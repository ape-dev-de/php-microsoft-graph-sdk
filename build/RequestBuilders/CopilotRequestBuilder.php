<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Copilot;
use ApeDevDe\MicrosoftGraphSdk\Models\CopilotCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\CopilotQueryOptions;

/**
 * Request builder for Copilot collection
 */
class CopilotRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new CopilotQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param CopilotQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return CopilotCollectionResponse
     */
    public function get(?CopilotQueryOptions $options = null, ?array $queryParameters = null): CopilotCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, CopilotCollectionResponse::class);
    }

    /**
     * Create a new Copilot
     *
     * @param Copilot $item The item to create
     * @return Copilot
     */
    public function post(Copilot $item): Copilot
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Copilot::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return CopilotItemRequestBuilder
     */
    public function byId(string $id): CopilotItemRequestBuilder
    {
        return new CopilotItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->buildPath('$count'));
        return (int) $response->getBody()->getContents();
    }

}
