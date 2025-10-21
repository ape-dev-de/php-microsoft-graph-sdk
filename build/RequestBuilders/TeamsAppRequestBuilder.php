<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamsApp;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TeamsAppQueryOptions;

/**
 * Request builder for TeamsApp
 */
class TeamsAppRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param TeamsAppQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TeamsApp
     */
    public function get(?TeamsAppQueryOptions $options = null, ?array $queryParameters = null): TeamsApp
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TeamsApp::class);
    }

}
