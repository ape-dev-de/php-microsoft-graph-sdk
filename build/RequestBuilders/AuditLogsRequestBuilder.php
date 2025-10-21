<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AuditLogRoot;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AuditLogRootQueryOptions;

/**
 * Request builder for AuditLogRoot
 */
class AuditLogsRequestBuilder extends BaseRequestBuilder
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
     * @param AuditLogRootQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AuditLogRoot
     */
    public function get(?AuditLogRootQueryOptions $options = null, ?array $queryParameters = null): AuditLogRoot
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AuditLogRoot::class);
    }

    /**
     * Create a new AuditLogRoot
     *
     * @param AuditLogRoot $item The item to create
     * @return AuditLogRoot
     */
    public function post(AuditLogRoot $item): AuditLogRoot
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AuditLogRoot::class);
    }

}
