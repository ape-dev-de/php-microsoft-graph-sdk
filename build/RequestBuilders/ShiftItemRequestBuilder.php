<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Shift;

/**
 * Request builder for individual Shift item
 */
class ShiftItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Shift item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Shift
     */
    public function get(?array $queryParameters = null): Shift
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Shift::class);
    }

    /**
     * Update Shift item
     *
     * @param Shift $item The item with updated properties
     * @return Shift
     */
    public function patch(Shift $item): Shift
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Shift::class);
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
