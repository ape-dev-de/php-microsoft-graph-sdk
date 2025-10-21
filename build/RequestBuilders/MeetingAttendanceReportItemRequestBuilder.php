<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\MeetingAttendanceReport;

/**
 * Request builder for individual MeetingAttendanceReport item
 */
class MeetingAttendanceReportItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get MeetingAttendanceReport item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return MeetingAttendanceReport
     */
    public function get(?array $queryParameters = null): MeetingAttendanceReport
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, MeetingAttendanceReport::class);
    }

    /**
     * Update MeetingAttendanceReport item
     *
     * @param MeetingAttendanceReport $item The item with updated properties
     * @return MeetingAttendanceReport
     */
    public function patch(MeetingAttendanceReport $item): MeetingAttendanceReport
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, MeetingAttendanceReport::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

}
