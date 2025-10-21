<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Agreement;
use ApeDevDe\MicrosoftGraphSdk\Models\AgreementCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AgreementQueryOptions;

/**
 * Request builder for Agreement
 */
class AgreementsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new AgreementQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param AgreementQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AgreementCollectionResponse
     */
    public function get(?AgreementQueryOptions $options = null, ?array $queryParameters = null): AgreementCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AgreementCollectionResponse::class);
    }

    /**
     * Create a new Agreement
     *
     * @param Agreement $item The item to create
     * @return Agreement
     */
    public function post(Agreement $item): Agreement
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Agreement::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return AgreementItemRequestBuilder
     */
    public function byId(string $id): AgreementItemRequestBuilder
    {
        return new AgreementItemRequestBuilder($this->client, $this->buildPath($id));
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
