<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\FieldValueSet;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\FieldValueSetQueryOptions;

/**
 * Request builder for FieldValueSet
 */
class FieldsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param FieldValueSetQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return FieldValueSet
     */
    public function get(?FieldValueSetQueryOptions $options = null, ?array $queryParameters = null): FieldValueSet
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, FieldValueSet::class);
    }

}
