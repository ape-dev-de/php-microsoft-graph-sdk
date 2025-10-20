<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Compliance;
use ApeDevDe\MicrosoftGraphSdk\Models\ComplianceCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ComplianceQueryOptions;

/**
 * Request builder for Compliance collection
 */
class ComplianceRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ComplianceQueryOptions())->top(10)->select(['displayName', 'mail']))
     * 2. Array parameters: get(queryParameters: ['$top' => 10, '$select' => 'displayName,mail'])
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param ComplianceQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ComplianceCollectionResponse
     */
    public function get(?ComplianceQueryOptions $options = null, ?array $queryParameters = null): ComplianceCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ComplianceCollectionResponse::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ComplianceItemRequestBuilder
     */
    public function byId(string $id): ComplianceItemRequestBuilder
    {
        return new ComplianceItemRequestBuilder($this->client, $this->buildPath($id));
    }

}
