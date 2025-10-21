<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreSet;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TermStoreSetQueryOptions;

/**
 * Request builder for TermStoreSet
 */
class SetRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param TermStoreSetQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TermStoreSet
     */
    public function get(?TermStoreSetQueryOptions $options = null, ?array $queryParameters = null): TermStoreSet
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TermStoreSet::class);
    }

}
