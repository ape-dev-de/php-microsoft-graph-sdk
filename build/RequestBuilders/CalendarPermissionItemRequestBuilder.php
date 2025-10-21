<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CalendarPermission;

/**
 * Request builder for individual CalendarPermission item
 */
class CalendarPermissionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get CalendarPermission item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return CalendarPermission
     */
    public function get(?array $queryParameters = null): CalendarPermission
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, CalendarPermission::class);
    }

    /**
     * Update CalendarPermission item
     *
     * @param CalendarPermission $item The item with updated properties
     * @return CalendarPermission
     */
    public function patch(CalendarPermission $item): CalendarPermission
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, CalendarPermission::class);
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
