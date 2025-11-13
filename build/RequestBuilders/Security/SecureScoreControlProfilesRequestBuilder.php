<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecureScoreControlProfileCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\SecureScoreControlProfile;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\SecureScoreControlProfiles\SecureScoreControlProfileRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\SecureScoreControlProfiles\CountRequestBuilder;

/**
 * Request builder for /security/secureScoreControlProfiles
 */
class SecureScoreControlProfilesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List secureScoreControlProfiles
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return SecureScoreControlProfileCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): SecureScoreControlProfileCollectionResponse|null
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
     * Deserialize response to SecureScoreControlProfileCollectionResponse|null
     */
    private function deserializeGet(string $body): SecureScoreControlProfileCollectionResponse|null    {
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
            $items[] = new SecureScoreControlProfile($item);
        }
        $collection = new SecureScoreControlProfileCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to secureScoreControlProfiles for security
     * @param SecureScoreControlProfile $body Request body
     * @return SecureScoreControlProfile|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SecureScoreControlProfile $body): SecureScoreControlProfile|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SecureScoreControlProfile|null
     */
    private function deserializePost(string $body): SecureScoreControlProfile|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SecureScoreControlProfile($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $secureScoreControlProfileId The item ID
     * @return SecureScoreControlProfileRequestBuilder
     */
    public function byId(string $secureScoreControlProfileId): SecureScoreControlProfileRequestBuilder
    {
        return new SecureScoreControlProfileRequestBuilder($this->client, $this->requestUrl . '/' . $secureScoreControlProfileId);
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
