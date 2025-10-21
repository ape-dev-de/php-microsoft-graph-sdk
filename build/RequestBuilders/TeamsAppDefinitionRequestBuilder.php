<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamsAppDefinition;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TeamsAppDefinitionQueryOptions;

/**
 * Request builder for TeamsAppDefinition
 */
class TeamsAppDefinitionRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param TeamsAppDefinitionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TeamsAppDefinition
     */
    public function get(?TeamsAppDefinitionQueryOptions $options = null, ?array $queryParameters = null): TeamsAppDefinition
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TeamsAppDefinition::class);
    }

}
