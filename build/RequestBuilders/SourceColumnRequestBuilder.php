<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ColumnDefinition;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ColumnDefinitionQueryOptions;

/**
 * Request builder for ColumnDefinition
 */
class SourceColumnRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param ColumnDefinitionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ColumnDefinition
     */
    public function get(?ColumnDefinitionQueryOptions $options = null, ?array $queryParameters = null): ColumnDefinition
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ColumnDefinition::class);
    }

}
