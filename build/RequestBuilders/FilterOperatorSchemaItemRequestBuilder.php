<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\FilterOperatorSchema;

/**
 * Request builder for individual FilterOperatorSchema item
 */
class FilterOperatorSchemaItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get FilterOperatorSchema item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return FilterOperatorSchema
     */
    public function get(?array $queryParameters = null): FilterOperatorSchema
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, FilterOperatorSchema::class);
    }

    /**
     * Update FilterOperatorSchema item
     *
     * @param FilterOperatorSchema $item The item with updated properties
     * @return FilterOperatorSchema
     */
    public function patch(FilterOperatorSchema $item): FilterOperatorSchema
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, FilterOperatorSchema::class);
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
