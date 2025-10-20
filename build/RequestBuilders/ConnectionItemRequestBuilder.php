<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Connection;

/**
 * Request builder for individual Connection item
 */
class ConnectionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Connection item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Connection
     */
    public function get(?array $queryParameters = null): Connection
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Connection::class);
    }

    /**
     * Update Connection item
     *
     * @param Connection $item The item with updated properties
     * @return Connection
     */
    public function patch(Connection $item): Connection
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Connection::class);
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
