<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\InferenceClassification;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\InferenceClassificationQueryOptions;

/**
 * Request builder for InferenceClassification
 */
class InferenceClassificationRequestBuilder extends BaseRequestBuilder
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
     * @param InferenceClassificationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return InferenceClassification
     */
    public function get(?InferenceClassificationQueryOptions $options = null, ?array $queryParameters = null): InferenceClassification
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, InferenceClassification::class);
    }

    /**
     * Create a new InferenceClassification
     *
     * @param InferenceClassification $item The item to create
     * @return InferenceClassification
     */
    public function post(InferenceClassification $item): InferenceClassification
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, InferenceClassification::class);
    }
    /**
     * Get overrides request builder
     *
     * @return OverridesRequestBuilder
     */
    public function overrides(): OverridesRequestBuilder
    {
        return new OverridesRequestBuilder($this->client, $this->buildPath('overrides'));
    }

}
