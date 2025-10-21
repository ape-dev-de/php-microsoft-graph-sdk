<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationRoot;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\EducationRootQueryOptions;

/**
 * Request builder for EducationRoot
 */
class EducationRequestBuilder extends BaseRequestBuilder
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
     * @param EducationRootQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return EducationRoot
     */
    public function get(?EducationRootQueryOptions $options = null, ?array $queryParameters = null): EducationRoot
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, EducationRoot::class);
    }

    /**
     * Create a new EducationRoot
     *
     * @param EducationRoot $item The item to create
     * @return EducationRoot
     */
    public function post(EducationRoot $item): EducationRoot
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, EducationRoot::class);
    }

}
