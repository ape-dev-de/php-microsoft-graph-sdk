<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SchemaExtension;

/**
 * Request builder for individual SchemaExtension item
 */
class SchemaExtensionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get SchemaExtension item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return SchemaExtension
     */
    public function get(?array $queryParameters = null): SchemaExtension
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, SchemaExtension::class);
    }

    /**
     * Update SchemaExtension item
     *
     * @param SchemaExtension $item The item with updated properties
     * @return SchemaExtension
     */
    public function patch(SchemaExtension $item): SchemaExtension
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, SchemaExtension::class);
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
