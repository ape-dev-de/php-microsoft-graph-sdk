<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SensitivityLabel;

/**
 * Request builder for individual SensitivityLabel item
 */
class SensitivityLabelItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get SensitivityLabel item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return SensitivityLabel
     */
    public function get(?array $queryParameters = null): SensitivityLabel
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, SensitivityLabel::class);
    }

    /**
     * Update SensitivityLabel item
     *
     * @param SensitivityLabel $item The item with updated properties
     * @return SensitivityLabel
     */
    public function patch(SensitivityLabel $item): SensitivityLabel
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, SensitivityLabel::class);
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
