<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Privacy;
use ApeDevDe\MicrosoftGraphSdk\Models\PrivacyCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PrivacyQueryOptions;

/**
 * Request builder for Privacy collection
 */
class PrivacyRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new PrivacyQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param PrivacyQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PrivacyCollectionResponse
     */
    public function get(?PrivacyQueryOptions $options = null, ?array $queryParameters = null): PrivacyCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PrivacyCollectionResponse::class);
    }

    /**
     * Create a new Privacy
     *
     * @param Privacy $item The item to create
     * @return Privacy
     */
    public function post(Privacy $item): Privacy
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Privacy::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return PrivacyItemRequestBuilder
     */
    public function byId(string $id): PrivacyItemRequestBuilder
    {
        return new PrivacyItemRequestBuilder($this->client, $this->buildPath($id));
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
