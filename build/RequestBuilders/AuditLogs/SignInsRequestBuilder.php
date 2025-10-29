<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuditLogs;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SignInCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\SignIn;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuditLogs\SignIns\SignInRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuditLogs\SignIns\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuditLogs\SignIns\ConfirmCompromisedRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuditLogs\SignIns\ConfirmSafeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuditLogs\SignIns\DismissRequestBuilder;

/**
 * Request builder for /auditLogs/signIns
 */
class SignInsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List signIns
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return SignInCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): SignInCollectionResponse
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
     * Deserialize response to SignInCollectionResponse
     */
    private function deserializeGet(string $body): mixed
    {
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
            $items[] = new SignIn($item);
        }
        $collection = new SignInCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to signIns for auditLogs
     * @param SignIn $body Request body
     * @return SignIn
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SignIn $body): SignIn
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SignIn
     */
    private function deserializePost(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new SignIn($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $signInId The item ID
     * @return SignInRequestBuilder
     */
    public function byId(string $signInId): SignInRequestBuilder
    {
        return new SignInRequestBuilder($this->client, $this->requestUrl . '/' . $signInId);
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
     * Navigate to confirmCompromised
     *
     * @return ConfirmCompromisedRequestBuilder
     */
    public function confirmCompromised(): ConfirmCompromisedRequestBuilder
    {
        return new ConfirmCompromisedRequestBuilder($this->client, $this->requestUrl . '/confirmCompromised');
    }
    /**
     * Navigate to confirmSafe
     *
     * @return ConfirmSafeRequestBuilder
     */
    public function confirmSafe(): ConfirmSafeRequestBuilder
    {
        return new ConfirmSafeRequestBuilder($this->client, $this->requestUrl . '/confirmSafe');
    }
    /**
     * Navigate to dismiss
     *
     * @return DismissRequestBuilder
     */
    public function dismiss(): DismissRequestBuilder
    {
        return new DismissRequestBuilder($this->client, $this->requestUrl . '/dismiss');
    }
}
