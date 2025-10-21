<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\LinkedResource;

/**
 * Request builder for individual LinkedResource item
 */
class LinkedResourceItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get LinkedResource item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return LinkedResource
     */
    public function get(?array $queryParameters = null): LinkedResource
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, LinkedResource::class);
    }

    /**
     * Update LinkedResource item
     *
     * @param LinkedResource $item The item with updated properties
     * @return LinkedResource
     */
    public function patch(LinkedResource $item): LinkedResource
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, LinkedResource::class);
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
