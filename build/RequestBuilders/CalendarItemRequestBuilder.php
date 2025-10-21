<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Calendar;

/**
 * Request builder for individual Calendar item
 */
class CalendarItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Calendar item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Calendar
     */
    public function get(?array $queryParameters = null): Calendar
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Calendar::class);
    }

    /**
     * Update Calendar item
     *
     * @param Calendar $item The item with updated properties
     * @return Calendar
     */
    public function patch(Calendar $item): Calendar
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Calendar::class);
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
