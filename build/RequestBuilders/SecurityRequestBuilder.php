<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Security;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SecurityQueryOptions;

/**
 * Request builder for Security
 */
class SecurityRequestBuilder extends BaseRequestBuilder
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
     * @param SecurityQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Security
     */
    public function get(?SecurityQueryOptions $options = null, ?array $queryParameters = null): Security
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Security::class);
    }

    /**
     * Create a new Security
     *
     * @param Security $item The item to create
     * @return Security
     */
    public function post(Security $item): Security
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Security::class);
    }

}
