<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ProfilePhoto;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ProfilePhotoQueryOptions;

/**
 * Request builder for ProfilePhoto
 */
class PhotoRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param ProfilePhotoQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ProfilePhoto
     */
    public function get(?ProfilePhotoQueryOptions $options = null, ?array $queryParameters = null): ProfilePhoto
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ProfilePhoto::class);
    }

}
