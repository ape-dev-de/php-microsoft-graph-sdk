<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\InformationProtection;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\InformationProtectionQueryOptions;

/**
 * Request builder for InformationProtection
 */
class InformationProtectionRequestBuilder extends BaseRequestBuilder
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
     * @param InformationProtectionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return InformationProtection
     */
    public function get(?InformationProtectionQueryOptions $options = null, ?array $queryParameters = null): InformationProtection
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, InformationProtection::class);
    }

    /**
     * Create a new InformationProtection
     *
     * @param InformationProtection $item The item to create
     * @return InformationProtection
     */
    public function post(InformationProtection $item): InformationProtection
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, InformationProtection::class);
    }

}
