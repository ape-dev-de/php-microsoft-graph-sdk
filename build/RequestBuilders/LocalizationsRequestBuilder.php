<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AgreementFileLocalization;
use ApeDevDe\MicrosoftGraphSdk\Models\AgreementFileLocalizationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AgreementFileLocalizationQueryOptions;

/**
 * Request builder for AgreementFileLocalization
 */
class LocalizationsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new AgreementFileLocalizationQueryOptions())->top(10)->select(['displayName', 'mail']))
     * 2. Array parameters: get(queryParameters: ['$top' => 10, '$select' => 'displayName,mail'])
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
     * @param AgreementFileLocalizationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AgreementFileLocalizationCollectionResponse
     */
    public function get(?AgreementFileLocalizationQueryOptions $options = null, ?array $queryParameters = null): AgreementFileLocalizationCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AgreementFileLocalizationCollectionResponse::class);
    }

    /**
     * Create a new AgreementFileLocalization
     *
     * @param AgreementFileLocalization $item The item to create
     * @return AgreementFileLocalization
     */
    public function post(AgreementFileLocalization $item): AgreementFileLocalization
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AgreementFileLocalization::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return AgreementFileLocalizationItemRequestBuilder
     */
    public function byId(string $id): AgreementFileLocalizationItemRequestBuilder
    {
        return new AgreementFileLocalizationItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->getFullPath() . '/$count');
        return (int) $response->getBody()->getContents();
    }

}
