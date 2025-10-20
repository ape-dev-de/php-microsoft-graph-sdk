<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Education;

/**
 * Request builder for individual Education item
 */
class EducationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Education item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Education
     */
    public function get(?array $queryParameters = null): Education
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Education::class);
    }

    /**
     * Update Education item
     *
     * @param Education $item The item with updated properties
     * @return Education
     */
    public function patch(Education $item): Education
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Education::class);
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
