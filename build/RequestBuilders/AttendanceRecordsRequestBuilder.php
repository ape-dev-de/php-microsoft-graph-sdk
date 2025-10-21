<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AttendanceRecord;
use ApeDevDe\MicrosoftGraphSdk\Models\AttendanceRecordCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AttendanceRecordQueryOptions;

/**
 * Request builder for AttendanceRecord
 */
class AttendanceRecordsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new AttendanceRecordQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param AttendanceRecordQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AttendanceRecordCollectionResponse
     */
    public function get(?AttendanceRecordQueryOptions $options = null, ?array $queryParameters = null): AttendanceRecordCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AttendanceRecordCollectionResponse::class);
    }

    /**
     * Create a new AttendanceRecord
     *
     * @param AttendanceRecord $item The item to create
     * @return AttendanceRecord
     */
    public function post(AttendanceRecord $item): AttendanceRecord
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AttendanceRecord::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return AttendanceRecordItemRequestBuilder
     */
    public function byId(string $id): AttendanceRecordItemRequestBuilder
    {
        return new AttendanceRecordItemRequestBuilder($this->client, $this->buildPath($id));
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
