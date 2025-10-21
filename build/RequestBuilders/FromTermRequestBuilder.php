<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreTerm;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TermStoreTermQueryOptions;

/**
 * Request builder for TermStoreTerm
 */
class FromTermRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param TermStoreTermQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TermStoreTerm
     */
    public function get(?TermStoreTermQueryOptions $options = null, ?array $queryParameters = null): TermStoreTerm
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TermStoreTerm::class);
    }

}
