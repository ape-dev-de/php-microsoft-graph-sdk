<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SynchronizationSchema;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SynchronizationSchemaQueryOptions;

/**
 * Request builder for SynchronizationSchema
 */
class SchemaRequestBuilder extends BaseRequestBuilder
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
     * @param SynchronizationSchemaQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SynchronizationSchema
     */
    public function get(?SynchronizationSchemaQueryOptions $options = null, ?array $queryParameters = null): SynchronizationSchema
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SynchronizationSchema::class);
    }

    /**
     * Create a new SynchronizationSchema
     *
     * @param SynchronizationSchema $item The item to create
     * @return SynchronizationSchema
     */
    public function post(SynchronizationSchema $item): SynchronizationSchema
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, SynchronizationSchema::class);
    }
    /**
     * Get directories request builder
     *
     * @return DirectoriesRequestBuilder
     */
    public function directories(): DirectoriesRequestBuilder
    {
        return new DirectoriesRequestBuilder($this->client, $this->buildPath('directories'));
    }

    /**
     * Get parseExpression request builder
     *
     * @return ParseExpressionRequestBuilder
     */
    public function parseExpression(): ParseExpressionRequestBuilder
    {
        return new ParseExpressionRequestBuilder($this->client, $this->buildPath('parseExpression'));
    }

}
