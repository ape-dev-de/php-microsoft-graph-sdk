<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamsTemplate;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TeamsTemplateQueryOptions;

/**
 * Request builder for TeamsTemplate
 */
class TemplateRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param TeamsTemplateQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TeamsTemplate
     */
    public function get(?TeamsTemplateQueryOptions $options = null, ?array $queryParameters = null): TeamsTemplate
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TeamsTemplate::class);
    }

}
