<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsExternal;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ExternalConnectorsExternalQueryOptions;

/**
 * Request builder for ExternalConnectorsExternal
 */
class ExternalRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $filter: Filter results
     * - $orderby: Order results
     * - $top: Limit number of results
     * - $skip: Skip number of results
     * - $expand: Expand related resources
     * - $search: Search query
     * - $count: Include count of items
     *
     * @param ExternalConnectorsExternalQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ExternalConnectorsExternal
     */
    public function get(?ExternalConnectorsExternalQueryOptions $options = null, ?array $queryParameters = null): ExternalConnectorsExternal
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ExternalConnectorsExternal::class);
    }

    /**
     * Create a new ExternalConnectorsExternal
     *
     * @param ExternalConnectorsExternal $item The item to create
     * @return ExternalConnectorsExternal
     */
    public function post(ExternalConnectorsExternal $item): ExternalConnectorsExternal
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ExternalConnectorsExternal::class);
    }

}
