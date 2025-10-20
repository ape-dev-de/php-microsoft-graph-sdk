<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Contact;
use ApeDevDe\MicrosoftGraphSdk\Models\ContactCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ContactQueryOptions;

/**
 * Request builder for Contact collection
 */
class ContactsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ContactQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ContactQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ContactCollectionResponse
     */
    public function get(?ContactQueryOptions $options = null, ?array $queryParameters = null): ContactCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ContactCollectionResponse::class);
    }

    /**
     * Create a new Contact
     *
     * @param Contact $item The item to create
     * @return Contact
     */
    public function post(Contact $item): Contact
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Contact::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ContactItemRequestBuilder
     */
    public function byId(string $id): ContactItemRequestBuilder
    {
        return new ContactItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->buildPath('$count'));
        return (int) $response->getBody()->getContents();
    }

}
