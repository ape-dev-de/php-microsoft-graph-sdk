<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenoteResource;

/**
 * Request builder for individual OnenoteResource item
 */
class OnenoteResourceItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get OnenoteResource item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return OnenoteResource
     */
    public function get(?array $queryParameters = null): OnenoteResource
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, OnenoteResource::class);
    }

    /**
     * Update OnenoteResource item
     *
     * @param OnenoteResource $item The item with updated properties
     * @return OnenoteResource
     */
    public function patch(OnenoteResource $item): OnenoteResource
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, OnenoteResource::class);
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
