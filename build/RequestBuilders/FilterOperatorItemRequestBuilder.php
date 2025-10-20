<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\FilterOperator;

/**
 * Request builder for individual FilterOperator item
 */
class FilterOperatorItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get FilterOperator item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return FilterOperator
     */
    public function get(?array $queryParameters = null): FilterOperator
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, FilterOperator::class);
    }

    /**
     * Update FilterOperator item
     *
     * @param FilterOperator $item The item with updated properties
     * @return FilterOperator
     */
    public function patch(FilterOperator $item): FilterOperator
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, FilterOperator::class);
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
