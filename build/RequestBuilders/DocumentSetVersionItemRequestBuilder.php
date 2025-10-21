<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DocumentSetVersion;

/**
 * Request builder for individual DocumentSetVersion item
 */
class DocumentSetVersionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DocumentSetVersion item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DocumentSetVersion
     */
    public function get(?array $queryParameters = null): DocumentSetVersion
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DocumentSetVersion::class);
    }

    /**
     * Update DocumentSetVersion item
     *
     * @param DocumentSetVersion $item The item with updated properties
     * @return DocumentSetVersion
     */
    public function patch(DocumentSetVersion $item): DocumentSetVersion
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DocumentSetVersion::class);
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
