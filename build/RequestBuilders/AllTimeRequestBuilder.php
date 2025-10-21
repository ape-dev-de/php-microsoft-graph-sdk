<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ItemActivityStat;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ItemActivityStatQueryOptions;

/**
 * Request builder for ItemActivityStat
 */
class AllTimeRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param ItemActivityStatQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ItemActivityStat
     */
    public function get(?ItemActivityStatQueryOptions $options = null, ?array $queryParameters = null): ItemActivityStat
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ItemActivityStat::class);
    }

}
