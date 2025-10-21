<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AttendanceRecord;

/**
 * Request builder for individual AttendanceRecord item
 */
class AttendanceRecordItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AttendanceRecord item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AttendanceRecord
     */
    public function get(?array $queryParameters = null): AttendanceRecord
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AttendanceRecord::class);
    }

    /**
     * Update AttendanceRecord item
     *
     * @param AttendanceRecord $item The item with updated properties
     * @return AttendanceRecord
     */
    public function patch(AttendanceRecord $item): AttendanceRecord
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AttendanceRecord::class);
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
