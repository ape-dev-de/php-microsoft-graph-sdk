<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ProfilePhoto;

/**
 * Request builder for individual ProfilePhoto item
 */
class ProfilePhotoItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ProfilePhoto item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ProfilePhoto
     */
    public function get(?array $queryParameters = null): ProfilePhoto
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ProfilePhoto::class);
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
