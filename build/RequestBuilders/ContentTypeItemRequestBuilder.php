<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ContentType;

/**
 * Request builder for individual ContentType item
 */
class ContentTypeItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ContentType item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ContentType
     */
    public function get(?array $queryParameters = null): ContentType
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ContentType::class);
    }

    /**
     * Update ContentType item
     *
     * @param ContentType $item The item with updated properties
     * @return ContentType
     */
    public function patch(ContentType $item): ContentType
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ContentType::class);
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
