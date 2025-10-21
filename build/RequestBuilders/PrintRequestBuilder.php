<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PrintModel;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PrintModelQueryOptions;

/**
 * Request builder for PrintModel
 */
class PrintRequestBuilder extends BaseRequestBuilder
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
     * @param PrintModelQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PrintModel
     */
    public function get(?PrintModelQueryOptions $options = null, ?array $queryParameters = null): PrintModel
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PrintModel::class);
    }

    /**
     * Create a new PrintModel
     *
     * @param PrintModel $item The item to create
     * @return PrintModel
     */
    public function post(PrintModel $item): PrintModel
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, PrintModel::class);
    }

}
