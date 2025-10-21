<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Privacy;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PrivacyQueryOptions;

/**
 * Request builder for Privacy
 */
class PrivacyRequestBuilder extends BaseRequestBuilder
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
     * @param PrivacyQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Privacy
     */
    public function get(?PrivacyQueryOptions $options = null, ?array $queryParameters = null): Privacy
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Privacy::class);
    }

    /**
     * Create a new Privacy
     *
     * @param Privacy $item The item to create
     * @return Privacy
     */
    public function post(Privacy $item): Privacy
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Privacy::class);
    }

}
