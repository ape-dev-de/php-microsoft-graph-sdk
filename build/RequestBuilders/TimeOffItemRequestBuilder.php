<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TimeOff;

/**
 * Request builder for individual TimeOff item
 */
class TimeOffItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get TimeOff item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return TimeOff
     */
    public function get(?array $queryParameters = null): TimeOff
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, TimeOff::class);
    }

    /**
     * Update TimeOff item
     *
     * @param TimeOff $item The item with updated properties
     * @return TimeOff
     */
    public function patch(TimeOff $item): TimeOff
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, TimeOff::class);
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
