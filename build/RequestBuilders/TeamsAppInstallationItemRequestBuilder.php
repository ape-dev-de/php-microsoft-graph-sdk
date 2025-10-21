<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamsAppInstallation;

/**
 * Request builder for individual TeamsAppInstallation item
 */
class TeamsAppInstallationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get TeamsAppInstallation item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return TeamsAppInstallation
     */
    public function get(?array $queryParameters = null): TeamsAppInstallation
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, TeamsAppInstallation::class);
    }

    /**
     * Update TeamsAppInstallation item
     *
     * @param TeamsAppInstallation $item The item with updated properties
     * @return TeamsAppInstallation
     */
    public function patch(TeamsAppInstallation $item): TeamsAppInstallation
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, TeamsAppInstallation::class);
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
