<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TimeOffRequest;

/**
 * Request builder for individual TimeOffRequest item
 */
class TimeOffRequestItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get TimeOffRequest item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return TimeOffRequest
     */
    public function get(?array $queryParameters = null): TimeOffRequest
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, TimeOffRequest::class);
    }

    /**
     * Update TimeOffRequest item
     *
     * @param TimeOffRequest $item The item with updated properties
     * @return TimeOffRequest
     */
    public function patch(TimeOffRequest $item): TimeOffRequest
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, TimeOffRequest::class);
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
