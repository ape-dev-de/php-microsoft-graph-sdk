<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsSetting;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsSettingCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WindowsSettingQueryOptions;

/**
 * Request builder for WindowsSetting
 */
class WindowsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new WindowsSettingQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param WindowsSettingQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WindowsSettingCollectionResponse
     */
    public function get(?WindowsSettingQueryOptions $options = null, ?array $queryParameters = null): WindowsSettingCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WindowsSettingCollectionResponse::class);
    }

    /**
     * Create a new WindowsSetting
     *
     * @param WindowsSetting $item The item to create
     * @return WindowsSetting
     */
    public function post(WindowsSetting $item): WindowsSetting
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WindowsSetting::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return WindowsSettingItemRequestBuilder
     */
    public function byId(string $id): WindowsSettingItemRequestBuilder
    {
        return new WindowsSettingItemRequestBuilder($this->client, $this->buildPath($id));
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
