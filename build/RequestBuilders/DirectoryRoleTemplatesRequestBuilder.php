<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryRoleTemplate;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryRoleTemplateCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DirectoryRoleTemplateQueryOptions;

/**
 * Request builder for DirectoryRoleTemplate collection
 */
class DirectoryRoleTemplatesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DirectoryRoleTemplateQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DirectoryRoleTemplateQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DirectoryRoleTemplateCollectionResponse
     */
    public function get(?DirectoryRoleTemplateQueryOptions $options = null, ?array $queryParameters = null): DirectoryRoleTemplateCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DirectoryRoleTemplateCollectionResponse::class);
    }

    /**
     * Create a new DirectoryRoleTemplate
     *
     * @param DirectoryRoleTemplate $item The item to create
     * @return DirectoryRoleTemplate
     */
    public function post(DirectoryRoleTemplate $item): DirectoryRoleTemplate
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DirectoryRoleTemplate::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DirectoryRoleTemplateItemRequestBuilder
     */
    public function byId(string $id): DirectoryRoleTemplateItemRequestBuilder
    {
        return new DirectoryRoleTemplateItemRequestBuilder($this->client, $this->buildPath($id));
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
