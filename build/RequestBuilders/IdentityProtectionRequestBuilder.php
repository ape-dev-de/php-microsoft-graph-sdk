<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityProtectionRoot;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\IdentityProtectionRootQueryOptions;

/**
 * Request builder for IdentityProtectionRoot
 */
class IdentityProtectionRequestBuilder extends BaseRequestBuilder
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
     * @param IdentityProtectionRootQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return IdentityProtectionRoot
     */
    public function get(?IdentityProtectionRootQueryOptions $options = null, ?array $queryParameters = null): IdentityProtectionRoot
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, IdentityProtectionRoot::class);
    }

    /**
     * Create a new IdentityProtectionRoot
     *
     * @param IdentityProtectionRoot $item The item to create
     * @return IdentityProtectionRoot
     */
    public function post(IdentityProtectionRoot $item): IdentityProtectionRoot
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, IdentityProtectionRoot::class);
    }

}
