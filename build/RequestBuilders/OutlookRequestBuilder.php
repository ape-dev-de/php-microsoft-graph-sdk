<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OutlookUser;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\OutlookUserQueryOptions;

/**
 * Request builder for OutlookUser
 */
class OutlookRequestBuilder extends BaseRequestBuilder
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
     * @param OutlookUserQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return OutlookUser
     */
    public function get(?OutlookUserQueryOptions $options = null, ?array $queryParameters = null): OutlookUser
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, OutlookUser::class);
    }

    /**
     * Create a new OutlookUser
     *
     * @param OutlookUser $item The item to create
     * @return OutlookUser
     */
    public function post(OutlookUser $item): OutlookUser
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, OutlookUser::class);
    }
    /**
     * Get masterCategories request builder
     *
     * @return MasterCategoriesRequestBuilder
     */
    public function masterCategories(): MasterCategoriesRequestBuilder
    {
        return new MasterCategoriesRequestBuilder($this->client, $this->buildPath('masterCategories'));
    }

}
