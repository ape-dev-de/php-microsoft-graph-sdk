<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DriveItem;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DriveItemQueryOptions;

/**
 * Request builder for DriveItem
 */
class RootRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param DriveItemQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DriveItem
     */
    public function get(?DriveItemQueryOptions $options = null, ?array $queryParameters = null): DriveItem
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DriveItem::class);
    }
    /**
     * Get content request builder
     *
     * @return ContentRequestBuilder
     */
    public function content(): ContentRequestBuilder
    {
        return new ContentRequestBuilder($this->client, $this->buildPath('content'));
    }

}
