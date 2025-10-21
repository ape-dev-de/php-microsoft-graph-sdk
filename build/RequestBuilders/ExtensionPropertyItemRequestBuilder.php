<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ExtensionProperty;

/**
 * Request builder for individual ExtensionProperty item
 */
class ExtensionPropertyItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ExtensionProperty item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ExtensionProperty
     */
    public function get(?array $queryParameters = null): ExtensionProperty
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ExtensionProperty::class);
    }

    /**
     * Update ExtensionProperty item
     *
     * @param ExtensionProperty $item The item with updated properties
     * @return ExtensionProperty
     */
    public function patch(ExtensionProperty $item): ExtensionProperty
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ExtensionProperty::class);
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
