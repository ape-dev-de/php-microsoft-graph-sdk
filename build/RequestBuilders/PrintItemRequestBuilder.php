<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Print;

/**
 * Request builder for individual Print item
 */
class PrintItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Print item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Print
     */
    public function get(?array $queryParameters = null): Print
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Print::class);
    }

    /**
     * Update Print item
     *
     * @param Print $item The item with updated properties
     * @return Print
     */
    public function patch(Print $item): Print
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Print::class);
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
