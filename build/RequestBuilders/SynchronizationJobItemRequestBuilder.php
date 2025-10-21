<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SynchronizationJob;

/**
 * Request builder for individual SynchronizationJob item
 */
class SynchronizationJobItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get SynchronizationJob item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return SynchronizationJob
     */
    public function get(?array $queryParameters = null): SynchronizationJob
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, SynchronizationJob::class);
    }

    /**
     * Update SynchronizationJob item
     *
     * @param SynchronizationJob $item The item with updated properties
     * @return SynchronizationJob
     */
    public function patch(SynchronizationJob $item): SynchronizationJob
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, SynchronizationJob::class);
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
