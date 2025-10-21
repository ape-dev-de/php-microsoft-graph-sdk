<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CallRecording;

/**
 * Request builder for individual CallRecording item
 */
class CallRecordingItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get CallRecording item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return CallRecording
     */
    public function get(?array $queryParameters = null): CallRecording
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, CallRecording::class);
    }

    /**
     * Update CallRecording item
     *
     * @param CallRecording $item The item with updated properties
     * @return CallRecording
     */
    public function patch(CallRecording $item): CallRecording
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, CallRecording::class);
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
