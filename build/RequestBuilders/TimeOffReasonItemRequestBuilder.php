<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TimeOffReason;

/**
 * Request builder for individual TimeOffReason item
 */
class TimeOffReasonItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get TimeOffReason item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return TimeOffReason
     */
    public function get(?array $queryParameters = null): TimeOffReason
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, TimeOffReason::class);
    }

    /**
     * Update TimeOffReason item
     *
     * @param TimeOffReason $item The item with updated properties
     * @return TimeOffReason
     */
    public function patch(TimeOffReason $item): TimeOffReason
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, TimeOffReason::class);
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
