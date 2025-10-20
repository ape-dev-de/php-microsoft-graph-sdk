<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Teamwork;

/**
 * Request builder for individual Teamwork item
 */
class TeamworkItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Teamwork item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Teamwork
     */
    public function get(?array $queryParameters = null): Teamwork
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Teamwork::class);
    }

    /**
     * Update Teamwork item
     *
     * @param Teamwork $item The item with updated properties
     * @return Teamwork
     */
    public function patch(Teamwork $item): Teamwork
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Teamwork::class);
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
