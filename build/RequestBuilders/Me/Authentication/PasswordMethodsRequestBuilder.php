<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Authentication;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PasswordAuthenticationMethodCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\PasswordAuthenticationMethod;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Authentication\PasswordMethods\PasswordAuthenticationMethodRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Authentication\PasswordMethods\CountRequestBuilder;

/**
 * Request builder for /me/authentication/passwordMethods
 */
class PasswordMethodsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List passwordMethods
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return PasswordAuthenticationMethodCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): PasswordAuthenticationMethodCollectionResponse|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to PasswordAuthenticationMethodCollectionResponse|null
     */
    private function deserializeGet(string $body): PasswordAuthenticationMethodCollectionResponse|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new PasswordAuthenticationMethod($item);
        }
        $collection = new PasswordAuthenticationMethodCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to passwordMethods for me
     * @param PasswordAuthenticationMethod $body Request body
     * @return PasswordAuthenticationMethod|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(PasswordAuthenticationMethod $body): PasswordAuthenticationMethod|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to PasswordAuthenticationMethod|null
     */
    private function deserializePost(string $body): PasswordAuthenticationMethod|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PasswordAuthenticationMethod($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $passwordAuthenticationMethodId The item ID
     * @return PasswordAuthenticationMethodRequestBuilder
     */
    public function byId(string $passwordAuthenticationMethodId): PasswordAuthenticationMethodRequestBuilder
    {
        return new PasswordAuthenticationMethodRequestBuilder($this->client, $this->requestUrl . '/' . $passwordAuthenticationMethodId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
}
