<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenoteSection;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenoteSectionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\OnenoteSectionQueryOptions;

/**
 * Request builder for OnenoteSection
 */
class SectionsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new OnenoteSectionQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param OnenoteSectionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return OnenoteSectionCollectionResponse
     */
    public function get(?OnenoteSectionQueryOptions $options = null, ?array $queryParameters = null): OnenoteSectionCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, OnenoteSectionCollectionResponse::class);
    }

    /**
     * Create a new OnenoteSection
     *
     * @param OnenoteSection $item The item to create
     * @return OnenoteSection
     */
    public function post(OnenoteSection $item): OnenoteSection
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, OnenoteSection::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return OnenoteSectionItemRequestBuilder
     */
    public function byId(string $id): OnenoteSectionItemRequestBuilder
    {
        return new OnenoteSectionItemRequestBuilder($this->client, $this->buildPath($id));
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
