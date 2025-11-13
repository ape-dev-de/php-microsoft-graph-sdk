<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Authentication;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Fido2AuthenticationMethodCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\Fido2AuthenticationMethod;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Authentication\Fido2Methods\Fido2AuthenticationMethodRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Authentication\Fido2Methods\CountRequestBuilder;

/**
 * Request builder for /me/authentication/fido2Methods
 */
class Fido2MethodsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List fido2AuthenticationMethod
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return Fido2AuthenticationMethodCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): Fido2AuthenticationMethodCollectionResponse|null
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
     * Deserialize response to Fido2AuthenticationMethodCollectionResponse|null
     */
    private function deserializeGet(string $body): Fido2AuthenticationMethodCollectionResponse|null    {
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
            $items[] = new Fido2AuthenticationMethod($item);
        }
        $collection = new Fido2AuthenticationMethodCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $fido2AuthenticationMethodId The item ID
     * @return Fido2AuthenticationMethodRequestBuilder
     */
    public function byId(string $fido2AuthenticationMethodId): Fido2AuthenticationMethodRequestBuilder
    {
        return new Fido2AuthenticationMethodRequestBuilder($this->client, $this->requestUrl . '/' . $fido2AuthenticationMethodId);
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
