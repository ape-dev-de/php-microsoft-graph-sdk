<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PrintConnector;

/**
 * Request builder for individual PrintConnector item
 */
class PrintConnectorItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get PrintConnector item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return PrintConnector
     */
    public function get(?array $queryParameters = null): PrintConnector
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, PrintConnector::class);
    }

    /**
     * Update PrintConnector item
     *
     * @param PrintConnector $item The item with updated properties
     * @return PrintConnector
     */
    public function patch(PrintConnector $item): PrintConnector
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, PrintConnector::class);
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
