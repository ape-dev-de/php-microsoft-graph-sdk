<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\InferenceClassificationOverride;

/**
 * Request builder for individual InferenceClassificationOverride item
 */
class InferenceClassificationOverrideItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get InferenceClassificationOverride item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return InferenceClassificationOverride
     */
    public function get(?array $queryParameters = null): InferenceClassificationOverride
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, InferenceClassificationOverride::class);
    }

    /**
     * Update InferenceClassificationOverride item
     *
     * @param InferenceClassificationOverride $item The item with updated properties
     * @return InferenceClassificationOverride
     */
    public function patch(InferenceClassificationOverride $item): InferenceClassificationOverride
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, InferenceClassificationOverride::class);
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
