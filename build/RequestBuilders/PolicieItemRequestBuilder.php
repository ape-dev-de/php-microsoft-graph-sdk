<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Policie;

/**
 * Request builder for individual Policie item
 */
class PolicieItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Policie item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Policie
     */
    public function get(?array $queryParameters = null): Policie
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Policie::class);
    }

    /**
     * Update Policie item
     *
     * @param Policie $item The item with updated properties
     * @return Policie
     */
    public function patch(Policie $item): Policie
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Policie::class);
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
