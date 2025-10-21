<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AgreementFileVersion;
use ApeDevDe\MicrosoftGraphSdk\Models\AgreementFileVersionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AgreementFileVersionQueryOptions;

/**
 * Request builder for AgreementFileVersion
 */
class VersionsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new AgreementFileVersionQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param AgreementFileVersionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AgreementFileVersionCollectionResponse
     */
    public function get(?AgreementFileVersionQueryOptions $options = null, ?array $queryParameters = null): AgreementFileVersionCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AgreementFileVersionCollectionResponse::class);
    }

    /**
     * Create a new AgreementFileVersion
     *
     * @param AgreementFileVersion $item The item to create
     * @return AgreementFileVersion
     */
    public function post(AgreementFileVersion $item): AgreementFileVersion
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AgreementFileVersion::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return AgreementFileVersionItemRequestBuilder
     */
    public function byId(string $id): AgreementFileVersionItemRequestBuilder
    {
        return new AgreementFileVersionItemRequestBuilder($this->client, $this->buildPath($id));
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
