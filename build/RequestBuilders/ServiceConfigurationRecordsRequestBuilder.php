<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DomainDnsRecord;
use ApeDevDe\MicrosoftGraphSdk\Models\DomainDnsRecordCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DomainDnsRecordQueryOptions;

/**
 * Request builder for DomainDnsRecord
 */
class ServiceConfigurationRecordsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DomainDnsRecordQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DomainDnsRecordQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DomainDnsRecordCollectionResponse
     */
    public function get(?DomainDnsRecordQueryOptions $options = null, ?array $queryParameters = null): DomainDnsRecordCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DomainDnsRecordCollectionResponse::class);
    }

    /**
     * Create a new DomainDnsRecord
     *
     * @param DomainDnsRecord $item The item to create
     * @return DomainDnsRecord
     */
    public function post(DomainDnsRecord $item): DomainDnsRecord
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DomainDnsRecord::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DomainDnsRecordItemRequestBuilder
     */
    public function byId(string $id): DomainDnsRecordItemRequestBuilder
    {
        return new DomainDnsRecordItemRequestBuilder($this->client, $this->buildPath($id));
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
