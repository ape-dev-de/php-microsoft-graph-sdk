<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OpenShiftChangeRequest;

/**
 * Request builder for individual OpenShiftChangeRequest item
 */
class OpenShiftChangeRequestItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get OpenShiftChangeRequest item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return OpenShiftChangeRequest
     */
    public function get(?array $queryParameters = null): OpenShiftChangeRequest
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, OpenShiftChangeRequest::class);
    }

    /**
     * Update OpenShiftChangeRequest item
     *
     * @param OpenShiftChangeRequest $item The item with updated properties
     * @return OpenShiftChangeRequest
     */
    public function patch(OpenShiftChangeRequest $item): OpenShiftChangeRequest
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, OpenShiftChangeRequest::class);
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
