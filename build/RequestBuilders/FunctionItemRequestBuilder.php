<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Function;

/**
 * Request builder for individual Function item
 */
class FunctionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Function item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Function
     */
    public function get(?array $queryParameters = null): Function
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Function::class);
    }

    /**
     * Update Function item
     *
     * @param Function $item The item with updated properties
     * @return Function
     */
    public function patch(Function $item): Function
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Function::class);
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
