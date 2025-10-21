<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreGroup;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TermStoreGroupQueryOptions;

/**
 * Request builder for TermStoreGroup
 */
class ParentGroupRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param TermStoreGroupQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TermStoreGroup
     */
    public function get(?TermStoreGroupQueryOptions $options = null, ?array $queryParameters = null): TermStoreGroup
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TermStoreGroup::class);
    }

}
