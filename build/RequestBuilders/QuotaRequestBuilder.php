<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UnifiedStorageQuota;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\UnifiedStorageQuotaQueryOptions;

/**
 * Request builder for UnifiedStorageQuota
 */
class QuotaRequestBuilder extends BaseRequestBuilder
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
     * @param UnifiedStorageQuotaQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return UnifiedStorageQuota
     */
    public function get(?UnifiedStorageQuotaQueryOptions $options = null, ?array $queryParameters = null): UnifiedStorageQuota
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, UnifiedStorageQuota::class);
    }

    /**
     * Create a new UnifiedStorageQuota
     *
     * @param UnifiedStorageQuota $item The item to create
     * @return UnifiedStorageQuota
     */
    public function post(UnifiedStorageQuota $item): UnifiedStorageQuota
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, UnifiedStorageQuota::class);
    }
    /**
     * Get services request builder
     *
     * @return ServicesRequestBuilder
     */
    public function services(): ServicesRequestBuilder
    {
        return new ServicesRequestBuilder($this->client, $this->buildPath('services'));
    }

}
