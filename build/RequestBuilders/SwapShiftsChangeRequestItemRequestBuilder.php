<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SwapShiftsChangeRequest;

/**
 * Request builder for individual SwapShiftsChangeRequest item
 */
class SwapShiftsChangeRequestItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get SwapShiftsChangeRequest item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return SwapShiftsChangeRequest
     */
    public function get(?array $queryParameters = null): SwapShiftsChangeRequest
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, SwapShiftsChangeRequest::class);
    }

    /**
     * Update SwapShiftsChangeRequest item
     *
     * @param SwapShiftsChangeRequest $item The item with updated properties
     * @return SwapShiftsChangeRequest
     */
    public function patch(SwapShiftsChangeRequest $item): SwapShiftsChangeRequest
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, SwapShiftsChangeRequest::class);
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
