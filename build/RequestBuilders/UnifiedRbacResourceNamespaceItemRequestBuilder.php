<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UnifiedRbacResourceNamespace;

/**
 * Request builder for individual UnifiedRbacResourceNamespace item
 */
class UnifiedRbacResourceNamespaceItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get UnifiedRbacResourceNamespace item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return UnifiedRbacResourceNamespace
     */
    public function get(?array $queryParameters = null): UnifiedRbacResourceNamespace
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, UnifiedRbacResourceNamespace::class);
    }

    /**
     * Update UnifiedRbacResourceNamespace item
     *
     * @param UnifiedRbacResourceNamespace $item The item with updated properties
     * @return UnifiedRbacResourceNamespace
     */
    public function patch(UnifiedRbacResourceNamespace $item): UnifiedRbacResourceNamespace
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, UnifiedRbacResourceNamespace::class);
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
