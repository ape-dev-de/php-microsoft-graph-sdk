<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ColumnDefinition;

/**
 * Request builder for individual ColumnDefinition item
 */
class ColumnDefinitionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ColumnDefinition item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ColumnDefinition
     */
    public function get(?array $queryParameters = null): ColumnDefinition
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ColumnDefinition::class);
    }

}
