<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CallTranscript;

/**
 * Request builder for individual CallTranscript item
 */
class CallTranscriptItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get CallTranscript item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return CallTranscript
     */
    public function get(?array $queryParameters = null): CallTranscript
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, CallTranscript::class);
    }

    /**
     * Update CallTranscript item
     *
     * @param CallTranscript $item The item with updated properties
     * @return CallTranscript
     */
    public function patch(CallTranscript $item): CallTranscript
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, CallTranscript::class);
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
