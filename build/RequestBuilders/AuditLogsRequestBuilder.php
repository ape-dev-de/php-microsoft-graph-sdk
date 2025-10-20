<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AuditLog;
use ApeDevDe\MicrosoftGraphSdk\Models\AuditLogCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AuditLogQueryOptions;

/**
 * Request builder for AuditLog collection
 */
class AuditLogsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new AuditLogQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param AuditLogQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AuditLogCollectionResponse
     */
    public function get(?AuditLogQueryOptions $options = null, ?array $queryParameters = null): AuditLogCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AuditLogCollectionResponse::class);
    }

    /**
     * Create a new AuditLog
     *
     * @param AuditLog $item The item to create
     * @return AuditLog
     */
    public function post(AuditLog $item): AuditLog
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AuditLog::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return AuditLogItemRequestBuilder
     */
    public function byId(string $id): AuditLogItemRequestBuilder
    {
        return new AuditLogItemRequestBuilder($this->client, $this->buildPath($id));
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
