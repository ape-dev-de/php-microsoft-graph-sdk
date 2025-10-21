<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SubjectRightsRequest;

/**
 * Request builder for individual SubjectRightsRequest item
 */
class SubjectRightsRequestItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get SubjectRightsRequest item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return SubjectRightsRequest
     */
    public function get(?array $queryParameters = null): SubjectRightsRequest
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, SubjectRightsRequest::class);
    }

    /**
     * Update SubjectRightsRequest item
     *
     * @param SubjectRightsRequest $item The item with updated properties
     * @return SubjectRightsRequest
     */
    public function patch(SubjectRightsRequest $item): SubjectRightsRequest
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, SubjectRightsRequest::class);
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
