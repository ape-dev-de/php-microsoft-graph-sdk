<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsIdentity;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ExternalConnectorsIdentityQueryOptions;

/**
 * Request builder for ExternalConnectorsIdentity
 */
class PerformedByRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param ExternalConnectorsIdentityQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ExternalConnectorsIdentity
     */
    public function get(?ExternalConnectorsIdentityQueryOptions $options = null, ?array $queryParameters = null): ExternalConnectorsIdentity
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ExternalConnectorsIdentity::class);
    }

}
