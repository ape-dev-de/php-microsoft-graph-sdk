<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationEventsFlowCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationEventsFlow;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\AuthenticationEventsFlows\AuthenticationEventsFlowRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\AuthenticationEventsFlows\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\AuthenticationEventsFlows\GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder;

/**
 * Request builder for /identity/authenticationEventsFlows
 */
class AuthenticationEventsFlowsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List authenticationEventsFlows
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return AuthenticationEventsFlowCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): AuthenticationEventsFlowCollectionResponse|null
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
     * Deserialize response to AuthenticationEventsFlowCollectionResponse|null
     */
    private function deserializeGet(string $body): AuthenticationEventsFlowCollectionResponse|null    {
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
            $items[] = new AuthenticationEventsFlow($item);
        }
        $collection = new AuthenticationEventsFlowCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create authenticationEventsFlow
     * @param AuthenticationEventsFlow $body Request body
     * @return AuthenticationEventsFlow|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(AuthenticationEventsFlow $body): AuthenticationEventsFlow|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to AuthenticationEventsFlow|null
     */
    private function deserializePost(string $body): AuthenticationEventsFlow|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AuthenticationEventsFlow($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $authenticationEventsFlowId The item ID
     * @return AuthenticationEventsFlowRequestBuilder
     */
    public function byId(string $authenticationEventsFlowId): AuthenticationEventsFlowRequestBuilder
    {
        return new AuthenticationEventsFlowRequestBuilder($this->client, $this->requestUrl . '/' . $authenticationEventsFlowId);
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
    /**
     * Navigate to graph.externalUsersSelfServiceSignUpEventsFlow
     *
     * @return GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder
     */
    public function graphExternalUsersSelfServiceSignUpEventsFlow(): GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder
    {
        return new GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder($this->client, $this->requestUrl . '/graph.externalUsersSelfServiceSignUpEventsFlow');
    }
}
