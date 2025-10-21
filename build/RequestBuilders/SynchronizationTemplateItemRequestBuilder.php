<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SynchronizationTemplate;

/**
 * Request builder for individual SynchronizationTemplate item
 */
class SynchronizationTemplateItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get SynchronizationTemplate item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return SynchronizationTemplate
     */
    public function get(?array $queryParameters = null): SynchronizationTemplate
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, SynchronizationTemplate::class);
    }

    /**
     * Update SynchronizationTemplate item
     *
     * @param SynchronizationTemplate $item The item with updated properties
     * @return SynchronizationTemplate
     */
    public function patch(SynchronizationTemplate $item): SynchronizationTemplate
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, SynchronizationTemplate::class);
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
