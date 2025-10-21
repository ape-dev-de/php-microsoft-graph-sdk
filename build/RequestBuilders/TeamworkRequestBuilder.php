<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Teamwork;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TeamworkQueryOptions;

/**
 * Request builder for Teamwork
 */
class TeamworkRequestBuilder extends BaseRequestBuilder
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
     * @param TeamworkQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Teamwork
     */
    public function get(?TeamworkQueryOptions $options = null, ?array $queryParameters = null): Teamwork
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Teamwork::class);
    }

    /**
     * Create a new Teamwork
     *
     * @param Teamwork $item The item to create
     * @return Teamwork
     */
    public function post(Teamwork $item): Teamwork
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Teamwork::class);
    }

}
