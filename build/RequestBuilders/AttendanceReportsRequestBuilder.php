<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\MeetingAttendanceReport;
use ApeDevDe\MicrosoftGraphSdk\Models\MeetingAttendanceReportCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\MeetingAttendanceReportQueryOptions;

/**
 * Request builder for MeetingAttendanceReport
 */
class AttendanceReportsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new MeetingAttendanceReportQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param MeetingAttendanceReportQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return MeetingAttendanceReportCollectionResponse
     */
    public function get(?MeetingAttendanceReportQueryOptions $options = null, ?array $queryParameters = null): MeetingAttendanceReportCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, MeetingAttendanceReportCollectionResponse::class);
    }

    /**
     * Create a new MeetingAttendanceReport
     *
     * @param MeetingAttendanceReport $item The item to create
     * @return MeetingAttendanceReport
     */
    public function post(MeetingAttendanceReport $item): MeetingAttendanceReport
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, MeetingAttendanceReport::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return MeetingAttendanceReportItemRequestBuilder
     */
    public function byId(string $id): MeetingAttendanceReportItemRequestBuilder
    {
        return new MeetingAttendanceReportItemRequestBuilder($this->client, $this->buildPath($id));
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
