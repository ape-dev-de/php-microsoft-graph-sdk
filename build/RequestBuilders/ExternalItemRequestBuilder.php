<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\External;

/**
 * Request builder for individual External item
 */
class ExternalItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get External item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return External
     */
    public function get(?array $queryParameters = null): External
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, External::class);
    }

    /**
     * Update External item
     *
     * @param External $item The item with updated properties
     * @return External
     */
    public function patch(External $item): External
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, External::class);
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
