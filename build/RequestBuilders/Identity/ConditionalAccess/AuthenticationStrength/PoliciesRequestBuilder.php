<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess\AuthenticationStrength;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationStrengthPolicyCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationStrengthPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess\AuthenticationStrength\Policies\AuthenticationStrengthPolicyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess\AuthenticationStrength\Policies\CountRequestBuilder;

/**
 * Request builder for /identity/conditionalAccess/authenticationStrength/policies
 */
class PoliciesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get policies from identity
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return AuthenticationStrengthPolicyCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): AuthenticationStrengthPolicyCollectionResponse|null
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
     * Deserialize response to AuthenticationStrengthPolicyCollectionResponse|null
     */
    private function deserializeGet(string $body): AuthenticationStrengthPolicyCollectionResponse|null    {
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
            $items[] = new AuthenticationStrengthPolicy($item);
        }
        $collection = new AuthenticationStrengthPolicyCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to policies for identity
     * @param AuthenticationStrengthPolicy $body Request body
     * @return AuthenticationStrengthPolicy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(AuthenticationStrengthPolicy $body): AuthenticationStrengthPolicy|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to AuthenticationStrengthPolicy|null
     */
    private function deserializePost(string $body): AuthenticationStrengthPolicy|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AuthenticationStrengthPolicy($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $authenticationStrengthPolicyId The item ID
     * @return AuthenticationStrengthPolicyRequestBuilder
     */
    public function byId(string $authenticationStrengthPolicyId): AuthenticationStrengthPolicyRequestBuilder
    {
        return new AuthenticationStrengthPolicyRequestBuilder($this->client, $this->requestUrl . '/' . $authenticationStrengthPolicyId);
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
