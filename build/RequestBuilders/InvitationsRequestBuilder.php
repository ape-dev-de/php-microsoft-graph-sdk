<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Invitation;
use ApeDevDe\MicrosoftGraphSdk\Models\InvitationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\InvitationQueryOptions;

/**
 * Request builder for Invitation
 */
class InvitationsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new InvitationQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param InvitationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return InvitationCollectionResponse
     */
    public function get(?InvitationQueryOptions $options = null, ?array $queryParameters = null): InvitationCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, InvitationCollectionResponse::class);
    }

    /**
     * Create a new Invitation
     *
     * @param Invitation $item The item to create
     * @return Invitation
     */
    public function post(Invitation $item): Invitation
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Invitation::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DirectoryObjectItemRequestBuilder
     */
    public function byId(string $id): DirectoryObjectItemRequestBuilder
    {
        return new DirectoryObjectItemRequestBuilder($this->client, $this->buildPath($id));
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
