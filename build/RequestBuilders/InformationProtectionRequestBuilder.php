<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\InformationProtection;
use ApeDevDe\MicrosoftGraphSdk\Models\InformationProtectionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\InformationProtectionQueryOptions;

/**
 * Request builder for InformationProtection collection
 */
class InformationProtectionRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new InformationProtectionQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param InformationProtectionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return InformationProtectionCollectionResponse
     */
    public function get(?InformationProtectionQueryOptions $options = null, ?array $queryParameters = null): InformationProtectionCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, InformationProtectionCollectionResponse::class);
    }

    /**
     * Create a new InformationProtection
     *
     * @param InformationProtection $item The item to create
     * @return InformationProtection
     */
    public function post(InformationProtection $item): InformationProtection
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, InformationProtection::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return InformationProtectionItemRequestBuilder
     */
    public function byId(string $id): InformationProtectionItemRequestBuilder
    {
        return new InformationProtectionItemRequestBuilder($this->client, $this->buildPath($id));
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
