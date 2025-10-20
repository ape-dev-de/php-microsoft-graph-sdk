<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamsTemplate;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamsTemplateCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TeamsTemplateQueryOptions;

/**
 * Request builder for TeamsTemplate collection
 */
class TeamsTemplatesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new TeamsTemplateQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param TeamsTemplateQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TeamsTemplateCollectionResponse
     */
    public function get(?TeamsTemplateQueryOptions $options = null, ?array $queryParameters = null): TeamsTemplateCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TeamsTemplateCollectionResponse::class);
    }

    /**
     * Create a new TeamsTemplate
     *
     * @param TeamsTemplate $item The item to create
     * @return TeamsTemplate
     */
    public function post(TeamsTemplate $item): TeamsTemplate
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, TeamsTemplate::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return TeamsTemplateItemRequestBuilder
     */
    public function byId(string $id): TeamsTemplateItemRequestBuilder
    {
        return new TeamsTemplateItemRequestBuilder($this->client, $this->buildPath($id));
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
