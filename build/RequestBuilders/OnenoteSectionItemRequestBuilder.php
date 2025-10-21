<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenoteSection;

/**
 * Request builder for individual OnenoteSection item
 */
class OnenoteSectionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get OnenoteSection item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return OnenoteSection
     */
    public function get(?array $queryParameters = null): OnenoteSection
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, OnenoteSection::class);
    }

    /**
     * Update OnenoteSection item
     *
     * @param OnenoteSection $item The item with updated properties
     * @return OnenoteSection
     */
    public function patch(OnenoteSection $item): OnenoteSection
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, OnenoteSection::class);
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
