<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenotePage;

/**
 * Request builder for individual OnenotePage item
 */
class OnenotePageItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get OnenotePage item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return OnenotePage
     */
    public function get(?array $queryParameters = null): OnenotePage
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, OnenotePage::class);
    }

    /**
     * Update OnenotePage item
     *
     * @param OnenotePage $item The item with updated properties
     * @return OnenotePage
     */
    public function patch(OnenotePage $item): OnenotePage
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, OnenotePage::class);
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
