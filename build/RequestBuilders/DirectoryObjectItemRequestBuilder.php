<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObject;

/**
 * Request builder for individual DirectoryObject item
 */
class DirectoryObjectItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DirectoryObject item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DirectoryObject
     */
    public function get(?array $queryParameters = null): DirectoryObject
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DirectoryObject::class);
    }

}
