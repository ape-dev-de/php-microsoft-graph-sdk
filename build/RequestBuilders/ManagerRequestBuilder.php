<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObject;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DirectoryObjectQueryOptions;

/**
 * Request builder for DirectoryObject
 */
class ManagerRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param DirectoryObjectQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DirectoryObject
     */
    public function get(?DirectoryObjectQueryOptions $options = null, ?array $queryParameters = null): DirectoryObject
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DirectoryObject::class);
    }

}
