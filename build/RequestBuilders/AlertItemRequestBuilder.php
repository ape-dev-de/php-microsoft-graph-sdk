<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Alert;

/**
 * Request builder for individual Alert item
 */
class AlertItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Alert item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Alert
     */
    public function get(?array $queryParameters = null): Alert
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Alert::class);
    }

    /**
     * Update Alert item
     *
     * @param Alert $item The item with updated properties
     * @return Alert
     */
    public function patch(Alert $item): Alert
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Alert::class);
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
