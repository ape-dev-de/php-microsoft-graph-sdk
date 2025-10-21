<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OfferShiftRequest;

/**
 * Request builder for individual OfferShiftRequest item
 */
class OfferShiftRequestItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get OfferShiftRequest item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return OfferShiftRequest
     */
    public function get(?array $queryParameters = null): OfferShiftRequest
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, OfferShiftRequest::class);
    }

    /**
     * Update OfferShiftRequest item
     *
     * @param OfferShiftRequest $item The item with updated properties
     * @return OfferShiftRequest
     */
    public function patch(OfferShiftRequest $item): OfferShiftRequest
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, OfferShiftRequest::class);
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
