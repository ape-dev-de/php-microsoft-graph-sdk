<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Copilot;

/**
 * Request builder for individual Copilot item
 */
class CopilotItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Copilot item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Copilot
     */
    public function get(?array $queryParameters = null): Copilot
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Copilot::class);
    }

    /**
     * Update Copilot item
     *
     * @param Copilot $item The item with updated properties
     * @return Copilot
     */
    public function patch(Copilot $item): Copilot
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Copilot::class);
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
