<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Application;

/**
 * Request builder for individual Application item
 */
class ApplicationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Application item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Application
     */
    public function get(?array $queryParameters = null): Application
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Application::class);
    }

    /**
     * Update Application item
     *
     * @param Application $item The item with updated properties
     * @return Application
     */
    public function patch(Application $item): Application
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Application::class);
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
