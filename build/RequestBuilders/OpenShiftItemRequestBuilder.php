<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OpenShift;

/**
 * Request builder for individual OpenShift item
 */
class OpenShiftItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get OpenShift item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return OpenShift
     */
    public function get(?array $queryParameters = null): OpenShift
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, OpenShift::class);
    }

    /**
     * Update OpenShift item
     *
     * @param OpenShift $item The item with updated properties
     * @return OpenShift
     */
    public function patch(OpenShift $item): OpenShift
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, OpenShift::class);
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
