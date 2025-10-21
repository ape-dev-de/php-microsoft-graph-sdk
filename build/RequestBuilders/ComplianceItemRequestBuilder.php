<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Compliance;

/**
 * Request builder for individual Compliance item
 */
class ComplianceItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Compliance item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Compliance
     */
    public function get(?array $queryParameters = null): Compliance
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Compliance::class);
    }

    /**
     * Update Compliance item
     *
     * @param Compliance $item The item with updated properties
     * @return Compliance
     */
    public function patch(Compliance $item): Compliance
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Compliance::class);
    }

}
