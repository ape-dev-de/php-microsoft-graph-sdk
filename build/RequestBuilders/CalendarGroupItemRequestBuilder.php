<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CalendarGroup;

/**
 * Request builder for individual CalendarGroup item
 */
class CalendarGroupItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get CalendarGroup item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return CalendarGroup
     */
    public function get(?array $queryParameters = null): CalendarGroup
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, CalendarGroup::class);
    }

    /**
     * Update CalendarGroup item
     *
     * @param CalendarGroup $item The item with updated properties
     * @return CalendarGroup
     */
    public function patch(CalendarGroup $item): CalendarGroup
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, CalendarGroup::class);
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
