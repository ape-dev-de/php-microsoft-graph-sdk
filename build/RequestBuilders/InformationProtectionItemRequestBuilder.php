<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\InformationProtection;

/**
 * Request builder for individual InformationProtection item
 */
class InformationProtectionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get InformationProtection item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return InformationProtection
     */
    public function get(?array $queryParameters = null): InformationProtection
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, InformationProtection::class);
    }

    /**
     * Update InformationProtection item
     *
     * @param InformationProtection $item The item with updated properties
     * @return InformationProtection
     */
    public function patch(InformationProtection $item): InformationProtection
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, InformationProtection::class);
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
